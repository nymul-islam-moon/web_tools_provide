<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailerModel extends Model
{
    use HasFactory;

    protected $table = 'mailer';

    protected $fillable = ['name','price'];
}

