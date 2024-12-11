<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EligibilityCriteria;

class EligibilityCriteriaController extends Controller
{
    public function index()
    {
        $criteria = EligibilityCriteria::paginate(10);
        return view('eligibilitycriterias.index', compact('criteria'));
    }

    public function create()
    {
        return view('eligibilitycriterias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age_less_than' => 'nullable|integer|min:0',
            'age_greater_than' => 'nullable|integer|min:0',
            'last_login_days_ago' => 'nullable|integer|min:0',
            'income_less_than' => 'nullable|numeric|min:0',
            'income_greater_than' => 'nullable|numeric|min:0',
        ]);

        EligibilityCriteria::create($request->all());

        return redirect()->route('eligibilitycriteria.index')->with('success', 'Eligibility criteria created successfully.');
    }

    public function edit(EligibilityCriteria $eligibilitycriterion)
    {
        
        return view('eligibilitycriterias.edit', compact('eligibilitycriterion'));
    }

    public function update(Request $request, EligibilityCriteria $eligibilitycriterion)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age_less_than' => 'nullable|integer|min:0',
            'age_greater_than' => 'nullable|integer|min:0',
            'last_login_days_ago' => 'nullable|integer|min:0',
            'income_less_than' => 'nullable|numeric|min:0',
            'income_greater_than' => 'nullable|numeric|min:0',
        ]);

        $eligibilitycriterion->update($request->all());

        return redirect()->route('eligibilitycriteria.index')->with('success', 'Eligibility criteria updated successfully.');
    }

    public function destroy(EligibilityCriteria $eligibilitycriterion)
    {
        $eligibilitycriterion->delete();

        return redirect()->route('eligibilitycriteria.index')->with('success', 'Eligibility criteria deleted successfully.');
    }
}
