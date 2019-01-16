<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    /**
     * 主页
     * @return string
     */
    public function home()
    {
        return view('static_pages/home');
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
