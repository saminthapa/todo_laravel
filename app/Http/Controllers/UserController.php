<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class UserController extends Controller
{
    function index(Request $request)
    {
        $data = User::all();
        return view('welcome', compact('data'));
    }

    function add(Request $request)
    {
        return view('add');
    }

    function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();


            // session()->flash('success','User added successfully');

        return redirect()->route('index')->with('success','User added successfully!');
    }

    function edit($id)
    {
        $Data = User::find($id);
        return view('edit', compact('Data'));
    }

    function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email',
        ]);

        $Data = User::find($id);
        $Data->name = $request->name;
        $Data->email = $request->email;
        $Data->save();

         return redirect()->route('index')->with('success','User updated successfully!');

    }

    function delete($id){
        User::find($id)->delete($id);


         return redirect()->route('index')->with('success','User deleted successfully!');

    }

    function view($id)
    {
        $Data = User::find($id);
        return view('view', compact('Data'));
    }
}
