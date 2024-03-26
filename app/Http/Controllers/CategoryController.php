<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('welcome', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|string',
            'type' => 'required|in:mouse,keyboard,monitor,printer',
            'serial_number' => 'required|max:255|string',
            'status' => 'required|in:Working,For Repair,Dispose',
        ]);

        try {
            Category::create($validatedData);
            return redirect('categories/create')->with('status', 'Category Created');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error creating category.'])->withInput();
        }
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        // return $category;
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, int $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|string',
            'type' => 'required|in:mouse,keyboard,monitor,printer',
            'serial_number' => 'required|max:255|string',
            'status' => 'required|in:Working,For Repair,Dispose',
        ]);

        $category = Category::findOrFail($id);
        $category->update($validatedData);

        return redirect()->route('dashboard')->with('status', 'Category Updated Successfully');
    }



    public function destroy (int $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('status','Category Deletes');
    }

    public function search(Request $request)
    {
        $search_text = $request->input('query');
        $products = Category::where('name', 'LIKE', '%'.$search_text.'%')
                            ->orWhere('type', 'LIKE', '%'.$search_text.'%')
                            ->orWhere('serial_number', 'LIKE', '%'.$search_text.'%')
                            ->orWhere('status', 'LIKE', '%'.$search_text.'%')
                            ->get();

        return view('category.search', compact('products'));
    }



}
