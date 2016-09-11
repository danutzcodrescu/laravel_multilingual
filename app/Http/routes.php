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


Route::group( [ 'prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localize' ], 'as' => 'main-' ], function() {
    
    Route::get('/', ['as'=>'home', function() {
        if (Request::route()->getPrefix()) {
            $home = \App\Page::where('name', "home")->first()
                ->translations()->where("lang", LaravelLocalization::getCurrentLocale())->first();
            return view ('welcome', compact('home'));
        }
        return view('index');
    }]);
    
    Route::group( [ 'prefix' => LaravelLocalization::transRoute('routes.results'), 'as'=>'projects-' ], function() {
        Route::get('/', ['as' => 'home',function() {
            $projects = \App\Page::where('name', 'results')->first()
                ->translations()->where("lang", LaravelLocalization::getCurrentLocale())->first();
            return view ('projects', compact('projects'));
        }]);
        Route::get('{id}', ['as'=>'detailed', function($id) {
            return view('detailed-proj');
        }]);
    });
    
    // Route::get(LaravelLocalization::transRoute('routes.results'),function(){ 
    //     $projects = \App\Page::where('name', 'results')->first()
    //         ->translations()->where("lang", LaravelLocalization::getCurrentLocale())->first();
    //     return view ('projects', compact('projects'));
    // });
    
     Route::get(LaravelLocalization::transRoute('routes.contact'), ['as' => 'contact', function(){ 
        $contact = \App\Page::where('name', 'contact')->first()
            ->translations()->where("lang", LaravelLocalization::getCurrentLocale())->first();
        return view ('contact', compact('contact'));
    }]);
   
});

    


