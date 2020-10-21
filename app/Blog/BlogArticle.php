<?php

namespace App\Blog;

use Illuminate\Database\Eloquent\Model;

class BlogArticle extends Model
{
    protected $fillable = ['title', 'description', 'content', 'image', 'category_id', 'slug'];

    public function category()
    {
    	return $this->belongsTo('App\Blog\BlogCategory', 'category_id');
    }
}
