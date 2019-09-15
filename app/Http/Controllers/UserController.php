<?php

namespace App\Http\Controllers;

use App\User;
use App\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function show($id)
  {
    if (Auth::check() && Auth::user()->id)
    {
        $user_id = auth()->user()->id;
    }
    else {
      abort(404);
    }
    $user    = User::find($user_id);
    $divisions = Division::all();
    return view('user_info_edit')
           ->with('user', $user)
           ->with('divisions', $divisions);
  }

  public function edit($id)
  {
      $users    = User::find($id);
      return view('dashboard')->with('users', $user);
  }

  public function update(Request $request, $id)
  {

      $this->validate($request, [
          'name'             => 'required',
          'email'            => 'email',
          'blood_group'      => 'required',
          'division'         => 'nullable',
          'district'         => 'nullable',
          'upazila'          => 'required',
          'mobile'           => 'required',
          'last_donate_date' => 'required',
      ]);

      $user = User::find($id);
      $user->name              = $request->input('name');
      $user->email             = $request->input('email');
      $user->blood_group       = $request->input('blood_group');
      $user->division          = $request->input('division');
      $user->district          = $request->input('district');
      $user->upazila           = $request->input('upazila');
      $user->mobile            = $request->input('mobile');
      $user->last_donate_date  = $request->input('last_donate_date');

      $user->save();

      return redirect('/user/edit')->with('status', 'Info update success');
  }
}
