<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Page;

class UserController extends Controller {
    
    private $pages;
    
    public function __construct() {
        $this->pages = \App\Page::all();
    }
    
    public function login() {
        // show the form
        return view('admin.login');
    }
    
    public function authenticate(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->route('admin-main');
        } else {
            return back()->withInput($request->session()->keep(['email']));
        }
    }
    
    public function logout() {
        Auth::logout();
        return redirect()->route('admin-login');
    }
    
    public function main() {
        $pages = $this->pages;
        return view('admin.mainAdmin', compact('pages'));
    }
    
    public function detailedPage(Request $request) {
        $name = Page::where('name', $request->name)->first()->translations()->get();
        $pages = $this->pages;
        return view('admin.page', compact('name', 'pages'));
    }
    
    public function update(Request $request) {
        $id = $request->id;
        Page::where('id', $id)->first()
            ->translations()->where('lang', 'en')
            ->update(['body' => $request->input('eng')]);
        Page::where('id', $id)->first()
            ->translations()->where('lang', 'fr')
            ->update(['body' => $request->input('fr')]);
        $name = Page::where('id', $request->id)->first()->name;
        return redirect()->route('admin-page', $name);
    }
}