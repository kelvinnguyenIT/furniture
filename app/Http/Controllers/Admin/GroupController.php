<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GroupRequest;
use App\Models\Group;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $groupList=Group::get();
        return view('admin.group.index',compact('groupList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param GroupRequest $groupRequest
     * @return Response
     */
    public function store(GroupRequest $request)
    {
        $request['slug']=Str::slug($request->name);
        Group::create($request->all());
        return redirect()->route('group.index')->with('Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param Group $group
     * @return Response
     */
    public function show(Group $group)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Group $group
     * @return Response
     */
    public function edit(Group $group)
    {
        return view('admin.group.update-Group',compact('group'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param GroupRequest $groupRequest
     * @param Group $group
     * @return Response
     */
    public function update(GroupRequest $request, Group $group)
    {
        $request['slug']=Str::slug($request->name);
        $group->update($request->all());
        return redirect()->route('group.index')->with('Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Group $group
     * @return Response
     * @throws Exception
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('group.index')->with('Xóa thành công');
    }
}
