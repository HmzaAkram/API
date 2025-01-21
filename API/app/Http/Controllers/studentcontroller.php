<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;
class studentcontroller extends Controller
{
    function list(){
      return students::All();
    }
}
