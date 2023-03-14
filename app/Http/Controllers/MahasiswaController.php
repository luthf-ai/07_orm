<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    //crud
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        // if has term
        if (request()->term) {
            $posts = Mahasiswa::where('nim', 'LIKE', '%' . request()->term . '%')
                ->orWhere('nama', 'LIKE', '%' . request()->term . '%')
                ->orWhere('kelas', 'LIKE', '%' . request()->term . '%')
                ->orWhere('jurusan', 'LIKE', '%' . request()->term . '%')
                ->orWhere('no_handphone', 'LIKE', '%' . request()->term . '%')
                ->orWhere('email', 'LIKE', '%' . request()->term . '%')
                ->orWhere('tanggal_lahir', 'LIKE', '%' . request()->term . '%')
                ->orderBy('nim', 'desc')
                ->paginate(5);

        }else{
            $posts = Mahasiswa::orderBy('nim', 'desc')->paginate(5);
        }
        return view('mahasiswas.index', compact('mahasiswas', 'posts'));

    }

    public function create()
    {
        return view('mahasiswas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'no_handphone' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa created successfully.');
    }

    public function show($nim)
    {
        $mahasiswas = Mahasiswa::find($nim);
        return view('mahasiswas.detail', compact('mahasiswas'));
    }

    public function edit($nim)
    {
        $mahasiswas = Mahasiswa::find($nim);
        return view('mahasiswas.edit', compact('mahasiswas'));
    }

    public function update(Request $request, $nim)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'no_handphone' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        Mahasiswa::find($nim)->update($request->all());

        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa updated successfully');
    }

    public function destroy($nim)
    {
        Mahasiswa::find($nim)->delete();

        return redirect()->route('mahasiswas.index')
            ->with('success', 'Mahasiswa deleted successfully');
    }

}
