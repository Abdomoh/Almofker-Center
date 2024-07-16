<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVisionRequest;
use App\Models\Vision;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use App\Traits\SlugTrait;
use App\Traits\TranslationTrait;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Session;

class VisionController extends Controller
{
    use ApiResponser;
    use SlugTrait;
    use TranslationTrait;
    public function index()
    {
        $visions = Vision::latest()->paginate(1);
        return view('admin.visions.index', ['visions' => $visions]);
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
    public function store(StoreVisionRequest $request)
    {
        $input = $request->validated();
        $vision = Vision::create($input);
        $input['slug'] = $this->createSlug('Vision', $vision->id, $vision->message, 'visions');
        $vision->save();
        $this->translate($request, 'Vision', $vision->id);
        session::flash('success', 'تمت   الاضافة  بنجاح ');
        return redirect('dashboard/visions');
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
    public function update(StoreVisionRequest $request, $id)
    {
        $validator = $request->validated();
        $input = $request->all();
        $vision = Vision::find($id);
        $vision->update($input);
        $vision->save();
        $this->editTranslation($request, 'Vision', $vision->id);
        session::flash('success', 'تم   التعديل  بنجاح ');
        return redirect('dashboard/visions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vision = Vision::find($id);
        $vision->delete();
        session::flash('delete', 'تم الحزف بنجاح');
        return back();
    }
}
