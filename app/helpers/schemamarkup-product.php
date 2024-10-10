<?php
use Carbon\Carbon;
include_once(app_path() . '/helpers/schemamarkup.php');
function SchemaMarkupProduct( $seo, $item=[] ) {

    $priceValidUntil = Carbon::now();
    $priceValidUntil->isLastOfMonth() ? $priceValidUntil->addDays(1)->lastOfMonth() : $priceValidUntil->lastOfMonth();

    $shema = [
        '@context' =>  'http://schema.org/',
        '@type' =>  'Product',
        'name' => $item['title'],
        'description' => strip_tags($item['description']),
        'image' => $item['image'],
        'inLanguage' => 'es',
        'provider' =>  [
            '@context' => 'http://schema.org/', 
            '@type' => 'Organization', 
            'name' => $seo->SITE_TITLE,
            'logo' => $seo->LOGO, 
            'url' =>  $seo->SITEURL
        ],
        'brand' => [
            '@type' => 'Brand',
            'name' => $seo->SITE_TITLE,
            'url' => $seo->SITEURL,
        ],
        'mainEntityOfPage' =>[
            '@type' => 'WebPage',
            'name' => $seo->SITE_TITLE,
            'url' => $seo->SITEURL,
        ],
        'offers' => [
            '@type' => 'Offer',
            'availability' => 'https://schema.org/InStock',
            'typicalAgeRange' => '18+',
            'category' => 'Paid',
            'price' => $item['price'],
            'priceCurrency' => 'ARS',
            'priceValidUntil' => $priceValidUntil->format('Y-m-d'),
            'seller' => [
                '@type' => 'Organization',
                'name' => $seo->SITE_TITLE,
                'url' => $seo->SITEURL
            ]
        ],
        'aggregateRating' => [
            '@type' => 'AggregateRating',
            'ratingValue' => 5,
            'reviewCount' => 1
        ],
        'review' => [
            '@type' => 'Review',
            'reviewRating' => [
                '@type' => 'Rating',
                'ratingValue' => 5,
                'bestRating' => 5
            ],
            'author' => [
                '@type' => 'Organization',
                'name' => $seo->SITE_TITLE,
                'url' => $seo->SITEURL
            ]
        ]
    ];
    return SchemaMarkup($shema);
}