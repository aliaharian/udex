<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Attachments extends Model {
    protected $table = 'attachments';
    protected $fillable = ['uid', 'orgname', 'path', 'type', 'directory', 'for_uid'];
    public $timestamps = true;
}
