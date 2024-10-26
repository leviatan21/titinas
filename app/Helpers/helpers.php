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

function parseSlug($string='') {
    return Str::slug($string, '-');
}

function parseNow() {
    return Carbon::now();
}

function parseDate($string='') {
    return Carbon::parse($string)->diffForHumans();
}

function print_pre($data, $var_dump=false, $exit=true) {

    if (!$data) {
        print_r('La función ""print_pre" requiere al menos un parámetro');
        exit();
    }

    $var = ($var_dump) ? 'var_dump' : 'print_r';

    if (\Illuminate\Support\Facades\Request::ajax()) {
        $var($data);
        $backtrace = debug_backtrace();
        $file = $backtrace[0]['file'];
        $line = $backtrace[0]['line'];
        echo "\nInvocado desde File: {$file} - Line: {$line}\n";

        if ($exit) {
            exit('End.');
        }
    } else {
        echo ($var_dump) ? '' : '<pre>';
        $var($data);
        $backtrace = debug_backtrace();
        $file = $backtrace[0]['file'];
        $line = $backtrace[0]['line'];
        echo ($var_dump) ? '' : '</pre>';
        echo "Invocado desde File: {$file} - Line: {$line}<br /><br />";

        if ($exit) {
            exit('<strong>End.</strong>');
        }
    }
}