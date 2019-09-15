<?php

namespace App\Http\Controllers;

use App\Division;
use App\RequestBlood;
use Illuminate\Http\Request;

class BloodRequest extends Controller
{
    public function index() {
      $requested = RequestBlood::all();
      return view('request', compact('requested'));
    }

    public function create()
    {
      $divisions = Division::all();
      return view('blood_req/create', compact('divisions'));
    }

    public function store(Request $request)
    {
      $this->validate($request, [
         'name'             => 'required',
         'blood_group'      => 'required',
         'division'         => 'nullable',
         'district'         => 'nullable',
         'when_need'        => 'nullable',
         'upazila'          => 'required',
         'mobile'           => 'required',
      ]);

      $requestblood = new RequestBlood;
      $requestblood->name = $request->input('name');
      $requestblood->blood_group = $request->input('blood_group');
      $requestblood->division    = $request->input('division');
      $requestblood->district    = $request->input('district');
      $requestblood->when_need   = $request->input('when_need');
      $requestblood->upazila     = $request->input('upazila');
      $requestblood->mobile      = $request->input('mobile');

      $requestblood->save();

      // redirect

      return redirect('request_blood')->with('status', 'Request added to list.');
    }
}
