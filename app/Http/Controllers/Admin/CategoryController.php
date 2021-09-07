<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Spatie\Tags\Tag;

class CategoryController extends Controller
{
    public function index(){
        $categories = Tag::getWithType('category');
        return view('dashboard.category.index' , compact('categories'));
    }

    public function create(){
        return view('dashboard.category.create');
    }

    public function store(Request $request){
        $category = new Tag();
        $category['image'] = $request['image'];
        $category['type'] = 'category';
        $category->setTranslation('name', 'en', $request['name']);
        $category->setTranslation('name', 'ar', $request['name_ar']);
        $category->save();
        return redirect()->route('admin.category.index')->with('success' , 'category created successfully!!');
    }

    public function edit($id){
        $category = Tag::find($id);
        return view('dashboard.category.edit' , compact('category'));
    }

    public function update(Request $request){
        $category = Tag::find($request['id']);
        if($request['image']) {
            File::delete($category->image);
            $category['image'] = $request['image'];
        }
        $category->setTranslation('name', 'en', $request['name']);
        $category->setTranslation('name', 'ar', $request['name_ar']);
        $category->save();
        return redirect()->route('admin.category.index')->with('success' , 'category updated successfully!!');
    }

    public function destroy($id){
        $category = Tag::find($id);
        File::delete($category->image);
        $category->delete();
    }
}
