<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        $users = User::all();
        return view('users.create', compact('users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'email' => 'required|email',
        ]);

        $validatedData['created_at'] = Carbon::parse($request->created_at)->setTimezone(config('app.timezone'));
        $validatedData['updated_at'] = Carbon::parse($request->updated_at)->setTimezone(config('app.timezone'));

        User::create($validatedData);

        return redirect('/users')->with('success', 'User added successfully!');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'email' => 'required|email',
        ]);

        if ($request->has('created_at')) {
            $user->created_at = Carbon::parse($request->created_at)->setTimezone(config('app.timezone'));
        }
    
        if ($request->has('updated_at')) {
            $user->updated_at = Carbon::parse($request->updated_at)->setTimezone(config('app.timezone'));
        }

        $user->update($validatedData);

        return redirect('/users')->with('success', 'User updated successfully!');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users')->with('success', 'User deleted successfully!');
    }

}