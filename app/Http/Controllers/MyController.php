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
        if (Auth::attempt($arr)) {
            if (Auth::user()->role_id == 1) {
                return redirect()->route('home');
            }
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
        return redirect()->route('dashboard');
    }
    public function postLogout()
    {
        Auth::logout();
        return redirect()->route('home');
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
        $user->fullname = $request->fullname;
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
        // $user = DB::table('users')
        //     ->join('roles', 'users.role_id', '=', 'roles.role_id')
        //     ->select('*')
        //     ->where('user_id', '= ', $user_id)
        //     ->get();
        return view('admin.edit', $data);
    }
    public function postEditUser(Request $request, $user_id)
    {
        if ($request->hasFile('userimage')) {
            $file = $request->file('userimage');
            $path = public_path('/images/users');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $filename);
        }
        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->userimage = $filename;
        $user->fullname = $request->fullname;
        $user->rolename = $request->rolename;
        $user->save();
        return redirect()->route('manage');
    }
    public function getUser($user_id)
    {
        $data['user'] = User::find($user_id);
        return view('user.edit', $data);
    }
    public function postUser(Request $request, $user_id)
    {
        if ($request->hasFile('userimage')) {
            $file = $request->file('userimage');
            $path = public_path('/images/users');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move($path, $filename);
        }
        $user = User::find($user_id);
        $user->username = $request->username;
        $user->email = $request->email;
        $user->fullname = $request->fullname;
        $user->userimage = $filename;
        $user->save();
        return redirect()->route('manage');
    }
}
