<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cpanel extends Model
{
    use HasFactory;
    protected $table = 'cpanels';

    protected $fillable = ['cpanel', 'user_name', 'password', 'source', 'country', 'hosting', 'seo_rank', 'price'];

}
