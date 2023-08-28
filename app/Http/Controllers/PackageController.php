<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function show($id)
    {
        return view ('packages.show', [
            'packages' => Package::find($id)
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'destination_id' => 'required',
            'name' => 'required|string|max:255',
            'start_date' => 'date',
            'end_date' => 'date',
            'price' => 'required|integer',
            'description' => 'required|string'
        ]);

        Package::create($data);

        return redirect(route('dashboard'));
    }

    public function create()
    {
        return view ('packages.create', [
            'books' => Package::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $package = Package::find($id);

        $package->update([
            'destination_id' => $request->destination_id,
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect(route('dashboard'));
    }

    public function edit($id)
    {
        return view ('packages.update', [
            'packages' => Package::find($id)
        ]);
    }

    public function destroy($id)
    {
        $package = Package::find($id);
        $package->delete();

        return redirect()->route('dashboard');
    }
}
