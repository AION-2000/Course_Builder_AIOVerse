<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'text_content',
        'image_path',
        'video_path',
        'link_url',
        'module_id',
    ];

    // A content belongs to a module
    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}