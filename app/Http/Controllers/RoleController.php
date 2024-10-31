<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        // $roles = Role::all(); // gets all roles
        $roles = Role::paginate(8); // 8 roles per page

        // Return a view with roles data
        return view('roles.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the create form view
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create a new role
        Role::create($request->all());

        // Redirect to the roles list with success role
        return redirect()->route('roles.create')->with('success', 'Role created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the role by ID
        $role = Role::findOrFail($id);

        // Return the role details view
        return view('roles.show', ['role' => $role]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the role by ID
        $role = Role::findOrFail($id);

        // Return the edit form view
        return view('roles.edit', ['role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            
        ]);

        // Find the role by ID and update its details
        $role = Role::findOrFail($id);
        $role->update($request->all());

        // Redirect to the roles list with success role
        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the role by ID and delete it
        $role = Role::findOrFail($id);
        $role->delete();

        // Redirect to the roles list with success role
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }
}
