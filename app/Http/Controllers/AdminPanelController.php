<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use App\Models\Content;
use App\Models\Page;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function index(Request $request) {
        $company = Company::first();
        return view('admin.index', ['company' => $company->id]);
    }

    public function pages(Request $request) {
        $pages = Page::get();
        return view('admin.pages', ['pages' => $pages]);
    }

    public function contents(Request $request) {
        $contents = Content::orderBy('order_no')->get();
        return view('admin.contents', ['contents' => $contents]);
    }

    public function showPage(Request $request, $page) {
        return view('admin.page', ['page' => $page]);
    }

    public function showContent(Request $request, $content) {
        return view('admin.content', ['content' => $content]);
    }

}
