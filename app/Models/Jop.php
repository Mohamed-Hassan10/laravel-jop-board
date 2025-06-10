<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

class Jop
{
  public static function all() {
    return [
      ['title' => 'Software Engineer', 'Salary' => '$1000'],
      ['title'=> 'Graphic Designer','Salary'=> '$2000']
    ];
  }
}
