<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Attachments extends Model {
    /* Relationship to User */
    public function user_tbl() {
        return $this->belongsTo(User::class, 'uid', 'id');
    }

    protected $table = 'attachments';
    protected $fillable = ['uid', 'orgname', 'path', 'type', 'directory', 'for_uid'];
    public $timestamps = true;
}
