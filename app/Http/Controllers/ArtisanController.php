<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Log;

class ArtisanController {
    static function index() {

        $response = [
            'data'=>'Error',
            'status'=>400
        ];

        try {
            $exitCode = Cache::flush();
            $exitCode = Session::flush();
            // cache + compiled + config + events + routes + views
            $exitCode = Artisan::call('optimize:clear');
            $exitCode = Artisan::call('optimize');

            $response['data']   = 'Ok';
            $response['status'] = 200;
        } catch (\Exception $exception) {
            $code = $exception->getCode();
            $message = $exception->getMessage();
            Log::error('Artisan:', ['code'=>$code, 'message'=>$message]);
        }

        return response()->json(
            $response['data'], 
            $response['status']
        );
    }
}