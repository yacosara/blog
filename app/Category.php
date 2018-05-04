<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table ="categories";
    protected $fillable =['name'];
 // relaciones con articulos
 public function articles(){
     return $this->hasMany('App\article');
 }  

}
