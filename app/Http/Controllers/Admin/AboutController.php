<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAboutRequest;
use App\Models\About;
use App\Models\Category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Traits\SlugTrait;
use App\Traits\TranslationTrait;
use DataTables;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
  
    use ApiResponser;
    use SlugTrait;
    use TranslationTrait;
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
          
        $input = $request->validated();
        $about = About::create($input);
        $input['slug'] = $this->createSlug('About', $about->id, $about->title, 'abouts');

        if ($request->file('logo')) {
            $image_name = md5($about->id . "app" . $about->id . rand(1, 1000));

            $image_ext = $request->file('logo')->getClientOriginalExtension(); // example: png, jpg ... etc

            $image_full_name = $image_name . '.' . $image_ext;

            $uploads_folder =  getcwd() . '/uploads/abouts';

            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('logo')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $about->logo =  $image_full_name;
        }
        if ($request->file('image')) {
            $image_name = md5($about->id . "app" . $about->id . rand(1, 1000));

            $image_ext = $request->file('image')->getClientOriginalExtension(); // example: png, jpg ... etc

            $image_full_name = $image_name . '.' . $image_ext;

            $uploads_folder =  getcwd() . '/uploads/abouts';

            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('image')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $about->image =  $image_full_name;
        }
   
   
       
        $about->save();
        $this->translate($request, 'Vision', $about->id);
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
        $about = About::find($id);
       // dd($abouts);
       $about->update($input);
        if ($request->file('logo')) {
            $image_name = md5($about->id . "app" . $about->id . rand(1, 1000));
            $image_ext = $request->file('logo')->getClientOriginalExtension(); // example: png, jpg ... etc
            $image_full_name = $image_name . '.' . $image_ext;
            $uploads_folder =  getcwd() . '/uploads/abouts';
            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('logo')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $about->logo = $image_full_name;
        }
        if ($request->file('image')) {
            $image_name = md5($about->id . "app" . $about->id . rand(1, 1000));

            $image_ext = $request->file('image')->getClientOriginalExtension(); // example: png, jpg ... etc

            $image_full_name = $image_name . '.' . $image_ext;

            $uploads_folder =  getcwd() . '/uploads/abouts';

            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('image')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $about->image =  $image_full_name;
        }
        $about->save();
        $this->editTranslation($request, 'About', $about->id);
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
        $about = About::find($id);
        if($about->image)
        {
            File::delete(public_path()."upload/abouts".$about->image);
        }
       // $about->delete();
        if($about->logo)
        {
            File::delete(public_path()."upload/abouts".$about->logo);
        }
        $about->delete();
        session::flash('delete', 'تم الحزف بنجاح');
        return back();
    }
}
