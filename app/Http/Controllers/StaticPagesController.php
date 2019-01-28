<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class StaticPagesController extends Controller
{
    /**
     * 主页
     * @return string
     */
    public function home()
    {
        $feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }
        return view('static_pages/home', compact('feed_items'));
    }

    /**
     * 帮助页
     * @return string
     */
    public function help()
    {
        return view('static_pages/help');
    }

    /**
     * 关于页
     * @return string
     */
    public function about()
    {
        return view('static_pages/about');
    }
}
