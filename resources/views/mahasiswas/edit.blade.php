@extends('mahasiswas.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-item-center">
            <div class="card">
                <div class="card-header">
                    Edit Mahasiswa
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('mahasiswas.update', $mahasiswas->nim) }}" id="myForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="Nim">Nim</label>
                            <input type="text" name="nim" class="form-control" id="Nim"
                                value="{{ $mahasiswas->nim }}" aria-describedby="Nim">
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="Nama" name="nama" class="form-control" id="Nama"
                                value="{{ $mahasiswas->nama }}" aria-describedby="Nama">
                        </div>
                        <div class="form-group">
                            <label for="Kelas">Kelas</label>
                            <input type="Kelas" name="kelas" class="form-control" id="Kelas"
                                value="{{ $mahasiswas->kelas }}" aria-describedby="Kelas">
                        </div>
                        <div class="form-group">
                            <label for="Jurusan">Jurusan</label>
                            <input type="Jurusan" name="jurusan" class="form-control" id="Jurusan"
                                value="{{ $mahasiswas->jurusan }}" aria-describedby="Jurusan">
                        </div>
                        <div class="form-group">
                            <label for="No_Handphone">No Handphone</label>
                            <input type="No_Handphone" name="no_handphone" class="form-control" id="No_Handphone"
                                value="{{ $mahasiswas->no_handphone }}" aria-describedby="No_Handphone">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="Email" name="email" class="form-control" id="Email"
                                value="{{ $mahasiswas->email }}" aria-describedby="Email">
                        </div>
                        <div class="form-group">
                            <label for="Tanggal_Lahir">Tanggal Lahir</label>
                            {{-- date input --}}
                            <input type="date" name="tanggal_lahir" class="form-control" id="Tanggal_Lahir"
                                value="{{ $mahasiswas->tanggal_lahir }}" aria-describedby="Tanggal_Lahir">

                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
