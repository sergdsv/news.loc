<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'category_id'];

    public function category(){

        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function shortBody($limit)
    {
        return Str::limit($this->body, $limit, '...');
    }

    public function scopeWithCategory($query, $limit_paginate = 15){
        return $query->with('category')
            ->orderBy('created_at', 'DESC')
            ->paginate($limit_paginate);
    }
}
