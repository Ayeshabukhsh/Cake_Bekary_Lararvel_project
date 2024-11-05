<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Product; // Import Product model
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all(); // Change to $agents = Agent::all();
        return view('index', compact('products')); // Change to compact('agents')
    } // Add a closing brace here

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createagent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'category' => 'required',
        ]);

        $agent = Agent::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'category_id' => $request->category,
        ]);

        return redirect()->route('agents.create')->with('success', 'Agent inserted successfully.');
    }

    // Other methods remain unchanged...

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        $agent->delete(); // Change to $agent->delete();
       
        return redirect()->route('agents.index')->with('success', 'Agent deleted successfully.'); // Change to 'agents.index'
    }
}

