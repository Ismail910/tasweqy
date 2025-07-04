<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class WalletTransaction extends Model
{
    protected $fillable = ['code', 'amount', 'status', 'type', 'user_id'];

    protected $casts = [
        'amount' => 'decimal:2',
        'status' => 'string',
        'type' => 'string',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
