<?php

namespace App\Http\Controllers;

use App\Division;
use Illuminate\Http\Request;

class RequestBlood extends Controller
{
    public function index() {
      return view('request');
    }

    public function create()
    {
      $divisions = Division::all();
      return view('blood_req/create', compact('divisions'));
    }


}
