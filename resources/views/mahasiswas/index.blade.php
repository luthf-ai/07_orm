@extends('mahasiswas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>JURUSAN TEKNOLOGI INFORMASI POLINEMA</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('mahasiswas.create') }}"> Create New Mahasiswa</a>
            </div>
            {{-- add search bar --}}
            <div class="pull-right mt-2">
                <form action="{{ route('mahasiswas.index') }}" method="GET" role="search">
                    <div class="input-group">
                        <span class="input-group-btn mr-2">
                            <button class="btn btn-info" type="submit" title="Search Mahasiswa">
                                <span class="fas fa-search">Search</span>
                            </button>
                        </span>
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search Mahasiswa"
                            id="term">
                        <a href="{{ route('mahasiswas.index') }}" class=" mt-1">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt">Refresh</span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div>
            {{-- to run the search function add this code in the controller --}}
            {{-- public function index(Request $request) --}}
            {{-- { --}}
            {{-- $posts = Mahasiswa::orderBy('nim', 'DESC')->paginate(5); --}}
            {{-- if ($request->has('term')) { --}}
            {{-- $posts = Mahasiswa::where('nama', 'LIKE', '%' . $request->term . '%')->paginate(5); --}}
            {{-- } --}}
            {{-- return view('mahasiswas.index', compact('posts')); --}}
            {{-- } --}}


        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered mt-5 text-center table-hover table-striped">
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>No Handphone</th>
                <th>Email</th>
                <th>Tanggal Lahir</th>
                <th width="300px">Action</th>
            </tr>
            @foreach ($posts as $Mahasiswa)
                <tr>
                    <td>{{ $Mahasiswa->nim }}</td>
                    <td>{{ $Mahasiswa->nama }}</td>
                    <td>{{ $Mahasiswa->kelas }}</td>
                    <td>{{ $Mahasiswa->jurusan }}</td>
                    <td>{{ $Mahasiswa->no_handphone }}</td>
                    <td>{{ $Mahasiswa->email }}</td>
                    <td>{{ $Mahasiswa->tanggal_lahir }}</td>
                    <td>
                        <form action="{{ route('mahasiswas.destroy', $Mahasiswa->nim) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('mahasiswas.show', $Mahasiswa->nim) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('mahasiswas.edit', $Mahasiswa->nim) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {!! $posts->links() !!}
    </div>


    @endsection
