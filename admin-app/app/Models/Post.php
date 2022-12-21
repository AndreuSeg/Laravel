<?php

namespace App\Models;

use App\Events\PostReadedEvent;
use App\Events\SaveAuthorOnCreatePostEvent;
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

    protected $dispatchesEvents = [
        // 'retrived' => SaveAuthorOnCreatePostEvent::class,
        'creating' => SaveAuthorOnCreatePostEvent::class,
        // 'created' => SaveAuthorOnCreatePostEvent::class,
        // 'updating' => SaveAuthorOnCreatePostEvent::class,
        // 'updated' => SaveAuthorOnCreatePostEvent::class,
        // 'saving' => SaveAuthorOnCreatePostEvent::class,
        // 'saved' => SaveAuthorOnCreatePostEvent::class,
        // 'deleting' => SaveAuthorOnCreatePostEvent::class,
        // 'deleted' => SaveAuthorOnCreatePostEvent::class,
        // 'restoring' => SaveAuthorOnCreatePostEvent::class,
        // 'restored' => SaveAuthorOnCreatePostEvent::class,
        // 'replicating' => SaveAuthorOnCreatePostEvent::class,
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
