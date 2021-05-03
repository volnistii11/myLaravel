<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * Прописывается, чтобы обозначить, что каждая категория имеет много новостей
     */
    public function news()
    {
        return $this->hasMany(News::class);
    }
}
