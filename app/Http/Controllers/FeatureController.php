<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Phone;
use Illuminate\Http\Request;


class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::with('phones')->get();
        return view('features.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('phones.index')->with('error', 'access denied');
        };

        $phone = Phone::all();
        return view('features.create', compact('phone')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('features.index')->with('error', 'access denied');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        $feature =Feature::create($validated);

        if ($request->has('phones')) {
            $feature->phones()->attach($request->phones);
        }

        return redirect()->route('features.index')->with('success', 'feature successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(feature $feature)
    {
        $feature->load('phones');
        return(view('features.show', compact('feature')));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(feature $feature)
    {
        $phone = Phone::all();
        $featurePhones = $feature->phones->pluck('id')->toArray();
        return view('features.edit', compact('feature', 'phone', 'featurePhones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feature $feature)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        $feature->update($validated);

        return redirect()->route('features.index')->with('success', 'feature successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(feature $feature)
    {
        $feature->phones()->detach();
        $feature->delete();

        return redirect()->route('features.index')->with('success', 'feature deleted successfully');
    }
}
