<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function index() {
    return view("index");
  }

    public function about() {
    return view("about" , ["PageTitle" => "About Page"]);
  }

    public function contact() {
    return view("contact", ["PageTitle" => "Contact Page"]);
  }
}
