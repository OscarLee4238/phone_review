<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phones = Phone::all();
        return view('phones.index', compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
         'model' => 'required',
         'description' => 'required|max:500',
         'release_year' => 'required|integer',
         'brand' => 'required', 
         'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('/image'), $imageName);

        }

        Phone::create([
            'model' => $request->model,
            'description' => $request->description,
            'release_year' => $request->release_year,
            'image' => $imageName,
            'brand' => $request->brand,
            'created_at' => now(),
            'updates_at' => now()
        ]);

        return to_route('phones.index')->with('success', 'Phone created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Phone $phone)
    {
        return view('phones.show')->with('phone', $phone);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phone $phone)
    {
        return view('phones.edit')->with('phone', $phone);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Phone $phone)
    {
        $validatedData = $request->validate([
            'model' => 'required',
            'description' => 'required|max:500',
            'release_year' => 'required|integer',
            'brand' => 'required', 
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $phone->update($validatedData);
        return redirect()->route('phones.index')->with('success', 'phones updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phone $phone)
    {
        $phone->delete();
        return to_route('phones.index')->with('success', 'Phone deleted successfully!');
    }
}
