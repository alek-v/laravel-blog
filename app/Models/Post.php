<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * @return object
     */
    public function category(): object
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return User
     */
    public function user(): object
    {
        return $this->belongsTo(User::class);
    }
}
