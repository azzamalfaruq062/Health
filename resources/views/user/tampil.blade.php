@extends('master.admin')
@section('title', 'User')

@section('content')

    {{-- <h1>Halaman Categori</h1> --}}

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">User</h4>

            <a href="{{ url('users/create') }}" class="btn btn-primary mb-3" data-bs-toggle="modal"
                data-bs-target="#exampleModal">Add User</a>


            <div class="table-responsive">

                <table id="dataTable" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $u)
                            <tr>
                                <td scope="row">
                                    {{ $loop->iteration }}
                                </td>
                                <td>{{ $u->name }}</td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->role }}</td>
                                <td class="">
                                    <div class="d-flex align-items-center list-user-action">
                                        <a class="btn btn-sm btn-warning text-light" href="{{ url('users/'.$u->id.'/edit') }}">
                                            Edit
                                        </a>
                                        &nbsp;|&nbsp; 
                                        <a>
                                            <form action="{{ route('users.destroy', $u->id) }}" method="POST">
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
