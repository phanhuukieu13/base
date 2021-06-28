<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\Models\User;
class UserController extends Controller
{
    public function index() {
        
        $user = User::all();
        return view('admin.modules.users.index', compact('user'));


    }

    public function create() {
        
        return view('admin.modules.users.create');

    }

    public function store(Request $request) {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        echo('dit mej mafy them thanh cong roi day');


    }
    
    public function edit($id) {
        $user = User::find($id);
        return view('admin.modules.users.edit',compact('user'));

    }

    public function update(Request $request, $id) {
        $data = $request->all();
        unset($data['_token']);
        $user = User::where('id', $id)->update($data);
        echo('ok');


    }

    public function destroy(Request $request, $id) {
        $user = User::find($id);
        $user->delete();
        echo"ok";


    }
}
