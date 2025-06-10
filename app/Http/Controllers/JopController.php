<?php

namespace App\Http\Controllers;

use App\Models\Jop;
use Illuminate\Http\Request;

class JopController extends Controller
{
  function index() {
    $jops = Jop::all();
    return view("jop.index", ['jops' => $jops, 'name' => 'Lilwah']);
  }
}
