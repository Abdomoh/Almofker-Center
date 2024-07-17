<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable=['id','title','description','image'];

    
    protected $appends = [
        'title_ar', 'description_ar', 'slug', 'image_full_path',
    ];

    
    public function getImageFullPathAttribute()
    {
        return $this->image ? env('APP_URL') . 'uploads/fields/' . $this->image : null;
    }

    public function getTitleArAttribute()
    {
        $translation = Translation::where('model', 'Field')
            ->where('row_id', $this->attributes['id'])
            ->where('field', 'title')
            ->first();

        return $translation ? $translation->value : null;
    }

    public function getDescriptionArAttribute()
    {
        $translation = Translation::where('model', 'Field')
            ->where('row_id', $this->attributes['id'])
            ->where('field', 'description')
            ->first();

        return $translation ? $translation->value : null;
    }

    public function getSlugAttribute()
    {
        $slug = Slug::where('model', 'Field')
            ->where('row_id', $this->attributes['id'])
            ->first();

        return $slug ? $slug->value : null;
    }

}
