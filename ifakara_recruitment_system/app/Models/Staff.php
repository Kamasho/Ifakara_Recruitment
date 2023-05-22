<?php

namespace App\Models;
use  App\Modes\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contacts',
        'location',
        'staff_contract',
        'job_name',
        'created_at',
        'updated_at',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_name', 'job_id');
    }
}
