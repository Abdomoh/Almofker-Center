<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $fillable =['name','description','category_id','client','logo_client','date','url','img1','img2'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
