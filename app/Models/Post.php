<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    //using boot
    protected static function boot(){
        parent::boot();

        static::saving(function($post){
            $post->slug = Str::slug($post->title);
        });
    }

    //using accessors & mutators
    public function title(): Attribute{
        return Attribute::make(

            set: fn($value)=>[
                'slug' => Str::slug($value),
                'title' => $value
            ]
        );
    }
}
