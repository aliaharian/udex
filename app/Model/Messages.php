<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    /* Relationship to User */
    public function user_tbl() {
        return $this->belongsTo(User::class, 'uid', 'id');
    }

    protected $table = 'messages';
    protected $fillable = ['uid', 'messages'];
    public $timestamps = true;
}
