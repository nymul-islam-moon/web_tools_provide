<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $table = 'leads';

    protected $fillable = ['download_link', 'phone_number', 'type', 'provider', 'proof', 'country', 'price', 'additional_information', 'description'];

}
