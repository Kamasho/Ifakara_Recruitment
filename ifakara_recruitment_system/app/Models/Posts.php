<?php

namespace App\Models;
use  App\Modes\Jobs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
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
        return $this->belongsTo(Jobs::class, 'job_name', 'job_id');
    }

    public function position()
    {
        return $this->belongsTo(Jobs::class, 'position_name', 'position_id');
    }

    public function location()
    {
        return $this->belongsTo(Jobs::class, 'job_location', 'location_id');
    }
}
