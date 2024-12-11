<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function index(){
        $plans = Plan::paginate(10);

        return view('plans.index',compact('plans'));
    }

    public function create(){
        return view('plans.create');
    }
    
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric'
        ]); 

        Plan::create($request->all());
        return redirect()->route('plan.index');
    }

    public function edit($id){
        $plan = Plan::findOrFail($id);
        return view('plans.edit',compact('plan'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric'
        ]); 
        $plan = Plan::findOrFail($id);
        $plan->update($request->all());
        return redirect()->route('plan.index');
    }

    public function destroy($id){
        $plan = Plan::findOrFail($id);
        $plan->delete();
        return redirect()->route('plan.index');
    }


}
