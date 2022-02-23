<?php

namespace App\Http\Controllers;

class WelcomeController
{
    public function show()
    {
//        Route::get('/{test}', function($test) {
//            return view('test', [
//                'test' => [$test]
//            ]);
//    });
        return view('welcome');
    }
}
