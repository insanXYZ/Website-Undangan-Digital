<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function comment()
    {
        $this->hasMany(Comment::class);
    }

    public function scopeFilter($query)
    {
        if (request('search')) {
            $query->where('slug', 'LIKE', '%'.request('search').'%');
        }
    }
}
