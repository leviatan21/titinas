<?php

namespace App\Http\Traits;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Carbon\Carbon;

trait SchemaMarkupTraits {

    public static function View($shema) {
        return json_encode($shema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES, 10);
    }

    private static function SanitizeString( $string ) {
        if (is_array( $string )) {
            $string = implode(" ", $string );
        }
        $string = strip_tags( $string );
        $string = preg_replace( "/\s+/", " ", $string );
        $string = str_replace( ["\r\n", "\n", "\t", "\r"], "", $string );
        return $string;
    }

    public static function VideoObject( $seo, $item=[] ) {

        $embedUrl       = (!empty($item['facebook-share'])) ? $item['facebook-share'] : $item['youtube-share'];
        $description    = (!empty($item['description'])) ? $item['description'] : $item['title'];

        $shema = [
            "@context" => "https://schema.org",
            "@type" => "VideoObject",
            "name" => $item['title'],
            "description" => static::SanitizeString($description),
            "thumbnailUrl" => $item['image'],
            "embedUrl" => $embedUrl,
            "uploadDate" => $item['datePublished']
        ];

        return static::View($shema);
    }

    public static function BlogPosting( $seo, $item=[] ) {

        $shema = [
            "@context" => "https://schema.org",
            "@type" => "BlogPosting",
            "headline" => $item["title"],
            "datePublished" => $item["datePublished"],
            "dateModified" => $item["dateModified"],
            ...!empty($item["author"]["title"]) ? 
            ["author" => [
                "@type" => "Person",
                "name" => $item["author"]["title"],
                "url" => $item["author"]["href"]
            ]] : ["author" => [
                "@type" => "Organization", 
                "name" => $seo->SITE_TITLE,
                "url" =>  $seo->SITEURL
            ]],
            "publisher" => [
                "@id" => "{$seo->SITEURL}#Organization"
            ],
            "name" => static::SanitizeString($item["title"]),
            "description" => static::SanitizeString($item["content"][0]),
            "@id" => "{$seo->SITEURL}#richSnippet",
            "isPartOf" => [
                "@id" => "{$seo->SITEURL}#WebSite"
            ],
            ...!empty($item["image"]) ? 
            ["image" => [$item["image"]]] : [],
            "inLanguage" => "es-AR",
            "mainEntityOfPage" =>[
                "@type" => "WebPage",
                "name" => $seo->SITE_TITLE,
                "url" => $seo->SITEURL,
            ]
        ];

        return static::View($shema);
    }

    public static function Course( $seo, $config, $item=[] ) {

        $shema = [
            "@context" =>  "http://schema.org/",
            "@type" =>  "Course",
            "name" => $item["title"],
            "description" => static::SanitizeString($item["description"]),
            "image" => $item["image-cover"],
            "inLanguage" => "es-AR",
            "offers" => [
                [
                    "@type" => "Offer",
                    "category" => "Paid",
                    "price" => $item["price"],
                    "priceCurrency" => "ARS",
                ]
            ],
            "provider" =>  [
                "@context" => "http://schema.org/", 
                "@type" => "Organization", 
                "name" => $seo->SITE_TITLE,
                "logo" => $seo->LOGO, 
                "url" =>  $seo->SITEURL
            ],
            "hasCourseInstance" => [
                "@type" => "CourseInstance",
                "courseMode" => "Online",
                "courseWorkload" => "PT6H",
                "instructor" => [
                    "@type" => "Person",
                    "name" => $config->ROX_NAME
                ]
            ],
        ];

        return static::View($shema);
    }

    public static function Product( $seo, $item=[] ) {

        $priceValidUntil = Carbon::now();
        $priceValidUntil->isLastOfMonth() ? $priceValidUntil->addDays(1)->lastOfMonth() : $priceValidUntil->lastOfMonth();

        $shema = [
            "@context" => "http://schema.org/",
            "@type" => "Product",
            "name" => $item["title"],
            "description" => static::SanitizeString($item["description"]),
            "image" => $item["image"],
            "inLanguage" => "es-AR",
            "provider" =>  [
                "@context" => "http://schema.org/", 
                "@type" => "Organization", 
                "name" => $seo->SITE_TITLE,
                "logo" => $seo->LOGO, 
                "url" =>  $seo->SITEURL
            ],
            "brand" => [
                "@type" => "Brand",
                "name" => $seo->SITE_TITLE,
                "url" => $seo->SITEURL,
            ],
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "name" => $seo->SITE_TITLE,
                "url" => $seo->SITEURL,
            ],
            "offers" => [
                "@type" => "Offer",
                "availability" => "https://schema.org/InStock",
                "typicalAgeRange" => "18+",
                "category" => "Paid",
                "price" => $item["price"],
                "priceCurrency" => "ARS",
                "priceValidUntil" => $priceValidUntil->format("Y-m-d"),
                "seller" => [
                    "@type" => "Organization",
                    "name" => $seo->SITE_TITLE,
                    "url" => $seo->SITEURL
                ],
                "hasMerchantReturnPolicy" => [
                    "@type" => "MerchantReturnPolicy",
                    "returnPolicyCategory" => "https://schema.org/MerchantReturnUnspecified",
                    "applicableCountry" => "AR",
                ],
                "shippingDetails" => [
                    "@type" => "OfferShippingDetails",
                    "doesNotShip" => "http://schema.org/True",
                    "shippingDestination" => [
                        "@type" => "DefinedRegion",
                        "addressCountry" => "AR"
                    ],
                ],
            ],
            "aggregateRating" => [
                "@type" => "AggregateRating",
                "ratingValue" => 5,
                "reviewCount" => 1
            ],
            "review" => [
                "@type" => "Review",
                "reviewRating" => [
                    "@type" => "Rating",
                    "ratingValue" => 5,
                    "bestRating" => 5
                ],
                "author" => [
                    "@type" => "Organization",
                    "name" => $seo->SITE_TITLE,
                    "url" => $seo->SITEURL
                ]
            ]
        ];

        return static::View($shema);
    }

    public static function Global( $seo, $config ) {
        $ImageUrl       = asset("/images/logo-titinas.jpg");
        $BreadcrumbList = static::Breadcrumb();
        $SiteNavigation = static::SiteNavigation();

        $shema = [
            "@context" => "https://schema.org",
            "@graph" => [
                [// WebPage
                    "@type" => "WebPage",
                    "@id" => $seo->SITEURL,
                    "url" => $seo->SITEURL,
                    "name" => $seo->TITLE,
                    "description" => $seo->DESCRIPTION,
                    "keywords" => $seo->KEYWORDS,
                    "inLanguage" => "es-AR",
                    "datePublished" => $seo->DATE_PUBLISHED,
                    "dateModified" => $seo->DATE_MODIFIED,
                    ...!empty($BreadcrumbList) ?
                    ["breadcrumb" => [
                        "@id" => "{$seo->SITEURL}#BreadcrumbList"
                    ]] : [],
                    "isPartOf" =>  [
                        "@id" => "{$seo->SITEURL}#WebSite"
                    ],
                    "about" =>  [
                        "@id" => "{$seo->SITEURL}#LocalBusiness"
                    ],
                    "publisher" =>  [
                        "@id" => "{$seo->SITEURL}#Organization"
                    ],
                    "potentialAction" => [
                            [
                            "@type" => "ReadAction",
                            "target"=> [
                                $seo->CANONICAL
                            ]
                        ]
                    ]
                ],
                ...!empty($BreadcrumbList) ?
                [// BreadcrumbList
                    "@type" => "BreadcrumbList",
                    "@id" => "{$seo->SITEURL}#BreadcrumbList",
                    "name" => $seo->SITE_TITLE,
                    "itemListElement" => $BreadcrumbList
                ] : [],
                [// WebSite
                    "@type" => "WebSite",
                    "@id" => "{$seo->SITEURL}#WebSite",
                    "url" => $seo->SITEURL,
                    "name" => $seo->SITE_TITLE,
                    "description" => $seo->SITE_DESCRIPTION,
                    "keywords" => $seo->KEYWORDS,
                    "inLanguage" => "es-AR",
                    "publisher" =>  [
                        "@id" => "{$seo->SITEURL}#Organization"
                    ],
                    "hasPart" => $SiteNavigation,
                    "potentialAction" => [
                        [
                            "@type" => "SearchAction",
                            "name" => $seo->SITE_TITLE,
                            "target"=> [
                                "@type" => "EntryPoint",
                                "urlTemplate" => "{$seo->SITEURL}?s={search_term_string}"
                            ],
                            "query-input" => "required name=search_term_string"
                        ]
                    ]
                ],
                [// LocalBusiness
                    "@type" => "LocalBusiness",
                    "@id" => "{$seo->SITEURL}#LocalBusiness",
                    "url" => $seo->SITEURL,
                    "legalName" => $seo->SITE_TITLE,
                    "name" => $seo->SITE_TITLE,
                    "description" =>  $seo->SITE_DESCRIPTION,
                    "image" =>  [
                        "@type" => "ImageObject",
                        "url" => $ImageUrl
                    ],
                    "logo"=>  [
                        "@type" => "ImageObject",
                        "url" => $seo->LOGO
                    ],
                    "telephone" => config("custom.telephone", null),
                    "email" => config("custom.email", null),
                    "address" =>  [
                        "@type" => "PostalAddress",
                        "streetAddress" => config("custom.streetAddress", null),
                        "addressLocality" => config("custom.addressLocality", null),
                        "addressRegion" => config("custom.addressRegion", null),
                        "addressCountry" => config("custom.addressCountry", null),
                        "postalCode" => config("custom.postalCode", null),
                    ],
                    "openingHoursSpecification" => [
                        [
                            "@type" => "OpeningHoursSpecification",
                            "dayOfWeek" => [
                                "Monday",
                                "Tuesday",
                                "Wednesday",
                                "Thursday",
                                "Friday"
                            ],
                            "opens" => "10:00",
                            "closes" => "18:00"
                        ]
                    ],
                    "hasMap" => "https://www.google.com/maps/search/?api=1&query=-34.57757196710851,-58.47470964877566",
                    "geo"=>  [
                        "@type" => "GeoCoordinates",
                        "latitude" => -34.57757196710851,
                        "longitude" => -58.47470964877566
                    ]
                ],
                [// Organization
                    "@type" => "Organization",
                    "@id" => "{$seo->SITEURL}#Organization",
                    "url" => $seo->SITEURL,
                    "name" => $seo->SITE_TITLE,
                    "description" => $seo->SITE_DESCRIPTION,
                    "keywords" => $seo->KEYWORDS,
                    "logo" =>  [
                        "@type" => "ImageObject",
                        "inLanguage" => "es-AR",
                        "@id" => "{$seo->SITEURL}#/schema/logo/image/",
                        "image" => $ImageUrl,
                        "caption"=> $seo->SITE_TITLE,
                    ],
                    "image" =>  [
                        "@id" => "{$seo->SITEURL}#/schema/logo/image/"
                    ],
                    "sameAs" => [
                        config("custom.facebook", null),
                        config("custom.youtube", null),
                        config("custom.instagram", null),
                        config("custom.whatsapp", null),
                        config("custom.tienda", null),
                    ]
                ]
            ]
        ];

        return static::View($shema);
    }

    private static function Breadcrumb() {
        $list       = [];
        $routes     = [];
        $url        = url("");
        $name       = "";
        $position   = 0;
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
                    $name       = Route::getRoutes()->match(Request::create($url))->getName();
                    $name       = str_replace("web.","", $name);
                    $name       = ucwords($name);

                    $list[] = [
                        "@type" => "ListItem",
                        "position" => $position,
                        "name" => $name,
                        "item" => $url,
                    ];
                } catch (\Throwable $th) { }
            }
        }

        return $list;
    }

    private static function SiteNavigation() {
        $list    = [];
        $exclude = [ null, "storage.local", "web.redir" ];
        $routes  = Route::getRoutes();

        $routes = collect($routes)->filter(function($route) {
            return str_starts_with($route->getName(), "web.");
        });

        foreach ($routes as $route) {
            $list[] = [
                "@type" => "WebPage",
                "name" => str_replace("web.","", $route->getName()),
                "url" => url($route->uri())
            ];
        }

        return $list;
    }
}