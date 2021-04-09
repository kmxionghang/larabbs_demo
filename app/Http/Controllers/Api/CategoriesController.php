<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        // 让无分页的集合资源放在 data 下面。
        CategoryResource::wrap('data');
        return CategoryResource::collection(Category::paginate());
    }
}
