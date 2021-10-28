<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallbackAddress extends Model
{
    use HasFactory;

    public $fillable = [
        'address', 'currency', 'pubkey', 'dest_tag', 'ipn_url'
    ];
}
