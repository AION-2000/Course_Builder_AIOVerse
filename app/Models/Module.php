<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'description',
        'course_id',
    ];

    // A module belongs to a course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    // A module has many contents
    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}