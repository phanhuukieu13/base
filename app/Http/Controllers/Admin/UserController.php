<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        
        return view('admin.modules.users.index');

    }

    public function create() {
        
        return view('admin.modules.users.create');

    }

    public function store(Request $request) {



    }
    
    public function edit($id) {
        
        return view('admin.modules.users.create');

    }

    public function update(Request $request) {



    }

    public function destroy() {



    }
}
