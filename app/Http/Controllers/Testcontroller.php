<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class Testcontroller extends Controller
{
    //

     public function view($id){
    	$article = article::find($id);    	
    	$article->category;
    	$article->user;            	
    	return view('test.index',['articulo'=>$article]);
    }
}
