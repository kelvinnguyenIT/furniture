<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cms;
use App\Services\ImageService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cmsList = Cms::all();
        return view('admin.cms.index', compact('cmsList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        return Cms::updateOrCreate(['key' => $request->key], $request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Cms $cms
     * @return void
     */
    public function edit(Cms $cms)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Cms $cms
     * @param ImageService $imageService
     * @return void
     */
    public function update(Request $request, Cms $cms, ImageService $imageService)
    {
        // NOP
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Cms $cms
     * @return Response
     * @throws Exception
     */
    public function destroy(Cms $cms)
    {
        $cms->delete();
        return redirect()->route('cms.index')->with('success', trans('Deleted successfully'));
    }

    public function upload(Request $request, ImageService $imageService)
    {
        return Cms::updateOrCreate(['key' => $request->key], ['value' => $imageService->store($request->file, config('constants.folder.cms'))])->value;
    }
}
