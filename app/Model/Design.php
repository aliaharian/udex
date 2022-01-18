<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Design extends Model
{
    /* Relationship to User */
    public function user_tbl() {
        return $this->belongsTo(User::class, 'uid', 'id');
    }

    use SoftDeletes;
    protected $table = 'design';
    protected $fillable = ['uid', 'slug', 'design_meta'];
    public $timestamps = true;
}
