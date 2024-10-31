<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $contracts = Contract::all(); // gets all contracts
        $contracts = Contract::paginate(8); // 8 contracts per page

        // Return a view with contracts data
        return view('contracts.index', ['contracts' => $contracts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the create form view
        return view('contracts.create');
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
            'spaces_left' => 'nullable|integer',
            'compensation' => 'nullable|numeric',
        ]);

        // Create a new contract
        Contract::create($request->all());

        // Redirect to the contracts list with success message
        return redirect()->route('contracts.index')->with('success', 'Contract created successfully.');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contract = Contract::findOrFail($id);
        return view('contracts.show', compact('contract'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) 
    {
        $contract = Contract::findOrFail($id);
        return view('contracts.edit', compact('contract'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate incoming request
        $request->validate([
            'course' => 'required|string',
            'learning_path' => 'required|string',
            'location' => 'required|string',
            'from' => 'required|date',
            'spaces_left' => 'required|integer',
            'compensation' => 'nullable|numeric',
        ]);

        // Find the contract by ID
        $contract = Contract::findOrFail($id);

        // Update the contract with new data
        $contract->course = $request->course;
        $contract->learning_path = $request->learning_path;
        $contract->location = $request->location;
        $contract->from = $request->from;
        $contract->spaces_left = $request->spaces_left;
        $contract->compensation = $request->compensation;

        // Save the changes
        $contract->save();

        // Redirect to a relevant route with a success message
        return redirect()->route('contracts.index')->with('success', 'Contract updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the contract by ID and delete it
        $contract = Contract::findOrFail($id);
        $contract->delete();

        // Redirect to the contracts list with success message
        return redirect()->route('contracts.index')->with('success', 'Contract deleted successfully.');
    }
}
