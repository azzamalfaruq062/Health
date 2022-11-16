@extends('master.admin')
@section('title', 'add User')

@section('content')

    <div class="card">
        <div class="card-body ">
            <h4 class="card-title">Add User</h4>
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="input category's name...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="input category's email...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="input category's pasword...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Role</label>
                    <select class="form-control" name="role">
                        <option selected disabled>Pilih role anda. . .</option>
                        <option value="admin">Admin</option>
                        <option value="editor">Editor</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
        </div>
    </div>



@endsection
