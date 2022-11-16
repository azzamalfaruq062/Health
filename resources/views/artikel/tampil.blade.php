@extends('master.admin')
@section('title', 'Artikel')

@section('content')

    {{-- <h1>Halaman Categori</h1> --}}

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Product Categories</h4>

            <a href="{{ url('artikel/create') }}" class="btn btn-primary mb-3" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Add Artikel</a>


            <div class="table-responsive">

                <table id="dataTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Foto</th>
                            <th>Isi</th>
                            <th>Category</th>
                            <th>Tgl Artikel</th>
                            <th>Penulis Artikel</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $a)
                            <tr>
                                <td scope="row">
                                    {{ $loop->iteration }}
                                </td>
                                <td>{{ $a->judul }}</td>
                                <td><img class="img-thumbnail" src="{{ asset('storage/'.$a->foto) }}" width="100%" height="100%" style="border-radius: 0%"/></td>
                                <td>{{ $a->isi }}</td>
                                <td>{{ $a->cname }}</td>
                                <td>{{ $a->tgl_artikel }}</td>
                                <td>{{ $a->penulis_artikel }}</td>
                                <td class="">
                                    <div class="d-flex align-items-center list-user-action">
                                        <a class="btn btn-sm btn-warning text-light" href="{{ url('artikel/'.$a->id.'/edit') }}">
                                            Edit
                                        </a>
                                        &nbsp;|&nbsp; 
                                        <a>
                                            <form action="{{ route('artikel.destroy', $a->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger text-light" onclick="return confirm('Are you sure you want to delete this item ?')">
                                                    Delet
                                                </button>
                                            </form>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
  
@endsection
