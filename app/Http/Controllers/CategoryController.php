<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Category_id_by_food;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        $category = new Category();
            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->description = $request->description;
            $category->status= $request->status == true ? '1' : '0';
            $category->save();

         return redirect()->back();
    }
    public function viewCategory()
    {
        $category = Category::all();
        return view('category.category',compact('category'));
    }
    public function deletecat($category)
    {
        $category = Category::findOrFail($category);
        $category->delete();
        return redirect()->back();
    }
    public function editcat($category)
    {
        $category = Category::findOrFail($category);
        return view('category.edit',compact('category'));
    }
    public function updatecat(Request $request,$category)
    {
        $category = Category::find($category);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->description = $request->description;
        $category->status= $request->status == true ? 1 : 0;
       
        $category->update();

     return redirect('/category');

    }
    public function Category_id_by_food_id()
    {
        $categories = Category::all();
        $foods = Food::all();
        $categoryByFood= Category_id_by_food::get()->map->format();
        return view('category.category_id_by_food_id',compact('categories','foods','categoryByFood'));
    }

    public function create_Category_id_by_food_id(Request $request)
    {
        $food_id=$request->food_id;
        $category_id= $request->category_id;
        $category_food = Category_id_by_food::where('category_id',$category_id)->where('food_id',$food_id)->first();
        if($category_food)
        {
            // return redirect('message','category & food already selected');
            return Redirect::back()->withErrors(['msg' => 'category & food already selected']);

        }
        $category_id_food = new Category_id_by_food();
        $category_id_food->category_id = $category_id;
        $category_id_food->food_id = $food_id;
        $category_id_food->save();

     return redirect()->back();
    }

    public function deleteCategoryByFood($categoryByFood)
    {
        $categoryByFood = Category_id_by_food::findOrFail($categoryByFood);
        $categoryByFood->delete();
        return redirect()->back();
    }
    // public function foodinCategory($food_title)
    // {
        
    //     $foods=Food::where('title',$food_title)->first();
    //     return view('category.frontenedFoodinCategory',compact('foods'));
    // }
}
