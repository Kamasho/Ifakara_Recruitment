<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_name',
        'job_location',
        'job_description',
        'job_file',
        'position_name',
        'position_description',
        'position_file',
        'created_at',
        'updated_at',
    ];
}
