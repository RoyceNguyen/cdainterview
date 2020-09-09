<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\UpdateContentRequest;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $contents = Content::get();
        return response()->json($contents, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param Content $content
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Content $content)
    {
        return response()->json($content, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateContentRequest $request
     * @param Content $content
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateContentRequest $request, Content $content)
    {
        $content->update($request->validated());
        return response()->json($content->refresh(), 200);
    }
}
