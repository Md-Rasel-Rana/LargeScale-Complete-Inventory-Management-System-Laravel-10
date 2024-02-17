<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function CategoryPage(){
        return view('pages.dashboard.category-page');
    }

    public function createcategory(Request $request){
        $user_id = $request->header('id');
        return Category::create([
            'name'=>$request->input('name'),
            'user_id'=>$user_id,
        ]);
    }

    public function listcategory(Request $request){
        $user_id = $request->header('id');
        return Category::where('user_id',$user_id)->get();
    }

    public function categorydelete(Request $request){
        $user_id = $request->header('id');
        $category_id = $request->input('id');
        return Category::where('user_id',$user_id)->where('id',$category_id)->delete();
    }
    public function categorybyid(Request $request){
        $user_id = $request->header('id');
        $category_id = $request->input('id');
        return Category::where('user_id',$user_id)->where('id',$category_id)->first();
    }
    public function updatecategory(Request $request){
        $user_id = $request->header('id');
        $category_id = $request->input('id');
        return Category::where('user_id',$user_id)->where('id',$category_id)->update([
            'name'=>$request->input('name'),
        ]);
    }
}
