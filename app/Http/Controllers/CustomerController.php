<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function CustomerPage():View{
        return view('pages.dashboard.customer-page');
    }
    public function customercreate(Request $request){
            $user_id = $request->header('id');
         return  Customer::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'user_id'=>$user_id,
        ]);
    }
    public function customerlist(){
        $user_id = request()->header('id');
        return Customer::where('user_id',$user_id)->get();
    }
    public function customerdelete(Request $request){
        $user_id=$request->header('id');
        $customer_id=$request->input('id');
        return Customer::where('id',$customer_id)->where('user_id','=',$user_id)->delete();
    }
    public function customerbyid(Request $request){
        $user_id=$request->header('id');
        $customer_id=$request->input('id');
        return Customer::where('id',$customer_id)->where('user_id','=',$user_id)->first();
    }

    public function updatecustomer(Request $request){
        $user_id=$request->header('id');
        $customer_id=$request->input('id');
        return Customer::where('id',$customer_id)->where('user_id','=',$user_id)->update([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone')
        ]);
    }


}
