<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        // $tags = Tag::all(); // gets all tags
        $tags = Tag::paginate(8); // 8 tags per page

        // Return a view with tags data
        return view('tags.index', ['tags' => $tags]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the create form view
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'course' => 'required|string|max:255',
            'learning_path' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'from' => 'required|date',
            'spaces_left' => 'required|nullable|integer',
            'compensation' => 'nullable|decimal:8,2',
        ]);

        // Create a new tag
        Tag::create($request->all());

        // Redirect to the tags list with success message
        return redirect()->route('tags.create')->with('success', 'Tag created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the tag by ID
        $tag = Tag::findOrFail($id);

        // Return the tag details view
        return view('tags.show', ['tag' => $tag]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the tag by ID
        $tag = Tag::findOrFail($id);

        // Return the edit form view
        return view('tags.edit', ['tag' => $tag]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $request->validate([
            'course' => 'required|string|max:255',
            'learning_path' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'from' => 'required|date',
            'spaces_left' => 'required|nullable|integer',
            'compensation' => 'nullable|decimal:8,2',
        ]);

        // Find the tag by ID and update its details
        $tag = Tag::findOrFail($id);
        $tag->update($request->all());

        // Redirect to the tags list with success message
        return redirect()->route('tags.index')->with('success', 'Tag updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the tag by ID and delete it
        $tag = Tag::findOrFail($id);
        $tag->delete();

        // Redirect to the tags list with success message
        return redirect()->route('tags.index')->with('success', 'Tag deleted successfully.');
    }
}
