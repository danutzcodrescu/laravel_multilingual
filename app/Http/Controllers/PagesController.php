<?php

namespace App\Http\Controllers;

use DB;


use Illuminate\Http\Request;

use App\Http\Requests;


class PagesController extends Controller {
    
    public function __construct() {
        $this->middleware('localize');
    }
    
    public function homePage(Request $request) {
        if($request->route()->getPrefix()) {
            $home = \App\Page::where('name', "Home")->first()
                ->translations()->where("lang", LaravelLocalization::getCurrentLocale())->first()->body;
            return view ('welcome', compact('home'));  
        }
        return view ('index');         
    }
    
    public function retrievePage($lang, $id) {
        $home = \App\Page::where('name', $id)->first()->translations()->where("lang", $lang)->first()->body;
        return view ('welcome', compact('home'));         
    }
}
