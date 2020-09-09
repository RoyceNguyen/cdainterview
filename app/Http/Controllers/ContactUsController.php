<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Page;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $company = Company::first();
        $page = Page::where(['name' => 'Contact Us'])->first();

        return view('contact-us', ['company' => $company, 'page' => $page]);
    }
}
