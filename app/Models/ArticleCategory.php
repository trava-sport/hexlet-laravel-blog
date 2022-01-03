<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;

    public function articles()
    {
        return $this->hasMany(__NAMESPACE__ . '\Article', 'category_id');
    }

    public function __toString()
    {
        return $this->name;
    }
}
