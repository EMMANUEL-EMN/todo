<?php

namespace App\Http\Controllers;

use App\Models\todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class main extends Controller
{
    public function dashboard()
    {
        $task = todo::all();
        return view('dashboard.index', compact('task'));
    }
    public function login(Request $request)
    {
        $credetials = $request->only('email', 'password');
        if (Auth::attempt($credetials)) {
            return redirect('/dashboard');
        }
        return redirect('/')->with('status', 'Invalid login credentials');
    }

    public function store(Request $request)
    {
        $task = new todo();
        $task->title = $request->title;
        $task->task = $request->task;
        $task->save();
        return redirect('/dashboard')->with('status', 'successful added');
    }
    public function edit($id)
    {
        $task = todo::findOrFail($id);
        return view('dashboard.edit', compact('task'));
    }
    public function update(Request $request)
    {
        $task = todo::findOrFail($request->id);
        $task->title = $request->title;
        $task->task = $request->task;
        $task->save();
        return redirect('/dashboard')->with('status', 'successful edited');
    }

    public function delete($id)
    {
        $task = todo::findOrFail($id);
        $task->delete();
        return redirect('/dashboard')->with('status', 'successful deleted');
    }
    public function signup(Request $req)
    {
        $credetials = $req->only('email', 'password');
        if (!Auth::attempt($credetials)) {

            $user = new User();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = Hash::make($req->password);
            $user->save();
            return redirect('/register')->with('status', 'Successful registered');
        } else {
            return redirect('/register')->with('info', 'User already Exists');
        }
    }

    public function register()
    {
        return view('register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
