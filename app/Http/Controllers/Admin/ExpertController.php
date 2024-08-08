<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExpertRequest;
use App\Http\Requests\ExperUpdatetRequest;
use App\Models\Expert;
use Illuminate\Http\Request;
use App\Traits\SlugTrait;
use App\Traits\TranslationTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ExpertController extends Controller
{

    use SlugTrait;
    use TranslationTrait;
    public function index()
    {
        $experts = Expert::query()->get();
        return view('admin.experts.index', ['experts' => $experts]);
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
    public function store(ExpertRequest $request)
    {
        $validator = $request->validated();
        $input=$request->all();
      
        $expert = Expert::create($input);
        $input['slug'] = $this->createSlug('Expert', $expert->id, $expert->name, 'experts');

        if ($request->file('cv')) {
            $image_name = md5($expert->id . "app" . $expert->id . rand(1, 1000));

            $image_ext = $request->file('cv')->getClientOriginalExtension(); // example: pdf, word ... etc

            $image_full_name = $image_name . '.' . $image_ext;

            $uploads_folder =  getcwd() . '/uploads/experts';

            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('cv')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $expert->cv =  $image_full_name;
        }
        $expert->save();
        $this->translate($request, 'Expert', $expert->id);
        session::flash('success', 'تمت   الاضافة  بنجاح ');
        return redirect('dashboard/experts');
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
    public function update(ExperUpdatetRequest $request, $id)
    {
        $validator = $request->validated();
        $input=$request->all();
      
        $expert = Expert::find($id);
        $expert->update($input);
       $this->editSlug('Expert', $expert->id, $expert->name, 'experts');
       

        if ($request->file('cv')) {
            $image_name = md5($expert->id . "app" . $expert->id . rand(1, 1000));

            $image_ext = $request->file('cv')->getClientOriginalExtension(); // example: pdf, word ... etc

            $image_full_name = $image_name . '.' . $image_ext;

            $uploads_folder =  getcwd() . '/uploads/experts';

            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('cv')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $expert->cv =  $image_full_name;
        }
        $this->editTranslation($request, 'Expert', $expert->id);
        session::flash('success', 'تم   التعديل  بنجاح ');
        return redirect('dashboard/experts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $expert = Expert::find($id);
        if ($expert->pdf) {
            File::delete(public_path() . "upload/experts" . $expert->pdf);
        }

        $expert->delete();
        session::flash('delete', 'تم الحزف بنجاح');
        return back();
    }
}
