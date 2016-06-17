<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller {
    
    public function homePage($lang) {
        
        $home = \App\Page::where('name', "Home")->first()
                ->translations()->where("lang", $lang)->first();
        return view ('welcome', compact('home'));            
        
    }
}
