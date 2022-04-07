<?php

namespace App\Http\Controllers;

use App\Http\Controllers\EditUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MyController extends Controller
{
    public function getLogin()
    {
        return view('user.login');
    }
    public function postLogin(Request $request)
    {
        $arr = ['username' => $request->username, 'password' => $request->password];
        return redirect()->route('dashboard');
    }
    public function getlogout(Request $request)
    {
        Auth::logout();
        return redirect()->intended('user/login');
    }
    public function getRegister()
    {
        return view('user.register');
    }
    public function postRegister(Request $request)
    {
        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('manage');
    }
    public function getadminpage()
    {
        return view('dashboard');
    }
    public function getAllUser()
    {
        $user = User::paginate(10);
        return view('admin.listuser', compact("user"));
    }
    public function deleteUser($id)
    {
        $user = DB::table('users')->where('user_id', '=', $id);
        $user->delete();
        return back();
    }
    public function getEditUser($user_id)
    {
        $data['user'] = User::find($user_id);
        return view('admin.edit', $data);
    }
    public function postEditUser(Request $request, $user_id)
    {
        $user = User::find($user_id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();
        return redirect()->route('manage');
    }
}
