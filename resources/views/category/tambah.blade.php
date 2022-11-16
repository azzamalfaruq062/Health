@extends('master.admin')
@section('title', 'add category')

@section('content')

    <div class="card">
        <div class="card-body ">
            <h4 class="card-title">Add Categories</h4>
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Category</label>
                    <input type="text" class="form-control" name="name" placeholder="input category's name...">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
        </div>
    </div>



@endsection
