<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class WhatsNews extends Model
{
    /* Relationship to User */
    public function user_tbl() {
        return $this->belongsTo(User::class, 'uid', 'id');
    }

    protected $table = 'whats_news';
    protected $fillable = ['uid', 'title', 'content_text', 'thumbnail', 'status'];
    public $timestamps = true;
}
