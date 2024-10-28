<?php

namespace App\Http\Controllers;

use App\Models\Internship;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $internships = Internship::orderBy('created_at', 'desc')->take(4)->get();
        // $internships = Internship::paginate(3); // 10 internships per page

        // Return a view with internships data
        return view('index', ['internships' => $internships]);
    }

    public function index()
    {
        // $internships = Internship::all(); // gets all internships
        $internships = Internship::paginate(8); // 8 internships per page

        // Return a view with internships data
        return view('internships.index', ['internships' => $internships]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the create form view
        return view('internships.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'course' => 'required|string|max:255',
            'image_url' => 'required|string|max:255',
            'learning_path' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'from' => 'required|date',
            'spaces_left' => 'required|nullable|integer',
            'compensation' => 'nullable|decimal:8,2',
        ]);


        // Create a new internship
        Internship::create($request->all());

        // Redirect to the internships list with success message
        return redirect()->route('internships.create')->with('success', 'Internship created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the internship by ID
        $internship = Internship::findOrFail($id);

        // Return the internship details view
        return view('internships.show', ['internship' => $internship]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the internship by ID
        $internship = Internship::findOrFail($id);

        // Return the edit form view
        return view('internships.edit', ['internship' => $internship]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $request->validate([
            'course' => 'required|string|max:255',
            'image_url' => 'required|string|max:255',
            'learning_path' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'from' => 'required|date',
            'spaces_left' => 'required|nullable|integer',
            'compensation' => 'nullable',
        ]);

        // Find the internship by ID and update its details
        $internship = Internship::findOrFail($id);
        $internship->update($request->all());

        // Redirect to the internships list with success message
        return redirect()->route('internships.index')->with('success', 'Internship updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the internship by ID and delete it
        $internship = Internship::findOrFail($id);
        $internship->delete();

        // Redirect to the internships list with success message
        return redirect()->route('internships.index')->with('success', 'Internship deleted successfully.');
    }
}
