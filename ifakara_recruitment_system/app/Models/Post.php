<?php

namespace App\Models;
use  App\Modes\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'application_date',
        'deadline_date',
        'post_description',
        'post_file',
        'email',
        'job_name',
        'position_name',
        'job_location',
        'created_at',
        'updated_at',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_name', 'job_id');
    }

    public function position()
    {
        return $this->belongsTo(Job::class, 'position_name', 'position_id');
    }

    public function location()
    {
        return $this->belongsTo(Job::class, 'job_location', 'location_id');
    }
}
