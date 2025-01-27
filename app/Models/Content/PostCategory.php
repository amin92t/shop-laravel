<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class PostCategory extends Model
{
    use SoftDeletes, HasFactory, Sluggable;

    public function sluggable()
{
    return [
        'slug' => [
            'source' => 'name'
        ]
        ];
}
    protected $table = 'post_categories';  // نام جدول
    protected $guarded = ['id'];  // فیلدهای محافظت شده
    protected $fillable = ['name', 'description', 'slug', 'image', 'status', 'tags'];
}
