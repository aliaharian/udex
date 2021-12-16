<?php

namespace App\Model;

use App\User;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pages extends Model {
    use SoftDeletes;
    use Sluggable;

    /* Relationship to User */
    public function user_tbl() {
        return $this->belongsTo(User::class, 'uid', 'id');
    }


    protected $table = 'pages';
    protected $fillable = ['uid', 'title', 'slug', 'content_text', 'page_meta', 'template'];
    public $timestamps = true;

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => ['title']
            ]
        ];
    }
}
