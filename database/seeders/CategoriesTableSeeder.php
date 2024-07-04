<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $categories=['برمجة وتصميم مواقع الويب','برمجة وتصميم تطبيقات الموبايل','التسويق الالكتروني','تصميم الهويات البصرية'];
        foreach($categories as $category){
            Category::create([
                'name'      =>   $category,
                
            ]);
        }
       
    }
}
