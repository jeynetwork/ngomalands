<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\product;

class postController extends Controller
{
    //
    public function addProd(Request $request){
      $myproduct=new product();
      $myproduct->userid= Auth::user()->id;
      $myproduct->location= $request->location;
      $myproduct->size= $request->size;
      $myproduct->crops= $request->crops;
      $myproduct->price= $request->price;
      $myproduct->photos= $request->photos;
      $myproduct->save();

      $prods=DB::table('products')->get();
      return redirect('/admin');
    }
}
