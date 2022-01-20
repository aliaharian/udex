<?php

namespace App\Model;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;

class Attachments extends Model {
=======
use App\User;
use Illuminate\Database\Eloquent\Model;

class Attachments extends Model {
    /* Relationship to User */
    public function user_tbl() {
        return $this->belongsTo(User::class, 'uid', 'id');
    }

>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
    protected $table = 'attachments';
    protected $fillable = ['uid', 'orgname', 'path', 'type', 'directory', 'for_uid'];
    public $timestamps = true;
}
