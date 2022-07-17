<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Prophecy\Call\Call;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        return view('projects.index', [
            'category' => $category,
            'projects' => $category->projects()->with('category')->latest()->simplePaginate(6)
        ]);
    }
}
