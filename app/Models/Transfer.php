<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;

    public $fillable = [
        'amount', 'currency', 'merchant', 'pbntag',
        'auto_confirm', 'ref_id', 'status'
    ];
    
}
