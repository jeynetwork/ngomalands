<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\product;

class navigationController extends Controller
{
    public function admin(){
      if(Auth::check()){

      $prods=DB::table('products')->get();
      return view('admin',compact('prods'));
      }
    }

    public function products(){
      $prods=DB::table('products')->get();
      return view ('welcome',compact('prods'));
    }

    public function lands(){
      $lands=DB::table('products')->get();
      return view('land',compact('lands'));
    }
    public function owners(){
      $owners=DB::table('users')->where('department','landOwner')->get();
      return view('owner',compact('owners'));
    }
    public function navigate($id){
      $prod=DB::table('products')->where('id',$id)->get();
      $prods=DB::table('products')->get();
      return view('navigate',compact('prod','prods'));
    }
}
