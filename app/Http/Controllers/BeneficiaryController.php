<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    public function index()
    {
    $beneficiaries = Beneficiary::latest()->get();

    return view('beneficiaries.index', compact('beneficiaries'));
    }

    public function create()
    {
        return view('beneficiaries.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        // Personal Information
        'first_name' => 'required|string|max:255',
        'middle_name' => 'nullable|string|max:255',
        'last_name' => 'required|string|max:255',
        'suffix' => 'nullable|string|max:50',
        'birth_date' => 'required|date',
        'gender' => 'required|in:Male,Female',
        'civil_status' => 'required|string|max:50',

        // Contact Information
        'contact_number' => 'nullable|string|max:20',
        'email' => 'nullable|email|max:255',

        // Address Information
        'house_number' => 'nullable|string|max:100',
        'street' => 'nullable|string|max:255',
        'purok' => 'required|string|max:255',
        'barangay' => 'required|string|max:255',
        'municipality' => 'required|string|max:255',
        'province' => 'required|string|max:255',

        // 4Ps Information
        'household_id' => 'required|string|max:255|unique:beneficiaries,household_id',
        'household_head' => 'required|string|max:255',
        'relationship_to_household_head' => 'required|string|max:100',
        'date_registered' => 'nullable|date',
        'beneficiary_status' => 'required|in:Active,Inactive,Pending Verification',
    ]);

    Beneficiary::create($validated);

    return redirect()
        ->route('beneficiaries.index')
        ->with('success', 'Beneficiary registered successfully!');
}

    public function show(Beneficiary $beneficiary)
    {
        return view('beneficiaries.show', compact('beneficiary'));
    }

    public function edit(Beneficiary $beneficiary)
    {
        return view('beneficiaries.edit', compact('beneficiary'));
    }

    public function update(Request $request, Beneficiary $beneficiary)
{
    $validated = $request->validate([
        // Personal Information
        'first_name' => 'required|string|max:255',
        'middle_name' => 'nullable|string|max:255',
        'last_name' => 'required|string|max:255',
        'suffix' => 'nullable|string|max:50',
        'birth_date' => 'required|date',
        'gender' => 'required|in:Male,Female',
        'civil_status' => 'required|string|max:50',

        // Contact Information
        'contact_number' => 'nullable|string|max:20',
        'email' => 'nullable|email|max:255',

        // Address Information
        'house_number' => 'nullable|string|max:100',
        'street' => 'nullable|string|max:255',
        'purok' => 'required|string|max:255',
        'barangay' => 'required|string|max:255',
        'municipality' => 'required|string|max:255',
        'province' => 'required|string|max:255',

        // 4Ps Information
        'household_id' => 'required|string|max:255|unique:beneficiaries,household_id,' . $beneficiary->id,
        'household_head' => 'required|string|max:255',
        'relationship_to_household_head' => 'required|string|max:100',
        'date_registered' => 'nullable|date',
        'beneficiary_status' => 'required|in:Active,Inactive,Pending Verification',
    ]);

    $beneficiary->update($validated);

    return redirect()
        ->route('beneficiaries.index')
        ->with('success', 'Beneficiary updated successfully!');
}

    public function destroy(Beneficiary $beneficiary)
{
    $beneficiary->delete();

    return redirect()
        ->route('beneficiaries.index')
        ->with('success', 'Beneficiary deleted successfully!');
}
}
