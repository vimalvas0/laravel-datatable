<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
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

        $users = User::all();
        return view('home', ['users'=>$users]);
    }


    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('edit', ['user' => $user]);
    }

    public function editUser(Request $req)
    {
        $user = User::where('id', $req->id)->first();
        $user->update($req->all());

        return redirect('home');
    }


    public function remove($id)
    {
       return view('remove', ['id' => $id]);
    }


    public function removeUser(Request $req)
    {
        $user = User::where('id', $req->id)->first();
        $user->delete();

        return redirect('home');
    }
}
