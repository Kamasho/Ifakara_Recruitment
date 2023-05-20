<?php

namespace App\Models;
use  App\Modes\Jobs;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
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
        return $this->belongsTo(Jobs::class, 'job_name', 'job_id');
    }
}
