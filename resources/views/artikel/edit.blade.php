@extends('master.admin')
@section('title', 'Edit Artikel')

@section('content')

    <div class="card">
        <div class="card-body ">
            <h4 class="card-title">Add Artikel</h4>
            <form action="{{ route('artikel.update', $artikel['id']) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleInputName1">Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{ $artikel['judul'] }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Category</label>
                    <select class="form-control" name="categories_id">
                        @foreach ($category_select as $cs)
                            <option value="{{ $cs->id }}" selected>{{ $cs->name }}</option>
                        @endforeach
                        @foreach ($category as $c)
                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Tanggal Artikel</label>
                    <input type="date" class="form-control" name="tgl_artikel" value="{{ $artikel['tgl_artikel'] }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Foto</label>
                    <input type="file" class="form-control" name="foto" placeholder="input foto...">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Isi Artikel</label>
                    <textarea class="form-control" name="isi" rows="10">{{ $artikel['isi'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Penulis</label>
                    <input type="hidden" class="form-control" name="penulis_artikel" value="{{$artikel['penulis_artikel']}}">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
            </form>
        </div>
    </div>



@endsection
