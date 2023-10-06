<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\info;
class FormController extends Controller
{
      function index(Request $req){
        $product=new info;
        $product->name=$req->name;
        $product->city=$req->city;
        if($req->hasfile('file')){
            $file=$req->file('file');
            $ext=$file->getClientOriginalExtension();
            $filename=time().".".$ext;
            $file->move('image',$filename);
            $product->image=$filename;
        }
        $product->save();
      }
}
