<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn ($query, $search) => $query
                ->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
        );
    }

    /**
     * @return object
     */
    public function category(): object
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return object
     */
    public function author(): object
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
