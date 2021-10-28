<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;


    public $fillable = [
        'amount', 'currency', 'currency2', 'address',
        'pbntag', 'dest_tag', 'ipn_url', 'auto_confirm', 'mass_withdrawal_id',
        'note', 'ref_id', 'status', 'status_text', 'txn_id', 'amounti'
    ];

}


