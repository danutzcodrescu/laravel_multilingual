<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group( [ 'prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localize' ] ], function() {
    
    Route::get('/', function() {
        if (Request::route()->getPrefix()) {
            $home = \App\Page::where('name', "home")->first()
                ->translations()->where("lang", LaravelLocalization::getCurrentLocale())->first();
            return view ('welcome', compact('home'));
        }
        return view('index');
    });
    
    Route::get(LaravelLocalization::transRoute('routes.results'),function(){ 
        $home = \App\Page::where('name', 'results')->first()
            ->translations()->where("lang", LaravelLocalization::getCurrentLocale())->first();
        return view ('welcome', compact('home'));
    });
   
});

    


