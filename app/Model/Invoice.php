<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use SoftDeletes;

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

    use SoftDeletes;
    protected $table = 'invoice';
    protected $fillable = ['uid', 'title', 'product_type', 'order_id', 'payment_step', 'amount', 'status', 'payer_id'];
    public $timestamps = true;
}
