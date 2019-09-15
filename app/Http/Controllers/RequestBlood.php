<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestBlood extends Controller
{
    public function index() {
      return view('request');
    }

    public function create()
    {
      return view('blood_req/create');
    }


}
