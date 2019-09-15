<?php

namespace App\Http\Controllers;

use App\User;
use App\Division;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $users = User::orderBy('id', 'desc')->paginate(5);
      return view('dashboard', compact('users'));
    }

    public function edit($id)
    {
        $user    = User::find($id);
        $divisons = Division::all();
        return view('admin_user_edit')
               ->with('user', $user)
               ->with('divisions', $divisons);
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
           'name'             => 'required',
           'email'            => 'email',
           'blood_group'      => 'required',
           'division'         => 'nullable',
           'district'         => 'nullable',
           'division'         => 'nullable',
           'upazila'          => 'required',
           'mobile'           => 'required',
           'isAdmin'          => 'nullable',
        ]);

        $user = User::find($id);
        $user->name              = $request->input('name');
        $user->email             = $request->input('email');
        $user->blood_group       = $request->input('blood_group');
        $user->division          = $request->input('division');
        $user->district          = $request->input('district');
        $user->upazila           = $request->input('upazila');
        $user->mobile            = $request->input('mobile');
        $user->isAdmin           = $request->input('isAdmin');

        $user->save();

        return redirect('/dashboard')->with('status', 'Info update success');
    }

    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();
      return redirect('/dashboard')->with('status', 'Account delete success');
    }
}
