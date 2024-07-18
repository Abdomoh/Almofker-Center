<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Category;
use App\Models\Field;
use App\Models\Vision;
use App\Models\Work;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['welcome','layouts.nav'], function($view){
            $abouts=About::latest()->first();
            $visions=Vision::latest()->first();
            $fields=Field::latest()->get();
            $categoryies=Category::all();
            $work_app=Work::latest()->with('category')->where('category_id',2)->get();
            $work_web=Work::latest()->with('category')->where('category_id',1)->get();
            $works_graphic=Work::latest()->with('category')->where('category_id',4)->get();
            

           $view->with([
            'abouts'=> $abouts,
            'visions'=> $visions,
            'fields'=> $fields,
            'work_web'=>$work_web,
            'work_app'=> $work_app,
            'works_graphic'=>$works_graphic,
            'categoryies'=>$categoryies
           ]);
        });
    }
}
