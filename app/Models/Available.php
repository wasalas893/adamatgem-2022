<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Available extends Model
{
    use HasFactory;

    protected $table = 'availability';

    protected $fillable=[
        'Available_name'
        
        
    ];
}
