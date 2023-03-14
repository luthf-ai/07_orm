@extends('mahasiswas.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="card">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
                <div class="card-body">
                    <ul>
                        {{-- $mahasiswas --}}
                        <li>Nim: {{ $mahasiswas->nim }}</li>
                        <li>Nama: {{ $mahasiswas->nama }}</li>
                        <li>Kelas: {{ $mahasiswas->kelas }}</li>
                        <li>Jurusan: {{ $mahasiswas->jurusan }}</li>
                        <li>No Handphone: {{ $mahasiswas->no_handphone }}</li>
                        <li>Email: {{ $mahasiswas->email }}</li>
                        <li>Tanggal Lahir: {{ $mahasiswas->tanggal_lahir }}</li>
                    </ul>
                </div>
                <a class="btn btn-success" href="{{ route('mahasiswas.index') }}">Back</a>
            </div>
        </div>
    </div>
@endsection
