<?php
 namespace App\Http\Controllers;
 class PostController extends Controller 
 {
    public function returnindexview()
    {
        $titre='Le titre du livre est : Magnifico pabloscos';
        return view('articles',compact('titre'));        

    }
      public function indexview(){
        $titre='Jolie livre';
        return view('articles',compact('titre')); 
           
      }

 }

?>