<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transactionDetail extends Model
{
    protected $fillable = ['transaction_id', 'item_id', 'qty', 'subtotal'];
    protected $table = 'transaction_details';

    public function transaction()
    {
        return $this->belongsTo(transaction::class);
    }

    public function item()
    {
        return $this->belongsTo(item::class);
    }
}
