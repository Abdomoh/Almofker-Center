<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vision extends Model
{
    use HasFactory;

    protected $fillable = ['vision', 'message', 'values'];

    protected $appends = [
        'vision_ar', 'message_ar', 'values_ar', 'slug',
    ];

    public function getVisionArAttribute()
    {
        $translation = Translation::where('model', 'Vision')
            ->where('row_id', $this->attributes['id'])
            ->where('field', 'vision')
            ->first();

        return $translation ? $translation->value : null;
    }

    public function getMessageArAttribute()
    {
        $translation = Translation::where('model', 'Vision')
            ->where('row_id', $this->attributes['id'])
            ->where('field', 'message')
            ->first();

        return $translation ? $translation->value : null;
    }

    public function getValuesArAttribute()
    {
        $translation = Translation::where('model', 'Vision')
            ->where('row_id', $this->attributes['id'])
            ->where('field', 'values')
            ->first();

        return $translation ? $translation->value : null;
    }

    public function getSlugAttribute()
    {
        $slug = Slug::where('model', 'Vision')
            ->where('row_id', $this->attributes['id'])
            ->first();

        return $slug ? $slug->value : null;
    }
}
