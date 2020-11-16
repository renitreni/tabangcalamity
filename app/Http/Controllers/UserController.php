<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserProvince;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserUpdateRequest;
use Alert;
use App\Http\Requests\UserRegistrationRequest;

class UserController extends Controller
{
    public function index()
    {
        return view('users');
    }

    public function table()
    {
        $user = DB::table('users')
                  ->select([
                      'users.name',
                      'users.email',
                      'users.id',
                      'user_provinces.province',
                      'user_provinces.position',
                  ])
                  ->join('user_provinces', 'user_provinces.user_id', '=', 'users.id');

        return DataTables::of($user)->make(true);
    }

    public function create()
    {
        return view('users_add');
    }

    public function show($id)
    {
        $user = DB::table('users')
                  ->select([
                      'users.name',
                      'users.email',
                      'users.id',
                      'user_provinces.id as up_id',
                      'user_provinces.province',
                      'user_provinces.position',
                  ])
                  ->join('user_provinces', 'user_provinces.user_id', '=', 'users.id')
                  ->where('users.id', $id)
                  ->get()[0];

        return view('users_edit', compact('user'));
    }

    public function register(UserRegistrationRequest $request)
    {
        $data           = $request->input();
        $user           = new User();
        $user->name     = $data['name'];
        $user->email    = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->save();

        $user_province           = new UserProvince();
        $user_province->user_id  = $user->id;
        $user_province->province = $data['province'];
        $user_province->position = $data['position'];
        $user_province->save();

        Alert::success('Success!', 'Account Registered!');

        return redirect()->route('users');
    }

    public function update(UserUpdateRequest $request)
    {
        $data        = $request->input();
        $user        = User::find($data['id']);
        $user->name  = $data['name'];
        $user->email = $data['email'];

        if ($data['password'] != 'fakepassword') {
            $user->password = Hash::make($data['password']);
        }

        $user->save();

        $user_province           = UserProvince::find($data['up_id']);
        $user_province->user_id  = $user->id;
        $user_province->province = $data['province'];
        $user_province->position = $data['position'];
        $user_province->save();

        Alert::success('Success!', 'Account Updated!');

        return redirect()->route('users');
    }

    public function destroy($id)
    {
        User::destroy($id);
        UserProvince::query()->where('user_id', $id)->delete();

        Alert::success('Success!', 'Account Deleted!');

        return redirect()->route('users');
    }
}
