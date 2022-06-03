<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view('cursos.index');
    }
    public function create(){
        return view('cursos.create');
    }
    public function show($curso){
        return view('cursos.show',compact("curso"));
    }
   /*  public function category($curso,$category){
        if($category){
            return "bienvenido al curso $curso, de la categoria $category";
    
        }else{
            return view('cursos.show',compact("curso"));
        } 
    } */
}
