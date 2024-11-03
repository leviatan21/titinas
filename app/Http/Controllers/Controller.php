<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;
use App\Http\Traits\SchemaMarkupTraits;

include_once(app_path('/Helpers/helpers.php'));

class Controller {

    static $config      = [];
    static $social      = [];
    static $breadcrumb  = [];
    static $navigation  = [];
    static $seo         = [];
    static $menu        = [];
    static $shema       = [];

    public function __construct() {
        static::Config();
        static::Social();
        static::Navigation();
        static::Breadcrumb();
        static::Seo();
        static::Menu();
        static::Shema();

        static::ViewShare();
    }

    static function ViewShare() {
        View::composer('*', function ($view) {
            $refresh = config('custom.refresh', '1.0.0');
            $view->with([
                'REFRESH'       => "?ver=$refresh",
                'CONFIG'        => static::$config,
                'SOCIAL'        => static::$social,
                'BREADCRUMB'    => static::$breadcrumb,
                'SEO'           => static::$seo,
                'MENU'          => static::$menu,
                'SCHEMA_MARKUP' => static::$shema,
            ]);
        });

        View::composer('errors::404', function ($view) {
            Log::channel('ErrorPage')->info('Page:', ['page' => url()->current()]);
            static::$seo->TITLE = 'Página de Error';
            $view->with('ERRORPAGE', true);
        });
    }

    static function Config() {
        static::$config = (object) [
            'ANA_NAME'          => config('custom.AnaName', 'Anabella Audubert'),
            'ANA_TEL'           => config('custom.AnaTel', '+54911 5562-9418'),
            'ANA_EMAIL'         => config('custom.AnaEmail', 'ana@titinas.com.ar'),
            'ROX_NAME'          => config('custom.RoxName', 'Roxana Caballero'),
            'ROX_TEL'           => config('custom.RoxTel', '+54911 5735-9821'),
            'ROX_EMAIL'         => config('custom.RoxaEmail', 'ventas.titinas@gmail.com'),
            'EMAIL_VENTAS'      => config('custom.EmailVentas', 'ventas.titinas@gmail.com'),
            'EMAIL_ADISTANCIA'  => config('custom.EmailAdistancia', 'ventas.titinas+adistancia@gmail.com'),
            'CATALOGS_LINK'     => url('/redirect?to=catalogos'),
            'DRIVE_PDF'         => config('custom.drivePdf', 'https://drive.google.com/drive/folders/1W-8xH6l98gaRglPqY1eXhXt-GSArmiHM?usp=sharing'),
            'PUNTO_VENTA'       => config('custom.puntoventa','https://docs.google.com/forms/d/1snk2faX6IcoLh3iqmX6hgQVNHLD4PZIXwre985aoHyw/edit')
        ];
    }

    static function Social() {
        static::$social = (object) [
            'facebook'          => config('custom.facebook', null),
            'youtube'           => config('custom.youtube', null),
            'instagram'         => config('custom.instagram', null),
            'pinterest'         => config('custom.pinterest', null),
            'whatsapp'          => config('custom.whatsapp', null),
            'esperienzadarte'   => config('custom.esperienzadarte', null),
            'tienda'            => config('custom.tienda', null),
        ];
    }

    static function Navigation() {
        $list    = [];
        $routes  = Route::getRoutes();

        $routes = collect($routes)->filter(function($route) {
            return str_starts_with($route->getName(), "web.");
        });

        foreach ($routes as $route) {
            $name   = str_replace(['web.','-'],['',' '], $route->getName());
            $list[] = [
                "@type" => "WebPage",
                "name" =>  ucfirst($name),
                "url" => url($route->uri())
            ];
        }

        static::$navigation = $list;
    }

    static function Breadcrumb() {
        $list       = [];
        $routes     = [];
        $url        = url('/');
        $name       = "";
        $position   = 1;
        $current    = url()->current();

        $parse  = parse_url($current);
        if (isset($parse["path"])) {
            $routes = explode("/", $parse["path"]);
            foreach ($routes as $route) {
                if ($route == "") {
                    continue;
                }
                try {
                    $url        = "$url/$route";
                    $position   +=1;
                    $name       = str_replace('-',' ', $route);
                    $name       = ucfirst($name);

                    $list[] = [
                        "@type" => "ListItem",
                        "position" => $position,
                        "name" => $name,
                        "item" => $url,
                    ];
                } catch (\Exception $exception) {
                    $code = $exception->getCode();
                    $message = $exception->getMessage();
                    Log::error('Breadcrumb:', ['code'=>$code, 'message'=>$message]);
                }
            }

            if (!empty($list)) {
                array_unshift($list, [
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => 'Home',
                    "item" => url('/'),
                ]);
            }
        }

        static::$breadcrumb = $list;
    }

    static function Seo(array $seo=[]) {
        $env = env('APP_ENV', 'production');

        static::$seo = (object) [
            'CANONICAL'         => url()->current(),
            'SITEURL'           => url('/'),
            'LOCALE'            => 'es-AR',
            'SITE_TITLE'        => "Titina's",
            'SITE_DESCRIPTION'  => "Materiales para el arte y la creatividad",
            'TITLE'             => !empty($seo['title'])        ? $seo['title']         : config('custom.title',"materiales para el arte decorativo - Titinas"),
            'DESCRIPTION'       => !empty($seo['description'])  ? $seo['description']   : config('custom.description',"Titina's materiales para el arte decorativo"),
            'KEYWORDS'          => !empty($seo['keywords'])     ? $seo['keywords']      : config('custom.keywords',"Materiales, Arte, Decoración, Pasta cerámica"),
            'LOGO'              => asset('/images/logo-titinas.jpg'),
            'TWITTER_SITE'      => config('custom.twitter_account', null),
            'DATE_PUBLISHED'    => config('custom.datePublished', null),
            'DATE_MODIFIED'     => config('custom.dateModified', date(DATE_ATOM)),
            'GOOGLE_TAGMANAGER' => $env !== 'production' ? null : config('custom.googletagmanager', null),
            'FACEBOOK_PIXEL'    => $env !== 'production' ? null : config('custom.facebookpixel', null),
        ];
    }

    static function Menu() {
        static::$menu = [
            [
                'text' => 'Tienda',
                'href' => url('/redirect?to=shop'),
                'current' => false,
                'target' => '_blank', 
                'rel' => 'opener noreferrer nofollow',
                'label' => 'Comprar en la Tienda',
                'image' =>  asset('/images/logo-tienda.jpg')
            ],
            [
                'text' => 'Home',
                'href' => url('/'),
                'current' => static::$seo->CANONICAL===url('/')
            ],
            [
                'text' => 'Catálogos',
                'href' => url('/catalogos'),
                'current' => str_contains(static::$seo->CANONICAL, '/catalogos')
            ],
            [
                'text' => 'Blog',
                'href' => url('/blog'),
                'current' => str_contains(static::$seo->CANONICAL, '/blog')
            ],
            [
                'text' => 'Cursos',
                'href' => url('/cursos'),
                'current' => str_contains(static::$seo->CANONICAL, '/cursos')
            ],
            [
                'text' => 'Contacto',
                'href' => url('/contacto'),
                'current' => str_contains(static::$seo->CANONICAL, '/contacto')
            ],
            [
                'text' => 'Puntos de venta',
                'href' => url('/comercios'),
                'current' => str_contains(static::$seo->CANONICAL, '/comercios')
            ],
        ];
    }

    static function Shema() {
        static::$shema = SchemaMarkupTraits::Global(static::$seo, static::$breadcrumb, static::$navigation);
    }
}
