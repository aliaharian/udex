<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Architectionary extends Model
{
    use Sluggable;

    protected $table = 'architectionary';
    protected $fillable = ['uid', 'title', 'slug', 'content_text', 'excerpt', 'status'];
    public $timestamps = true;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title']
            ]
        ];
    }
}
