<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costumer;

class CostumerController extends Controller
{
    public function index()
    {
        $data_costumers = Costumer::all();
        return view('costumers.index', compact('data_costumers'));
    }

    public function create()
    {
        return view('costumers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_costumers' => 'required|unique:tbl_costumers,id_costumers',
            'nama'         => 'required',
            'no_hp'        => 'required',
            'email'        => 'required|email|unique:tbl_costumers,email',
        ]);

        Costumer::create([
            'id_costumers' => $request->id_costumers,
            'nama'         => $request->nama,
            'no_hp'        => $request->no_hp,
            'email'        => $request->email,
        ]);

        return redirect()->route('costumers.index')->with('success', 'Data costumer berhasil ditambahkan!');
    }

    public function show($id)
    {
        $costumer = Costumer::findOrFail($id);
        return view('costumers.show', compact('costumer'));
    }

    public function edit($id)
    {
        $costumer = Costumer::findOrFail($id);
        return view('costumers.edit', compact('costumer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'   => 'required',
            'no_hp'  => 'required',
            'email'  => 'required|email',
        ]);

        $costumer = Costumer::findOrFail($id);
        $costumer->update([
            'nama'  => $request->nama,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
        ]);

        return redirect()->route('costumers.index')->with('success', 'Data costumer berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $costumer = Costumer::findOrFail($id);
        $costumer->delete();

        return redirect()->route('costumers.index')->with('success', 'Data costumer berhasil dihapus!');
    }
}
