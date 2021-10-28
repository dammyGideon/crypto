<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $fillable = [
        'amount1', 'amount2', 'currency1', 'currency2', 'address',
        'buyer_email', 'buyer_name', 'item_name', 'item_number',
        'invoice', 'custom', 'ipn_url', 'txn_id', 'fee', 'dest_tag',
        'confirms_needed', 'timeout', 'status_url', 'qrcode_url',
        'received_amount', 'received_confirms', 'status', 'status_text'
    ];
    
}
