<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function posts(){
        return $this->belongsToMany(posts::class, 'post_categories', 'category_id', 'post_id');
    }

    use HasFactory;
}
