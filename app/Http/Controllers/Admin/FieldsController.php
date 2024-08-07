<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFieldRequest;
use App\Models\Field;
use Illuminate\Http\Request;

use App\Traits\ApiResponser;
use App\Traits\SlugTrait;
use App\Traits\TranslationTrait;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Session;
class FieldsController extends Controller
{
    use TranslationTrait;
    use SlugTrait;

    public function index()
    {
        $fields = Field::latest()->paginate(5);
        return view('admin.fields.index', ['fields' => $fields]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(StoreFieldRequest $request)
    {
        $input = $request->validated();
        
        $fields = Field::create($input);
        $input['slug'] = $this->createSlug('Field', $fields->id, $fields->message, 'fields');
        if ($request->file('image')) {
            $image_name = md5($fields->id . "app" . $fields->id . rand(1, 1000));

            $image_ext = $request->file('image')->getClientOriginalExtension(); // example: png, jpg ... etc

            $image_full_name = $image_name . '.' . $image_ext;

            $uploads_folder =  getcwd() . '/uploads/fields';

            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('image')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $fields->image =  $image_full_name;
        }
        $fields->save();
        $this->translate($request, 'Field', $fields->id);
        session::flash('success', 'تمت   الاضافة  بنجاح ');
        return redirect('dashboard/fields');
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
    public function update(StoreFieldRequest $request, $id)
    {
       
        $validator = $request->validated();
        $input=$request->all();
        $about = Field::find($id);
       // dd($abouts);
       $about->update($input);
        if ($request->file('image')) {
            $image_name = md5($about->id . "app" . $about->id . rand(1, 1000));

            $image_ext = $request->file('image')->getClientOriginalExtension(); // example: png, jpg ... etc

            $image_full_name = $image_name . '.' . $image_ext;

            $uploads_folder =  getcwd() . '/uploads/fields';

            if (!file_exists($uploads_folder)) {
                mkdir($uploads_folder, 0777, true);
            }
            $request->file('image')->move($uploads_folder, $image_name  . '.' . $image_ext);
            $about->image =  $image_full_name;
        }
        $about->save();
        $this->editTranslation($request, 'Field', $about->id);
        session::flash('success', 'تم   التعديل  بنجاح ');
        return redirect('dashboard/fields');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fields = Field::find($id);
        $fields->delete();
        session::flash('delete', 'تم الحزف بنجاح');
        return back();
    }
}
