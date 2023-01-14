<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LufixService extends Model
{
    use HasFactory;

    protected $table = 'lufix_services';
    protected $fillable = ['title', 'description', 'proof', 'selling_type', 'duration', 'price_type'];

}
