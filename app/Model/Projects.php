<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Projects extends Model
{
    use SoftDeletes;
    protected $table = 'projects';
    protected $fillable = ['uid', 'project_meta'];
    public $timestamps = true;
}
