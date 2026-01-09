<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class students extends Model
{
    use HasFactory;
    protected $fillable = [
        'schools_id',
        'full_name',
        'student_id',
        'email',
        'phone',
        
    ];
    public function schools()
    {
        return $this->belongsTo(schools::class, 'schools_id');

    }
}
