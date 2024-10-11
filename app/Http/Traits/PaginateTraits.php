<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Request;
use Illuminate\Pagination\LengthAwarePaginator;

trait PaginateTraits {

    static function Paginate( $collection, $perPage = 6 ) {
        $current    = Request::get( 'page', 1 );
        $path       = Request::url();
        $total      = $collection->count();
        $items      = $collection->forPage( $current, $perPage );
        $paginator  = new LengthAwarePaginator( $items, $total, $perPage, $current, ['path' => $path] );
        return [
            'paginator' => $paginator,
            'items' => $items
        ];
    }
}