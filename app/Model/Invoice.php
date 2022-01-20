<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use SoftDeletes;
=======
//use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
//    use SoftDeletes;
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969

    /* Relationship to User */
    public function user_tbl() {
        return $this->belongsTo(User::class, 'uid', 'id');
    }

    /* Relationship to User */
    public function design_tbl() {
        return $this->belongsTo(Design::class, 'order_id', 'id');
    }

    /* Relationship to User */
    public function project_tbl() {
        return $this->belongsTo(Projects::class, 'order_id', 'id');
    }

<<<<<<< HEAD
    use SoftDeletes;
    protected $table = 'invoice';
    protected $fillable = ['uid', 'title', 'product_type', 'order_id', 'payment_step', 'amount', 'status', 'payer_id'];
=======
//    use SoftDeletes;
    protected $table = 'invoice';
    protected $fillable = ['uid', 'title', 'product_type', 'order_id', 'payment_step', 'amount', 'status', 'payer_id', 'bt_transfer'];
>>>>>>> 1a20381fee2db03e17e96f9c9c1c5097750b9969
    public $timestamps = true;
}
