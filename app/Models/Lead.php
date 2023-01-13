<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $table = 'leads';

    // protected $fillable = [
    //     'name',
    //     'email',
    //     'phone',
    //     'address',
    //     'city',
    //    'state',
    //     'zip',
    //     'country',
    //     'lead_type',
    //     'lead_source',
    //     'lead_source_id',
    //     'lead_source_type',
    //     'lead_status',
    //     'lead_status_id',
    //     'created_at',
    //     'updated_at',
    // ];

}
