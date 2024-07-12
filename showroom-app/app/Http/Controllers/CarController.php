<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        $types = Type::all();
        return view('cars.create', compact('types'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'photo' => 'required|image',
            'type_id' => 'required|exists:types,id',
            'cost_per_day' => 'required|numeric',
            'year' => 'required|numeric',
            'license_plate' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $imgName = time() . '.' . $extension;
            $request->file('photo')->storeAs('src/images/car', $imgName, 'public');
            $validatedData['photo'] = $imgName;
        }

        Car::create($validatedData);

        return redirect('/cars')->with('success', 'Car added successfully!');
    }

    public function edit(Car $car)
    {
        $types = Type::all();
        return view('cars.edit', compact('car', 'types'));
    }

    public function update(Request $request, Car $car)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'photo' => 'nullable|image',
            'type_id' => 'required|exists:types,id',
            'cost_per_day' => 'required|numeric',
            'year' => 'required|numeric',
            'license_plate' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            // Delete old image if exists
            if ($car->photo) {
                Storage::disk('public')->delete('src/images/car/' . $car->photo);
            }

            $extension = $request->file('photo')->getClientOriginalExtension();
            $imgName = time() . '.' . $extension;
            $request->file('photo')->storeAs('src/images/car', $imgName, 'public');
            $validatedData['photo'] = $imgName;
        }

        $car->update($validatedData);

        return redirect('/cars')->with('success', 'Car updated successfully!');
    }

    public function destroy(Car $car)
    {
        // Delete old image if exists
        if ($car->photo) {
            Storage::disk('public')->delete('src/images/car/' . $car->photo);
        }
        
        $car->delete();
        return redirect('/cars')->with('success', 'Car deleted successfully!');
    }
}
