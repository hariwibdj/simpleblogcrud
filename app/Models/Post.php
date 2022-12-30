<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    Protected $fillable =[
        'title',
        'description',
    ];

    Protected function title():Attribute{
        return Attribute::make(
            set: fn($value)=>[
                'title'=> $value,
                'slug' => Str::slug($value)
            ]
        );
    }
}
