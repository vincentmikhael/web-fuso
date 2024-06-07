@extends('layouts/dashboard')
@section('url','Cabang Dealer')
@section('title','Manajemen cabang dealer')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Edit data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Nama cabang</label>
                    <input type="text" value="{{$cabang->nama}}" required class="form-control" name="nama">
                    <label for="">No Telepon</label>
                    <input type="number" value="{{$cabang->telepon}}" required class="form-control" name="telepon">
                    <label for="">Whatsapp</label>
                    <input type="number" value="{{$cabang->whatsapp}}" required class="form-control" name="whatsapp">
                    <label for="">Alamat</label>
                    <input type="text" value="{{$cabang->alamat}}" required class="form-control" name="alamat">
                    <label for="">Lat</label>
                    <input type="text" required value="{{$cabang->lat}}" class="form-control" name="lat">
                    <label for="">Lon</label>
                    <input type="text" required value="{{$cabang->lon}}" class="form-control" name="lon">
                    <label for="">Website</label>
                    <input type="text" required value="{{$cabang->website}}" class="form-control" name="website">
                    <br>
                    <button class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection