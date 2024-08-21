<?php

namespace App\Http\Controllers;

use App\Http\Requests\sppreq;
use App\Models\spp;
use Illuminate\Http\Request;

class SPPController extends Controller
{
    // Menampilkan daftar semua entri SPP
    public function index()
    {
        //dd('jkjkj');
        $spp = spp::all();
        return view('spp.index', compact('spp'));
    }

    // Menampilkan form untuk membuat entri SPP baru
    public function create()
    {
        return view('spp.create');
    }

    // Menyimpan entri SPP baru ke database
    public function store(sppreq $request)
    {
        spp::create($request->validated());
        return redirect()->route('spp.index')->with('success', 'SPP created successfully');
    }

    // Menampilkan detail entri SPP berdasarkan ID
    public function show($id_spp)
    {
        $spp = spp::findOrFail($id_spp);
        return view('spp.show', compact('spp'));
    }

    // Menampilkan form untuk mengedit entri SPP
    public function edit($id_spp)
    {
        $spp = spp::findOrFail($id_spp);
        return view('spp.edit', compact('spp'));
    }

    // Memperbarui entri SPP yang ada di database
    public function update(spp $request, $id_spp)
    {
        $spp = spp::findOrFail($id_spp);
        $spp->update($request->validated());
        return redirect()->route('spp.index')->with('success', 'SPP updated successfully');
    }

    // Menghapus entri SPP dari database
    public function delete($id_spp)
    {
        $spp = spp::findOrFail($id_spp);
        $spp->delete();
        return redirect()->route('spp.index')->with('success', 'SPP deleted successfully');
    }
}
