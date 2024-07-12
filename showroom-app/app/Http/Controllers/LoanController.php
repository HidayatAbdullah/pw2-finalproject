<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\User;
use App\Models\Car;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::all();

        return view('loans.index', compact('loans'));
    }

    public function create()
    {
        $cars = Car::all();
        $users = User::all();
        return view('loans.create', compact('cars','users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'car_id' => 'required',
            'user_id' => 'required',
            'loan_date' => 'required',
            'return_date' => 'required',
            'total_cost' => 'required',
            'status' => 'required',

        ]);

        Loan::create($validatedData);

        return redirect('/loans')->with('success', 'Loan added successfully!');
    }

    public function destroy(Loan $loan)
    {
        $loan->delete();
        return redirect('/loans')->with('success', 'Loan deleted successfully!');
    }

    public function edit(Loan $loan)
    {
        $cars = Car::all();
        $users = User::all();
        $loans = Loan::all();
        return view('loans.edit', compact('loan', 'loans', 'cars', 'users'));
    }

    public function update(Request $request, Loan $loan)
    {
        $validatedData = $request->validate([
            'car_id' => 'required',
            'user_id' => 'required',
            'loan_date' => 'required',
            'return_date' => 'required',
            'total_cost' => 'required',
            'status' => 'required',
        ]);

        $loan->update($validatedData);

        return redirect('/loans')->with('success', 'Loan updated successfully!');
    }
}
