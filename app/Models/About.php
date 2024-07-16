<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable =['title','description','logo','phone','email','whatsapp','facebook','tweeter','Instagram','image'];

    protected $appends = [
        'title_ar', 'description_ar', 'slug', 'image_full_path',
    ];

    
    public function getImageFullPathAttribute()
    {
        return $this->image ? env('APP_URL') . 'uploads/abouts/' . $this->image : null;
    }

    public function getTitleArAttribute()
    {
        $translation = Translation::where('model', 'About')
            ->where('row_id', $this->attributes['id'])
            ->where('field', 'title')
            ->first();

        return $translation ? $translation->value : null;
    }

    public function getDescriptionArAttribute()
    {
        $translation = Translation::where('model', 'About')
            ->where('row_id', $this->attributes['id'])
            ->where('field', 'description')
            ->first();

        return $translation ? $translation->value : null;
    }

    public function getSlugAttribute()
    {
        $slug = Slug::where('model', 'About')
            ->where('row_id', $this->attributes['id'])
            ->first();

        return $slug ? $slug->value : null;
    }

}

