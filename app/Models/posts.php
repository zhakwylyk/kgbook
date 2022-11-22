<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    public function category(){
        return $this->belongsToMany(category::class, 'post_categories', 'post_id', 'category_id');
    }

    use HasFactory;
}
