<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $fillable = ['price', 'all_info', 'security_type', 'available_info', 'cvv', 'expiration', 'card_number', 'countrie'];

}
