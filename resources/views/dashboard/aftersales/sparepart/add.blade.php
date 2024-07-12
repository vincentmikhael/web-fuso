@extends('layouts/dashboard')
@section('url','Sparepart')
@section('title','Manajemen sparepart')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Tambah data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Nama</label>
                    <input type="text" required class="form-control" name="nama">
                    <label for="">Kategori sparepart</label>
                    <select required name="kategori_id" class="form-select">
                        <option selected disabled>Pilih kategori</option>
                        <option value="Engine">Engine</option>
                        <option value="Fuel">Fuel</option>
                        <option value="Cooling">Cooling</option>
                        <option value="Clutch">Clutch</option>
                        <option value="Intake & Exhaust">Intake & Exhaust</option>
                        <option value="Front Axle">Front Axle</option>
                        <option value="Front Suspension">Front Suspension</option>
                        <option value="Rear Axle">Rear Axle</option>
                        <option value="Oil & Fluid & Chemical">Oil & Fluid & Chemical</option>
                        <option value="Steering">Steering</option>
                        <option value="Brake">Brake</option>
                        <option value="Wheel & Tire">Wheel & Tire</option>
                        <option value="Propeller Shaft">Propeller Shaft</option>
                        <option value="Rear Suspension">Rear Suspension</option>
                        <option value="Interior">Interior</option>
                    </select>
                    <label for="">Kode material</label>
                    <input type="text" required class="form-control" name="material">
                    <label for="">Material grup</label>
                    <input type="text" required class="form-control" name="material_grup">
                    <label for="">Deskripsi</label>
                    <input type="text" required class="form-control" name="deskripsi">
                    <label for="">Gambar</label>
                    <input type="file" required class="form-control" name="gambar">

                    <button class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        let i = 1
    function addRow(){
      document.querySelector('#row_link').insertAdjacentHTML('beforeend',
                  `
                  <div class="row">
                            <div class="col-3">
                                <label for="">Online shop</label>
                                <select required type="number" name="item[${i}][nama]" class="form-select">
                                    <option value="Shopee" selected>Shopee</option>
                                    <option value="Tokopedia">Tokopedia</option>
                                    <option value="Lazada">Lazada</option>
                                    <option value="Blibli">Blibli</option>
                                    <option value="Bukalapak">Bukalapak</option>
                                </select>
                            </div>
                            <div class="col-9">
                                <label for="">Link</label>

                                <div class="d-flex gap-2 align-items-center justify-content-center">
                                <input required type="text" name="item[${i}][link]" class="form-control">
                                <button type="button" onclick="deleteRow(this)" class="btn btn-danger my-0">X</button>
                                </div>
                            </div>
                        </div>
                  `)
                  i++
    }
    function deleteRow(e){
      e.parentElement.parentElement.parentElement.remove()
    }
    </script>
@endsection