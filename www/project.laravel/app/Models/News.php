<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    //Прописываем, чтобы определить, что каждая новость принадлежит какой-то категории
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
