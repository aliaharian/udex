<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ConnectOptions extends Model
{
    protected $table = 'connect_options';
    protected $fillable = ['connect_meta'];
    public $timestamps = false;
}
