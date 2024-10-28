<?php

namespace App\Http\Traits;

use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
// https://drive.google.com/drive/folders/1WVGw_Um5vF5G7j1IeqyooZ-Y46Ube4cU
trait ProductosTraits {

    private static $minStock = 2;

    public static function parseJSON(array $productos) {
        return Arr::map($productos, function(array $item) {
            $item['gallery'] = static::stockJSON($item['gallery']);
            return $item;
        });
    }

    private static function stockJSON(string $path) {
        if (empty($path)) {
            return [];
        }
        $items = Storage::disk('stock')->json("{$path}.json", JSON_THROW_ON_ERROR);
        if (empty($items)) {
            return [];
        }
        $items = static::filterJSON($items);
        $items = static::galleryJSON($items, $path);
        return $items->all();
    }

    private static function filterJSON(array $items) {
        return Collection::wrap($items)
            ->filter( function(array $item) {
                return !empty($item['SKU']) && (int) $item['Stock'] >= static::$minStock;
            })
            ->transform( function(array $item) {
                return Arr::only($item, ['Nombre', 'SKU']);
            });
    }

    private static function galleryJSON(Collection $items, string $path) {
        return $items->map( function(array $item) use ($path) {
            $item['caption']    = "- {$item['Nombre']} -";
            $item['src']        = asset("/images/{$path}/{$item['SKU']}.webp");
            $item['thumbnail']  = asset("/images/{$path}/thumbnails/{$item['SKU']}.webp");
            return $item;
        });
    }

    public static function parsePHP(array $productos) {
        return Arr::map($productos, function(array $item) {
            $item['images'] = static::galleryPHP($item['asset'], $item['images']);
            return $item;
        });
    }

    private static function galleryPHP(string $path, Array $images) {
        if (empty($images)) {
            return [];
        }
        return Arr::map($images, function(string $image) use ($path) {
            $image = [
                'caption'       => "- {$image} -",
                'src'           => asset("{$path}/{$image}.webp"),
                'thumbnail'     => asset("{$path}/thumbnails/{$image}.webp")
            ];
            return $image;
        });
    }

    public static function filterNAV() {
        $productos  = [];
        $datas      = (object) [];

        $directories = Storage::disk('stock')->directories('productos');
        foreach($directories as $directory) {
            $jsons = Storage::disk('stock')->files($directory);

            foreach($jsons as $json) {
                $items = Storage::disk('stock')->json($json);
                if ($items && count($items)) {
                    $items = static::filterJSON($items)->filter(function(array $item) {
                        return  mb_stripos($item['Nombre'], 'nav') || 
                                mb_stripos($item['SKU'], 'nav') || 
                                mb_stripos($item['SKU'], '401') || 
                                mb_stripos($item['SKU'], '402') || 
                                mb_stripos($item['SKU'], '403') || 
                                mb_stripos($item['SKU'], '404') || 
                                mb_stripos($item['SKU'], '405') || 
                                mb_stripos($item['SKU'], '406') || 
                                mb_stripos($item['SKU'], '407') || 
                                mb_stripos($item['SKU'], '408') || 
                                mb_stripos($item['SKU'], '409') || 
                                mb_stripos($item['SKU'], '410');
                    });

                    if ($items->isNotEmpty()) {
                        $file       = str_replace('.json', '', $json);
                        $key        = str_replace('productos/', '', $directory);
                        $gallery    = static::galleryJSON($items, str_replace('.json', '', $json))->all();

                        if (!isset($datas->$key)) {
                            $datas->$key = (object) [];          
                        }

                        if (!isset($datas->$key->$file)) {
                            $datas->$key->$file['gallery'] = $gallery;
                        } else {
                            $datas->$key->$file['gallery'] = array_merge($datas->$key['gallery'], $gallery);
                        }
                    }
                }
            }
        }

        $datas = collect($datas)->sortBy(function ($item, $key) {
            return $key;
        });

        foreach($datas as $file => $data) {
            include(storage_path("app/data/productos/{$file}.php"));

            [
                'items' => $items
            ] = $file();

            foreach($data as $key => $item) {
                $filtered = Arr::where($items, function(array $producto) use ($key) {
                    return $producto['gallery'] == $key;
                });

                if ($filtered && count($filtered)) {
                    $filtered = array_values($filtered)[0];
                    $filtered['gallery'] = $item['gallery'];
                    $productos [] = $filtered;
                }
            }
        }

        return $productos;
    }
}
