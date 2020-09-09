<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\UpdatePageRequest;
use App\Models\Page;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $pages = Page::get();
        return response()->json($pages, 200);
    }


    /**
     * Display the specified resource.
     *
     * @param Page $page
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Page $page)
    {
        return response()->json($page, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePageRequest $request
     * @param $page
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $data = $request->validated();

        if ($request->hasFile('cover_image')) {
            $new_name = Carbon::now("UTC")->timestamp . $request->file('cover_image')->getClientOriginalName();
            $request->file('cover_image')->move(public_path(). "/images/", $new_name);
            $data['cover_image'] = $new_name;
        } else {
            $data['cover_image'] = $page->cover_image;
        }
        $page->update($data);
        return response()->json($request, 200);
    }

}
