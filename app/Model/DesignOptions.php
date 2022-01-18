<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DesignOptions extends Model {
    protected $table = 'design_options';
    protected $fillable = ['detached_meta', 'semi_detached_meta', 'end_of_terrace_meta', 'terrace_meta', 'flat_meta', 'bungalow_meta'];
    public $timestamps = false;
}
