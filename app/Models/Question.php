<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];
}
