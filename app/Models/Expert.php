<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'job', 'brief', 'cv'];

    protected $appends = [
        'name_ar', 'job_ar', 'brief_ar','slug', 'cv_full_path'
    ];
    public function getCvFullPathAttribut()
    {
        return $this->cv ? env('APP_URL') . 'uploads/experts' . $this->cv : null;
    }

    public function getNameArAttribute()
    {
        $translation = Translation::where('model', 'Expert')
            ->where('row_id', $this->attributes['id'])
            ->where('field', 'name')
            ->first();

        return $translation ? $translation->value : null;
    }
    public function getJobArAttribute()
    {
        $translation = Translation::where('model', 'Expert')
            ->where('row_id', $this->attributes['id'])
            ->where('field', 'job')
            ->first();

        return $translation ? $translation->value : null;
    }

    public function getBriefArAttribute()
    {
        $translation = Translation::where('model', 'Expert')
            ->where('row_id', $this->attributes['id'])
            ->where('field', 'brief')
            ->first();

        return $translation ? $translation->value : null;
    }

    public function getSlugAttribute()
    {
        $slug = Slug::where('model', 'Expert')
            ->where('row_id', $this->attributes['id'])
            ->first();

        return $slug ? $slug->value : null;
    }
}
