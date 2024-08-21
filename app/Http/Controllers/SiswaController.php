<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiswaReq;
use App\Models\Siswa;
// use App\Models\SiswaReq;
use App\Models\Kelas;
use App\Models\SPP;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {  
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
       
        $kelas = Kelas::all(); //untuk mengambil semua catatan,
        $spp = SPP::all();
        return view('siswa.create', compact('kelas', 'spp'));
    }

    public function show($id_siswa)
    {
        $siswa = Siswa::find($id_siswa);
        if (!$siswa) {
        return redirect()->route('siswa.index')->with('error', 'Data Siswa tidak ditemukan.');
        }
        return view('siswa.show', compact('siswa'));
    }

    public function edit($id_siswa)
    {
        $siswa = siswa::findOrFail($id_siswa);
        $kelas = Kelas::all(); //untuk mengambil semua catatan,
        $spp = SPP::all();
        return view('siswa.edit', compact('siswa', 'kelas','spp'));
    }

        // Memperbarui entri SPP yang ada di database
        public function update(SiswaReq $request, $id_siswa)
        {
        $siswa = siswa::findOrFail($id_siswa);
        $siswa->update($request->validated());
        return redirect()->route('siswa.index')->with('success', 'Siswa updated successfully');
    }


    //menghapus
    public function destroy($id_siswa)
    {
        $siswa = siswa::withTrashed()->findOrFail($id_siswa);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Siswa deleted successfully');
    }
    


    public function store(Request $request)
    {
    //    dd($request->all());
        $input=[
      'nisn'=>$request->nisn,
      'nis'=>$request->nis,
      'nama'=>$request->nama,
      'kelas_id'=>$request->id_kelas,
      'no_telepon'=>$request->no_telepon,
      'id_spp'=>$request->id_spp,
      'alamat'=>$request->alamat,
        ];
        

        // dd($input,$request->input());
        Siswa::create($input);
        return redirect()->route('siswa.index')->with('success', 'Data Siswa berhasil ditambahkan');
    }

}