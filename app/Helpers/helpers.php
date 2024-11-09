<?php

use Illuminate\Support\Str;
use Carbon\Carbon;

function sanitizeString($string='') {
    if (is_array($string)) {
        $string = implode(" ", $string);
    }
    $string = strip_tags($string);
    $string = preg_replace("/\s+/", " ", $string);
    $string = str_replace(["\r\n", "\n", "\t", "\r"], "", $string);
    return $string;
}

function parseSlug($string='', $replace='-') {
    return Str::slug($string, $replace);
}

function parseLink($string='', $route='', $title='Seguir leyendo') {
    $slug = parseSlug($string);
    $href = url("/$route/$slug");
    return [
        'title' => $title,
        'slug'  => $slug,
        'href'  => $href
    ];
}

function parseNow() {
    return Carbon::now();
}

function parseDate($string='') {
    return Carbon::parse($string)->diffForHumans();
}

function parseAsset($string='') {
    return !empty($string) ? asset($string) : null;
}

function print_pre($data, $var_dump=false, $exit=true) {

    if (!$data) {
        print_r('La función "print_pre" requiere al menos un parámetro');
        exit();
    }

    $var = ($var_dump) ? 'var_dump' : 'print_r';
    $backtrace = debug_backtrace();
    $file = $backtrace[0]['file'];
    $line = $backtrace[0]['line'];

    if (\Illuminate\Support\Facades\Request::ajax()) {
        $var($data);
        echo "\nInvocado desde File: {$file} - Line: {$line}\n";

        if ($exit) {
            exit('End.');
        }
    } else {
        echo ($var_dump) ? '' : '<pre>';
        $var($data);
        echo ($var_dump) ? '' : '</pre>';
        echo "Invocado desde File: {$file} - Line: {$line}<br /><br />";

        if ($exit) {
            exit('<strong>End.</strong>');
        }
    }
}