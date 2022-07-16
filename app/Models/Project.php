<?php

namespace App\Models;

use PDO;
use App\Models\Category;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    protected $guarded = [];


    public function getRouteKeyName()
    {
        return 'url';
    }
    public function category($value = '')
    {
        return $this->belongsTo(Category::class);
    }
    use HasFactory;
}
