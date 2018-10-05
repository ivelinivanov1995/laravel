<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserProfileController extends Controller
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
     * Edit user profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        $user = Auth::user();

        return view('user-profile.edit')->with('userData', $user);
    }

    /**
     * Save user profile
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(Request $request)
    {
        $user = Auth::user();

        $inputs = $request->all();

        $user->fill($inputs);
        $user->save();

        return redirect('user-profile/edit');
    }
}
