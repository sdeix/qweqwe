<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'url',
        'new_id',
        'updated_at',
        'created_at'
    ];
    public $timestamps = false;
    use HasFactory;
}
