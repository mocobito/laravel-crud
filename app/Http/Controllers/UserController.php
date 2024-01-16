<?php

namespace App\Http\Controllers;


use App\Models\User;
use http\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return $this->index();
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        User::where("id", $id)->update(['name' => $request['name'], 'email' => $request['email'], 'password' => Hash::make($request['password'])]);
        return $this->index();
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return $this->index();
    }
}
