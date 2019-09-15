<?php

namespace App\Http\Controllers;

use App\User;
use App\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\Paginator;

class SearchController extends Controller
{
    public function searchDonor(Request $request)
    {
    	if ($request->b_group == "" && $request->division == "") {
            $donors = User::orderBy('id', 'desc')->paginate(50);
            $divisions = Division::all();
            //dd($divisions);
            //exit();
    		    return view('welcome', compact(['donors', 'divisions']));
    	}
    	else if ($request->b_group && $request->division) {

    		$donors = User::where('division', $request->division)
                        ->where(function ($query) use ($request)
                        {
                          $query->Where('blood_group', $request->b_group);
                        })
                        ->paginate(50);

    		$donors->appends($request->only('welcome'));
        $divisions = Division::all();
    		return view('welcome', compact(['donors', 'divisions']));
    	}

      /*have a search problem*/
      else if ($request->district && $request->b_group && $request->division) {
        $donors = User::where('district', $request->district)
                        ->where(function ($query) use ($request)
                        {
                          $query->Where('blood_group', $request->b_group)
                          ->orWhere('division', $request->division);
                        })
                        ->paginate(50);

        $donors->appends($request->only('welcome'));
        $divisions = Division::all();
        return view('welcome', compact(['donors', 'divisions']));
      }

      else if ($request->district && $request->upazila && $request->division) {
        $donors = User::where('district', $request->district)
                        ->where(function ($query) use ($request)
                        {
                          $query->Where('blood_group', $request->b_group)
                          ->orWhere('upazila', $request->upazila);
                        })
                        ->paginate(50);

        $donors->appends($request->only('welcome'));
        $divisions = Division::all();
        return view('welcome', compact(['donors', 'divisions']));
      }

      else if ($request->upazila && $request->b_group) {
        $donors = User::where('upazila', $request->upazila)
                        ->where(function ($query) use ($request)
                        {
                          $query->Where('blood_group', $request->b_group);
                        })
                        ->paginate(50);

        $donors->appends($request->only('welcome'));
        $divisions = Division::all();
        return view('welcome', compact(['donors', 'divisions']));
      }

      else if ($request->district && $request->division) {
        $donors = User::where('division', $request->division)
                        ->where(function ($query) use ($request)
                        {
                          $query->Where('district', $request->district);
                        })
                        ->paginate(50);

        $donors->appends($request->only('welcome'));
        $divisions = Division::all();
        return view('welcome', compact(['donors', 'divisions']));
      }

      else if ($request->b_group) {
        $donors = User::where('blood_group', 'LIKE', '%' . $request->b_group . '%')->paginate(50);

        $donors->appends($request->only('welcome'));
        $divisions = Division::all();
        return view('welcome', compact(['donors', 'divisions']));
      }

      else if ($request->division) {
        $donors = User::where('division', 'LIKE', '%' . $request->division . '%')->paginate(50);

        $donors->appends($request->only('welcome'));
        $divisions = Division::all();
        return view('welcome', compact(['donors', 'divisions']));
      }

      else {
            $donors = User::orderBy('id', 'desc')->paginate(50);
            $divisions = Division::all();
            //dd($divisions);
            //exit();
            return view('welcome', compact(['donors', 'divisions']));
      }
    }
}
