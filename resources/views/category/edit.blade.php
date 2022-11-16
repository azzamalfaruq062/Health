@extends('master.admin')
@section('title', 'Update Category')

@section('content')

    <div class="card">
        <div class="card-body ">
            <h4 class="card-title">Add Categories</h4>
            {{-- @foreach ($category as $c)                 --}}
            <form action="{{ route('category.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleInputName1">Category</label>
                    <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
            {{-- @endforeach --}}
        </div>
    </div>



@endsection
