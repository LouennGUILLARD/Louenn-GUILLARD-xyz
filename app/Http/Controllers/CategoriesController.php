<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Track;

class CategoriesController
{

    public function index()
    {
        return view('app.categories.index', [
            'categories' => Categories::all(),
        ]);
    }

    public function show(Categories $category)
    {
        $tracks = Track::where('categorie', $category->id)->paginate(10);

        return view('app.categories.show', [
            'category' => $category,
            'tracks' => $tracks,
        ]);
    }
}
