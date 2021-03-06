<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id', '=', null)->with('children')->get();
    }

    public static function getSettings()
    {
        return $setting = Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();

        return view('home.index', ['setting'=>$setting]);
    }

    public function home()
    {
        return view('admin.index');
    }

    public function aboutus()
    {
        return view('home.about');
    }
    public function references()
    {
        return view('home.references');
    }
    public function faq()
    {
        return view('home.faq');
    }
    public function contact()
    {
        return view('home.contact');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('home');
    }
}
