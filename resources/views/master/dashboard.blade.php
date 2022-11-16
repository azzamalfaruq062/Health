@extends('master.admin')
@section('title', 'Dashboard')

@section('content')

    <div class="card">
        <div class="card-body ">
            <h4 class="card-title">Profile Peserta UJK</h4>
            <form action="" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" name="name" id="name" oninput="masuk()">
                </div>
                <div class="row form-group">
                    <div class="col">
                        <label for="exampleInputName1">Tinggi Badan<small style="color: darkgray">*Meter</small></label>
                        <input type="text" class="form-control" name="tb" id="tb" oninput="masuk()">
                    </div>
                    <div class="col">
                        <label for="exampleInputName1">Berat Badan<small style="color: darkgray">*Kg</small></label>
                        <input type="text" class="form-control" name="bb" id="bb" oninput="masuk()" onchange="BMI()">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Tgl Lahir</label>
                    <input type="date" class="form-control" name="tglLahir" id="tglLahir" oninput="umur()">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Hobi</label>
                    <select class="js-example-basic-multiple form-control" id="hobi" name="states[]" multiple="multiple" onchange="inherict()">
                        <option value="Menari">Menari</option>
                        <option value="Sepakbola">Sepakbola</option>
                        <option value="Basket">Basket</option>
                    </select>
                </div>
                <div class="row d-flex justify-content-end">
                    {{-- <button type="button" class="btn btn-primary mr-2" onclick="BMI()">Get BMI & Status</button>
                    <button type="button" class="btn btn-primary mr-2" onclick="umur()">Get Umur</button> --}}
                    {{-- <button type="button" class="btn btn-primary mr-2 " onclick="gratis()">Cek Konsoltasi</button> --}}
                    <button type="button" class="btn btn-primary mr-2 " onclick="inherict()">Cek Konsultasi</button>
                </div>
            </form>

            <table class="table mt-3">
                <tr>
                    <th>Name</th>
                    <th>TB</th>
                    <th>BB</th>
                    <th>BMI</th>
                    <th>Status</th>
                    <th>Umur</th>
                    <th>Konsultasi gratis</th>
                </tr>
                <tr>
                    <td id="pusNama"></td>
                    <td id="pusTB"></td>
                    <td id="pusBB"></td>
                    <td id="pusBMI"></td>
                    <td id="pusStatus"></td>
                    <td id="pusUmur"></td>
                    <td id="pusKon"></td>
                </tr>
            </table>
        </div>
    </div>



@endsection