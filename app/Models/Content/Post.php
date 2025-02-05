<?php

namespace App\Models\Content;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


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

    public function user()
    {
        return $this->belongsTo(User::class, 'author_id'); // استفاده از author_id به جای user_id
    }


}

