<?php

namespace App\Http\Controllers;

use App\Models\Categories;

class CategoriesController
{

    public function index()
    {
        return view('app.categories.index', [
            'categories' => Categories::all(),
        ]);
    }
}
