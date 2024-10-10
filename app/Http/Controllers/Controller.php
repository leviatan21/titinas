<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;

include_once(app_path() . '/helpers/schemamarkup.php');

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
        static::SchemaMarkup();

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
                'label' => 'Tienda',
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

    static function SchemaMarkup() {
        $page           = '';
        $WebPageUrl     = static::$seo->CANONICAL;
        $inLanguage     ='es';
        $ImageUrl       = asset('/images/logo-titinas.jpg');
        $BreadcrumbList = static::Breadcrumb();
        $SiteNavigation = static::SiteNavigation();
        $WebSiteUrl     = static::$seo->SITEURL;

        $shema = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [// WebPage
                    '@type' => 'WebPage',
                    '@id' => $WebSiteUrl,
                    'url' => $WebSiteUrl,
                    'name' => static::$seo->TITLE,
                    'description' => static::$seo->DESCRIPTION,
                    'keywords' => static::$seo->KEYWORDS,
                    'inLanguage' => $inLanguage,
                    'datePublished' => static::$seo->DATE_PUBLISHED,
                    'dateModified' => static::$seo->DATE_MODIFIED,
                    ...!empty($BreadcrumbList) ?
                    ['breadcrumb' => [
                        '@id' => "$WebSiteUrl#BreadcrumbList"
                    ]] : [],
                    'isPartOf' =>  [
                        '@id' => "$WebSiteUrl#WebSite"
                    ],
                    'about' =>  [
                        '@id' => "$WebSiteUrl#LocalBusiness"
                    ],
                    'publisher' =>  [
                        '@id' => "$WebSiteUrl#Organization"
                    ],
                    'potentialAction' => [
                            [
                            '@type' => 'ReadAction',
                            'target'=> [
                                $WebPageUrl
                            ]
                        ]
                    ]
                ],
                ...!empty($BreadcrumbList) ?
                [// BreadcrumbList
                    '@type' => 'BreadcrumbList',
                    '@id' => "$WebSiteUrl#BreadcrumbList",
                    'name' => static::$seo->SITE_TITLE,
                    'itemListElement' => $BreadcrumbList
                ] : [],
                [// WebSite
                    '@type' => 'WebSite',
                    '@id' => "{$WebSiteUrl}#WebSite",
                    'url' => $WebSiteUrl,
                    'name' => static::$seo->SITE_TITLE,
                    'description' => static::$seo->SITE_DESCRIPTION,
                    'keywords' => static::$seo->KEYWORDS,
                    'inLanguage' => $inLanguage,
                    'publisher' =>  [
                        '@id' => "$WebSiteUrl#Organization"
                    ],
                    'hasPart' => $SiteNavigation,
                    'potentialAction' => [
                        [
                            '@type' => 'SearchAction',
                            'name' => static::$seo->SITE_TITLE,
                            'target'=> [
                                '@type' => 'EntryPoint',
                                'urlTemplate' => "$WebSiteUrl?s={search_term_string}"
                            ],
                            'query-input' => 'required name=search_term_string'
                        ]
                    ]
                ],
                [// LocalBusiness
                    '@type' => 'LocalBusiness',
                    '@id' => "$WebSiteUrl#LocalBusiness",
                    'url' => $WebSiteUrl,
                    'legalName' => static::$seo->SITE_TITLE,
                    'name' => static::$seo->SITE_TITLE,
                    'description' =>  static::$seo->SITE_DESCRIPTION,
                    'image' =>  [
                        '@type' => 'ImageObject',
                        'url' => $ImageUrl
                    ],
                    'logo'=>  [
                        '@type' => 'ImageObject',
                        'url' => static::$seo->LOGO
                    ],
                    'telephone' => config('custom.telephone', null),
                    'email' => config('custom.email', null),
                    'address' =>  [
                        '@type' => 'PostalAddress',
                        'streetAddress' => config('custom.streetAddress', null),
                        'addressLocality' => config('custom.addressLocality', null),
                        'addressRegion' => config('custom.addressRegion', null),
                        'addressCountry' => config('custom.addressCountry', null),
                        'postalCode' => config('custom.postalCode', null),
                    ],
                    'openingHoursSpecification' => [
                        [
                            '@type' => 'OpeningHoursSpecification',
                            'dayOfWeek' => [
                                'Monday',
                                'Tuesday',
                                'Wednesday',
                                'Thursday',
                                'Friday'
                            ],
                            'opens' => '10:00',
                            'closes' => '18:00'
                        ]
                    ],
                    'hasMap' => 'https://www.google.com/maps/search/?api=1&query=-34.57757196710851,-58.47470964877566',
                    'geo'=>  [
                        '@type' => 'GeoCoordinates',
                        'latitude' => -34.57757196710851,
                        'longitude' => -58.47470964877566
                    ]
                ],
                [// Organization
                    '@type' => 'Organization',
                    '@id' => "$WebSiteUrl#Organization",
                    'url' => $WebSiteUrl,
                    'name' => static::$seo->SITE_TITLE,
                    'description' => static::$seo->SITE_DESCRIPTION,
                    'keywords' => static::$seo->KEYWORDS,
                    'logo' =>  [
                        '@type' => 'ImageObject',
                        'inLanguage' => $inLanguage,
                        '@id' => "$WebSiteUrl#/schema/logo/image/",
                        'image' => $ImageUrl,
                        'caption'=> static::$seo->SITE_TITLE,
                    ],
                    'image' =>  [
                        '@id' => "$WebSiteUrl#/schema/logo/image/"
                    ],
                    'sameAs' => [
                        config('custom.facebook', null),
                        config('custom.youtube', null),
                        config('custom.instagram', null),
                        config('custom.whatsapp', null),
                        config('custom.tienda', null),
                    ]
                ]
            ]
        ];

        static::$shema = SchemaMarkup($shema);
    }

    static function Breadcrumb() {
        $list       = [];
        $routes     = [];
        $url        = url('');
        $name       = '';
        $position   = 0;
        $current    = url()->current();

        $parse  = parse_url($current);
        if (isset($parse['path'])) {
            $routes = explode('/', $parse['path']);
            foreach ($routes as $route) {
                if ($route == '') {
                    continue;
                }
                try {
                    $url        = "$url/$route";
                    $position   +=1;
                    $name       = Route::getRoutes()->match(Request::create($url))->getName();
                    $name       = str_replace('web.','', $name);
                    $name       = ucwords($name);

                    $list[] = [
                        '@type' => 'ListItem',
                        'position' => $position,
                        'name' => $name,
                        'item' => $url,
                    ];
                } catch (\Throwable $th) { }
            }
        }

        return $list;
    }

    static function SiteNavigation() {
        $list    = [];
        $exclude = [ null, 'storage.local', 'web.redir' ];
        $routes  = Route::getRoutes();

        $routes = collect($routes)->filter(function($route) {
            return str_starts_with($route->getName(), 'web.');
        });

        foreach ($routes as $route) {
            $list[] = [
                '@type' => 'WebPage',
                'name' => str_replace('web.','', $route->getName()),
                'url' => url($route->uri())
            ];
        }

        return $list;
    }
}
