<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $categories;
    private $category;

    public function index()
    {
        return view('admin.category.add');
    }

    public function create(Request $request)
    {
        Category::newCategory($request);
        return redirect()->back()->with('message','Category Info created successfully');
    }

    public function manage()
    {
        $this->categories = Category::orderBy('id', 'desc')->get();
        return view('admin.category.manage', ['categories' => $this->categories]);
    }

    public function edit()
    {
        return view('admin.category.edit');
    }

    public function update(Request $request, $id)
    {
        return $request->all();
    }

    public function delete($id)
    {
        return $id;
    }
}
