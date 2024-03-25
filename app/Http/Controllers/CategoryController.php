<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = Category::get();
        // return $categories;
        $categories = Category::get();
        return view('welcome', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|max:255|string',
            'type' => 'required|in:mouse,keyboard,monitor,printer',
            'serial_number' => 'required|integer',
            'status' => 'required|in:Working,For Repair,Dispose', // Ensure status matches the provided options
        ]);

        // Create a new category instance
        $category = new Category();
        $category->name = $request->name;
        $category->type = $request->type;
        $category->serial_number = $request->serial_number;
        $category->status = $request->status;
        $category->save();

        return redirect('categories/create')->with('status', 'Category Created');
    }

    public function edit(int $id)
    {
        $category = Category::findOrFail($id);
        // return $category;
        return view('category.edit', compact('category'));
    }



    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required|max:255|string',
            'type' => 'required|in:mouse,keyboard,monitor,printer',
            'serial_number' => 'required|integer',
            'status' => 'required|in:Working,For Repair,Dispose'
        ]);

        Category::create([
            'name' => 'required|max:255|string',
            'type' => 'required|in:mouse,keyboard,monitor,printer',
            'serial_number' => 'required|integer',
            'status' => 'required|in:Working,For Repair,Dispose'
        ]);

    }
}
