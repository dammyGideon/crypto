<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    
    public $fillable = [
        'address', 'txn_id', 'status', 'status_text',
        'currency', 'confirms', 'amount', 'amounti', 'fee',
        'feei', 'dest_tag',
    ];
}
