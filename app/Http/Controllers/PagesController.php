<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    /**
     * 首页
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function root()
    {
        return view('pages.root');
    }
}
