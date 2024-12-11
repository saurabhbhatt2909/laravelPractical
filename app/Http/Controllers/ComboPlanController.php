<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ComboPlan;
use App\Models\Plan;


class ComboPlanController extends Controller
{
    public function index()
    {
        $comboplans = ComboPlan::with('plans')->paginate(10);
        return view('comboplans.index', compact('comboplans'));
    }

    public function create()
    {
        $plans = Plan::all();
        return view('comboplans.create', compact('plans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'plans_ids' => 'required|array',
            'plans_ids.*' => 'exists:plans,id',
        ]);

        ComboPlan::create([
            'name' => $request->name,
            'price' => $request->price,
            'related_plans' => json_encode($request->plans_ids),
        ]);

        return redirect()->route('comboplan.index')->with('success', 'Combo Plan created successfully.');
    }

    public function edit(Comboplan $comboplan)
    {
        $plans = Plan::all();
        $selectedPlans = json_decode($comboplan->related_plans, true);
        return view('comboplans.edit', compact('comboplan', 'plans', 'selectedPlans'));
    }

    public function update(Request $request, Comboplan $comboplan)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'plans_ids' => 'required|array',
            'plans_ids.*' => 'exists:plans,id',
        ]);

        $comboplan->update([
            'name' => $request->name,
            'price' => $request->price,
            'related_plans' => json_encode($request->plans_ids),
        ]);

        return redirect()->route('comboplan.index')->with('success', 'Combo Plan updated successfully.');
    }

    public function destroy(Comboplan $comboplan)
    {
        $comboplan->delete();
        return redirect()->route('comboplan.index')->with('success', 'Combo Plan deleted successfully.');
    }
}
