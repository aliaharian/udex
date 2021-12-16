<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contacts extends Model
{
    use SoftDeletes;
    protected $table = 'contacts';
    protected $fillable = ['uid', 'first_name', 'last_name', 'contact_type', 'newsletter', 'contact_meta'];
    public $timestamps = true;
}
