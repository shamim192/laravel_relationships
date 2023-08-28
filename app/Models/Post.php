<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'excerpt',
        'description',
        'is_published',
        'min_to_read',
    ];
    use HasFactory;

    public function user(): BelongsTo {

        return $this->belongsTo(User::class);
    }

    public function tags(): BelongsToMany {
        return $this -> belongsToMany(Tag::class);
    }

    public function image(): MorphOne{
        return $this-> morphOne(Image::class,'imageable');
    }

    public function comments():MorphMany{

        return $this -> morphMany(Comment::class,'commentable');
    }

    


}
