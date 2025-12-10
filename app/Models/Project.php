<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumbnail_path',
        'website_url',
        'github_url',
        'is_published',
    ];

    protected static function booted()
    {
        static::creating(function ($project) {
            if (!$project->slug) {
                $project->slug = Str::slug($project->title) . '-' . Str::random(5);
            }
        });
    }

    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail_path
            ? asset('storage/' . $this->thumbnail_path)
            : null;
    }
}
