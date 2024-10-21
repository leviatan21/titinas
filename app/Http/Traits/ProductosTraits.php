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
}