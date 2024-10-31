<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        // $companies = Company::all(); // gets all companies
        $companies = Company::paginate(8); // 8 companies per page

        // Return a view with companies data
        return view('companies.index', ['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the create form view
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'adress' => 'required|string|max:255', // Correct spelling to 'address'
            'phonenumber' => 'required|string|max:15', // Adjust max length as necessary
        ]);

        // Create a new company
        Company::create($request->all());

        // Redirect to the companies list with success message
        return redirect()->route('companies.index')->with('success', 'Company created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the company by ID
        $company = Company::findOrFail($id);

        // Return the company details view
        return view('companies.show', ['company' => $company]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the company by ID
        $company = Company::findOrFail($id);

        // Return the edit form view
        return view('companies.edit', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
            'phonenumber' => 'required|string|max:255',
        ]);

        // Find the company by ID and update its details
        $company = Company::findOrFail($id);
        $company->update($request->all());

        // Redirect to the companies list with success message
        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the company by ID and delete it
        $company = Company::findOrFail($id);
        $company->delete();

        // Redirect to the companies list with success message
        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }
}
