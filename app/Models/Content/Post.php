<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{
    use SoftDeletes, HasFactory, Sluggable;

    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
            ];
    }

    protected $table = 'posts';  // نام جدول
    protected $guarded = ['id'];  // فیلدهای محافظت شده

    
    protected $casts = ["image" => "array"];
    
    protected $fillable = ['title', 'summary', 'slug', 'image', 'status', 'tags', 'body', 'published_at', 'author_id', 'post_category', 'commentable' ];


    public function postCategory()
    {
        
        return $this->belongsTo(PostCategory::class, 'post_category');

    }


}

