@extends('layouts/dashboard')
@section('url','Sparepart')
@section('title','Manajemen sparepart')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Edit data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Nama</label>
                    <input type="text" value="{{$sparepart->nama}}" required class="form-control" name="nama">
                    <label for="">Kategori sparepart</label>
                    <select required name="kategori_id" class="form-select">
                        <option disabled>Pilih kategori</option>
                        <option value="Engine" {{ $sparepart->kategori_id == 'Engine' ? 'selected' : '' }}>Engine</option>
                        <option value="Fuel" {{ $sparepart->kategori_id == 'Fuel' ? 'selected' : '' }}>Fuel</option>
                        <option value="Cooling" {{ $sparepart->kategori_id == 'Cooling' ? 'selected' : '' }}>Cooling</option>
                        <option value="Clutch" {{ $sparepart->kategori_id == 'Clutch' ? 'selected' : '' }}>Clutch</option>
                        <option value="Intake & Exhaust" {{ $sparepart->kategori_id == 'Intake & Exhaust' ? 'selected' : '' }}>Intake & Exhaust</option>
                        <option value="Front Axle" {{ $sparepart->kategori_id == 'Front Axle' ? 'selected' : '' }}>Front Axle</option>
                        <option value="Front Suspension" {{ $sparepart->kategori_id == 'Front Suspension' ? 'selected' : '' }}>Front Suspension</option>
                        <option value="Rear Axle" {{ $sparepart->kategori_id == 'Rear Axle' ? 'selected' : '' }}>Rear Axle</option>
                        <option value="Oil & Fluid & Chemical" {{ $sparepart->kategori_id == 'Oil & Fluid & Chemical' ? 'selected' : '' }}>Oil & Fluid & Chemical</option>
                        <option value="Steering" {{ $sparepart->kategori_id == 'Steering' ? 'selected' : '' }}>Steering</option>
                        <option value="Brake" {{ $sparepart->kategori_id == 'Brake' ? 'selected' : '' }}>Brake</option>
                        <option value="Wheel & Tire" {{ $sparepart->kategori_id == 'Wheel & Tire' ? 'selected' : '' }}>Wheel & Tire</option>
                        <option value="Propeller Shaft" {{ $sparepart->kategori_id == 'Propeller Shaft' ? 'selected' : '' }}>Propeller Shaft</option>
                        <option value="Rear Suspension" {{ $sparepart->kategori_id == 'Rear Suspension' ? 'selected' : '' }}>Rear Suspension</option>
                        <option value="Interior" {{ $sparepart->kategori_id == 'Interior' ? 'selected' : '' }}>Interior</option>
                    </select>
                    <label for="">Kode material</label>
                    <input type="text" value="{{$sparepart->material}}" required class="form-control" name="material">
                    <label for="">Material grup</label>
                    <input type="text" required value="{{$sparepart->material_grup}}" class="form-control" name="material_grup">
                    <label for="">Deskripsi</label>
                    <input type="text" value="{{$sparepart->deskripsi}}" required class="form-control" name="deskripsi">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="gambar">

                    <button class="btn btn-primary mt-4">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        let i = {{count($link) == 0 ? (count($link) + 1) : count($link)}}
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