<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mailer extends Model
{
    use HasFactory;

    protected $table = 'mailers';
    protected $fillable = ['name','price'];
}

