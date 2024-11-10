<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class RenewalController extends Controller {

    public function index() {
        static::Seo([
            'title' => "Nos renovamos - Titina's"
        ]);

        return view('errors.renewal');
    }
}
