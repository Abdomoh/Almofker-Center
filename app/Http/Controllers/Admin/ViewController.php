<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yousefpackage\Visits\Models\Visit;
use Illuminate\Support\Facades\DB;
class ViewController extends Controller
{
    function index(){

        //return DB::table('visits')->select('ip')->count(); // To count the number of views 
        $visits= Visit::all(); // To display the data in the visits table
        return view('admin.visit.visit',compact('visits'));
    }
}
