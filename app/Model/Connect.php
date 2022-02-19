<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Connect extends Model
{
    /* Relationship to User */
    public function user_tbl() {
        return $this->belongsTo(User::class, 'uid', 'id');
    }

    public function files()
    {
        $at_ids = $this->connect_meta;
        return ($at_ids);
    }


    use SoftDeletes;
    protected $table = 'connect';
    protected $fillable = ['uid', 'slug', 'design_meta'];
    public $timestamps = true;
}
