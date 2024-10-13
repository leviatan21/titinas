<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;


use App\Http\Traits\SchemaMarkupTraits;

class Controller {
    static $menu    = [];
    static $seo     = [];
    static $config  = [];
    static $social  = [];
    static $shema   = [];

    public function __construct() {
        static::menu();
        static::config();
        static::seo();
        static::$shema = SchemaMarkupTraits::Global( static::$seo, static::$config );

        static::ViewShare();
    }

    static function ViewShare() {
        View::composer('*', function ($view) {
            $refresh = config('custom.refresh', '1.0.0');
            $view->with([
                'MENU'          => static::$menu,
                'SEO'           => static::$seo,
                'SOCIAL'        => static::$social,
                'CONFIG'        => static::$config,
                'REFRESH'       => "?ver=$refresh",
                'SCHEMA_MARKUP' => static::$shema
            ]);
        });

        View::composer('errors::404', function ($view) {
            Log::channel('ErrorPage')->info('Page:', ['page' => url()->current()]);
            static::$seo->TITLE = 'Página de Error';
            $view->with([
                'ERRORPAGE' => true
            ]);
        });
    }

    static function menu( ) {
        static::$menu = [
            [
                'href' => url('/redirect?to=shop'),
                'target' => '_blank', 
                'rel' => 'opener noreferrer nofollow',
                'label' => 'Comprar en la Tienda',
                'text' => 'Tienda',
                'image' =>  asset('images/logo-tienda.jpg'),
            ],
            [
                'href' => url('/'),
                'text' => 'Home'
            ],
            [
                'href' => url('/catalogos'),
                'text' => 'Catálogos'
            ],
            [
                'href' => url('/blog'),
                'text' => 'Blog'
            ],
            [
                'href' => url('/cursos'),
                'text' => 'Cursos'
            ],
            [
                'href' => url('/contacto'),
                'text' => 'Contacto'
            ],
            [
                'href' => url('/comercios'),
                'text' => 'Puntos de venta'
            ],
        ];
    }

    static function config( ) {
        static::$config = (object) [
            'ANA_NAME'          => config('custom.AnaName', 'Anabella'),
            'ANA_TEL'           => config('custom.AnaTel', '+54911 5562-9418'),
            'ANA_EMAIL'         => config('custom.AnaEmail', 'ana@titinas.com.ar'),
            'ROX_NAME'          => config('custom.RoxName', 'Roxana Caballero'),
            'ROX_TEL'           => config('custom.RoxTel', '+54911 5735-9821'),
            'ROX_EMAIL'         => config('custom.RoxaEmail', 'ventas.titinas@gmail.com'),
            'EMAIL_VENTAS'      => config('custom.EmailVentas', 'ventas.titinas@gmail.com'),
            'EMAIL_ADISTANCIA'  => config('custom.EmailAdistancia', 'ventas.titinas+adistancia@gmail.com'),
            'DRIVE_PDF'         => config('custom.drivePdf', 'https://drive.google.com/drive/folders/1W-8xH6l98gaRglPqY1eXhXt-GSArmiHM?usp=sharing'),
            'PUNTO_VENTA'       => config('custom.puntoventa','https://docs.google.com/forms/d/1snk2faX6IcoLh3iqmX6hgQVNHLD4PZIXwre985aoHyw/edit')
        ];
    }

    static function seo( $seo = [] ) {
        static::$seo = (object) [
            'CANONICAL'         => url()->current(),
            'SITEURL'           => url(''),
            'LOCALE'            => 'es-AR',
            'SITE_TITLE'        => "Titina's",
            'SITE_DESCRIPTION'  => "Materiales para el arte y la creatividad",
            'TITLE'             => !empty($seo['title']) ? $seo['title'] : config('custom.title',"materiales para el arte decorativo - Titinas"),
            'DESCRIPTION'       => !empty($seo['description']) ? $seo['description'] : config('custom.description',"Titina's materiales para el arte decorativo"),
            'KEYWORDS'          => !empty($seo['keywords']) ? $seo['keywords'] : config('custom.keywords',"Materiales, Arte, Decoración, Pasta cerámica"),
            'LOGO'              => asset('/images/logo-titinas.jpg'),
            'TWITTER_SITE'      => config('custom.twitter_account', null),
            'DATE_PUBLISHED'    => config('custom.datePublished', null),
            'DATE_MODIFIED'     => config('custom.dateModified', date(DATE_ATOM)),
            'GOOGLE_TAGMANAGER' => config('custom.googletagmanager', null),
            'FACEBOOK_PIXEL'    => config('custom.facebookpixel', null),
        ];

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
}
