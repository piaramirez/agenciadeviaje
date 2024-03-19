<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Democontroller extends Controller
{
 public function Index(){
   return view('index'); 
 }
 public function servicioMetodo(){
    return view('servicios');
 }
 public function contactosMetodo(){
    return view('contactanos');
 }
 public function ejemploMetodo(){
    return view('ejemplo');
 }
}
