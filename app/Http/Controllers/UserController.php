<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::all(); // gets all users
        $users = User::paginate(8); // 8 users per page

        // Return a view with users data
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the create form view
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        // Create a new user
        User::create($request->all());

        // Redirect to the users list with success message
        return redirect()->route('users.create')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Return the user details view
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Return the edit form view
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
         
        ]);

        // Find the user by ID and update its details
        $user = User::findOrFail($id);
        $user->update($request->all());

        // Redirect to the users list with success message
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the user by ID and delete it
        $user = User::findOrFail($id);
        $user->delete();

        // Redirect to the users list with success message
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
