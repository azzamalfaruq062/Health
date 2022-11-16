@extends('master.admin')
@section('title', 'Add Artikel')

@section('content')

    <div class="card">
        <div class="card-body ">
            <h4 class="card-title">Add Artikel</h4>
            <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Category</label>
                    <select class="form-control" name="categories_id">
                        @foreach ($category as $c)
                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="input isbn judul...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Tanggal Artikel</label>
                    <input type="date" class="form-control" name="tgl_artikel" placeholder="input tgl artikel name...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Isi Artikel</label>
                    <textarea class="form-control" name="isi" rows="10" placeholder="input isi artikel name..."></textarea>
                </div>
                <div class="form-group">
                    {{-- <label for="exampleInputName1">Penulis</label> --}}
                    <input type="hidden" class="form-control" name="penulis_artikel" placeholder="input penulis artikel name..." value="{{Auth::user()->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Foto</label>
                    <input type="file" class="form-control" name="foto" placeholder="input foto...">
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
        </div>
    </div>



@endsection
