<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    protected $table = 'log';

    const LEVEL_ALL = 2;
    const LEVEL_ERROR = 1;
    const LEVEL_NONE = 0;

    public $fillable = [
        'type', 'log'
    ];
    
}
