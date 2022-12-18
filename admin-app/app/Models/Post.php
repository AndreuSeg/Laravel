<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'category_id',
        'tittle',
        'slug',
        'content',
    ];

    protected $hidden = [
        'user_id',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class);
    }

    public function getUserAndCategoryAttribute() {
        $this->attributes['user_and_category'] = $this->user_id. '-' .$this->category_id;
    }
}
