<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWorkRequest;
use App\Http\Requests\UpdateWorkRequest;
use App\Models\Category;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class WorkController extends Controller
{
   
    public function index()
    {
        $categoryies=Category::all();
        $works=Work::all();
        return view('admin.works.index',compact('works','categoryies'));
    }

    public function getShowWork($id)
    {
        $work=Work::with('category')->find($id);
        return view('admin.works.show',compact('work'));
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkRequest $request)
    {
           
        $validator = $request->validated();
        $input=$request->all();
        $works = Work::create($input);
        if ($request->file('logo')) {
            $image_name = md5($works->id . "app" . $works->id . rand(1, 1000));
            $image_ext = $request->file('logo')->getClientOriginalExtension(); // example: png, jpg ... etc
            $image_full_name = $image_name . '.' . $image_ext;
            $uploads_folder =  getcwd() . '/uploads/';
            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('logo')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $works->logo = $image_full_name;
        }
        if ($request->file('img1')) {
            $image_name = md5($works->id . "app" . $works->id . rand(1, 1000));
            $image_ext = $request->file('img1')->getClientOriginalExtension(); // example: png, jpg ... etc
            $image_full_name = $image_name . '.' . $image_ext;
            $uploads_folder =  getcwd() . '/uploads/';
            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('img1')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $works->img1 = $image_full_name;
        }
        if ($request->file('img2')) {
            $image_name = md5($works->id . "app" . $works->id . rand(1, 1000));
            $image_ext = $request->file('img2')->getClientOriginalExtension(); // example: png, jpg ... etc
            $image_full_name = $image_name . '.' . $image_ext;
            $uploads_folder =  getcwd() . '/uploads/';
            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('img2')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $works->img2 = $image_full_name;
        }
        $works->save();
        session::flash('success', 'تمت   الاضافة  بنجاح ');
        return redirect('works');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkRequest $request, $id)
    {
        $validator = $request->validated();
        $input=$request->all();
        $works = Work::find($id);
        $works->update($input);
        if ($request->file('logo')) {
            $image_name = md5($works->id . "app" . $works->id . rand(1, 1000));
            $image_ext = $request->file('logo')->getClientOriginalExtension(); // example: png, jpg ... etc
            $image_full_name = $image_name . '.' . $image_ext;
            $uploads_folder =  getcwd() . '/uploads/';
            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('logo')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $works->logo = $image_full_name;
        }
        if ($request->file('img1')) {
            $image_name = md5($works->id . "app" . $works->id . rand(1, 1000));
            $image_ext = $request->file('img1')->getClientOriginalExtension(); // example: png, jpg ... etc
            $image_full_name = $image_name . '.' . $image_ext;
            $uploads_folder =  getcwd() . '/uploads/';
            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('img1')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $works->img1 = $image_full_name;
        }
        if ($request->file('img2')) {
            $image_name = md5($works->id . "app" . $works->id . rand(1, 1000));
            $image_ext = $request->file('img2')->getClientOriginalExtension(); // example: png, jpg ... etc
            $image_full_name = $image_name . '.' . $image_ext;
            $uploads_folder =  getcwd() . '/uploads/';
            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('img2')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $works->img2 = $image_full_name;
        }
        $works->save();
        session::flash('success', 'تم   التعديل  بنجاح ');
        return redirect('works');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $works = Work::find($id);
        $works->delete();
        session::flash('delete', 'تم الحزف بنجاح');
        return back();
    }
}
