<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use COM;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function category(){
        
        $categorys = Category::latest()->paginate(1);
        // dd($category);
        return view('backend.product.index',compact('categorys'));
    }



    public function categoryInsert(Request $request){
        $categoryModel = new category();
        $categoryModel->category = $request->category;
        $categoryModel->category_slug = Str::slug($request->category);
        $categoryModel->save();
        return back();
        Alert::toast('Category Added Successfully');

    }


    public function categoryEdit($id){
        $categorys = Category::latest()->get();
        $editCategoryData = Category::find($id);
        // dd($editCategoryData);
        return view('backend.product.index', compact('categorys', 'editCategoryData'));
    }


    public function updateCategory(Request $request, $id){
       $updateCategory = Category::find($id);
       $updateCategory->category = $request->category;
       $updateCategory->category_slug = str::slug($request->category);
       $updateCategory->save();
       Alert::success('Update Success', 'somthing....');
       return back();
    }


    public function categoryDelete(Request $request, $id){
       Category::find($id)->delete();
       return back();
    }










    // SUB-CATEGORY
    public function subCategory(){
        return view('backend.product.subcategory');
    }
}
