<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $fillable = ['user_id', 'date', 'total', 'pay_total'];
    protected $table = 'transactions';

    public function transactionDetail()
    {
        return $this->hasMany(transactionDetail::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
