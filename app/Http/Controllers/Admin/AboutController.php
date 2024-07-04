<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAboutRequest;
use App\Models\About;
use App\Models\Category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts=About::latest()->paginate(1);
        $categoryies=Category::all();
        return view('admin.abouts.index',compact('abouts','categoryies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAboutRequest $request)
    {
          
        $validator = $request->validated();
        $input=$request->all();
        $abouts = About::create($input);
       // dd($abouts);
        if ($request->file('logo')) {
            $image_name = md5($abouts->id . "app" . $abouts->id . rand(1, 1000));
            $image_ext = $request->file('logo')->getClientOriginalExtension(); // example: png, jpg ... etc
            $image_full_name = $image_name . '.' . $image_ext;
            $uploads_folder =  getcwd() . '/uploads/';
            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('logo')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $abouts->logo = $image_full_name;
        }
      
       
        $abouts->save();
        //toastr()->success('تم تسجيل الدخول');
        session::flash('success', 'تمت   الاضافة  بنجاح ');
        return redirect('abouts');

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
    public function update(StoreAboutRequest $request, $id)
    {
        $validator = $request->validated();
        $input=$request->all();
        $abouts = About::find($id);
       // dd($abouts);
       $abouts->update($input);
        if ($request->file('logo')) {
            $image_name = md5($abouts->id . "app" . $abouts->id . rand(1, 1000));
            $image_ext = $request->file('logo')->getClientOriginalExtension(); // example: png, jpg ... etc
            $image_full_name = $image_name . '.' . $image_ext;
            $uploads_folder =  getcwd() . '/uploads/';
            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('logo')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $abouts->logo = $image_full_name;
        }
        $abouts->save();
        session::flash('success', 'تم   التعديل  بنجاح ');
        return redirect('abouts');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abouts = About::find($id);
        $abouts->delete();
        session::flash('delete', 'تم الحزف بنجاح');
        return back();
    }
}
