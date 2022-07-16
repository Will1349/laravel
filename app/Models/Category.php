<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function projects($value = '')
    {
        return $this->hasMany(Project::class);
    }
    use HasFactory;
}
