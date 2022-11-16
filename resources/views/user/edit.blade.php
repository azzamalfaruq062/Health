@extends('master.admin')
@section('title', 'Edit User')

@section('content')

    <div class="card">
        <div class="card-body ">
            <h4 class="card-title">Add User</h4>
            {{-- @foreach ( as )                 --}}
            <form action="{{ route('users.update', $data->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $data->name }}" placeholder="input category's name...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $data->email }}" placeholder="input category's email...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Password</label>
                    <input type="password" class="form-control" name="password" value="{{ $data->password }}" placeholder="input category's pasword...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Role</label>
                    <select class="form-control" name="roles">
                        <option value="{{ $data->role }}" selected disabled>{{ $data->role }}</option>
                        <option value="admin">Admin</option>
                        <option value="editor">Editor</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
            {{-- @endforeach --}}
        </div>
    </div>



@endsection
