<?php
include_once(app_path() . '/helpers/schemamarkup.php');
function SchemaMarkupCourse( $seo, $config, $item=[] ) {

    $shema = [
        '@context' =>  'http://schema.org/',
        '@type' =>  'Course',
        'name' => $item['title'],
        'description' => strip_tags(implode(' ', $item['description'])),
        'image' => $item['image-cover'],
        'inLanguage' => 'es',
        'offers' => [
            [
                '@type' => 'Offer',
                'category' => 'Paid',
                'price' => $item['price'],
                'priceCurrency' => 'ARS',
            ]
        ],
        'provider' =>  [
            '@context' => 'http://schema.org/', 
            '@type' => 'Organization', 
            'name' => $seo->SITE_TITLE,
            'logo' => $seo->LOGO, 
            'url' =>  $seo->SITEURL
        ],
        'hasCourseInstance' => [
            '@type' => 'CourseInstance',
            'courseMode' => 'Online',
            'courseWorkload' => 'PT6H',
            'instructor' => [
                '@type' => 'Person',
                'name' => $config->ROX_NAME
            ]
        ],
    ];
    return SchemaMarkup($shema);
}