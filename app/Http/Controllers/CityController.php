<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\County;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(County $county)
    {
        $cities = City::where('county_id', $county->id)->get();

    return view('cities.index', [
        'cities' => $cities,
        'county' => $county,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(County $county)
    {
    return view('cities.create', [
        'county' => $county,
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, County $county)
    {
         $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'zip_code' => ['required', 'string', 'max:255'],
        ]);
        $validated['county_id'] = $county->id; 
        City::create($validated);
        return redirect()->route('cities.index', ['county' => $county->id])->with('status','Város létrehozva!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(County $county, City $city)
{
    $counties = County::all();

    return view('cities.edit', compact('city', 'counties', 'county'));
}

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, County $county, City $city)
{
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'zip_code' => ['required', 'string', 'max:255'],
        'county_id' => ['required', 'exists:counties,id'],
    ]);

    $city->update($validated);

    return redirect()->route('cities.index', [
        'county' => $city->county_id
    ])->with('status', 'Város módosítva!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(County $county, City $city)
{
    $city->delete();

    return redirect()->route('cities.index', [
        'county' => $county->id
    ]);
}
}
