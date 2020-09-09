<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Content;
use App\Models\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $company = Company::first();
        $page = Page::where(['name' => 'Home'])->first();
        $contents = Content::orderBy('order_no')->get();

        return view('home', ['company' => $company, 'page' => $page, 'contents' => $contents]);
    }
}
