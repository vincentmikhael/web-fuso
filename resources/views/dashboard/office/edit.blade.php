@extends('layouts/dashboard')
@section('url','Cabang Dealer')
@section('title','Manajemen cabang dealer')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Tambah data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="">Nama kantor</label>
                    <input type="text" value="{{$office->nama}}" required class="form-control" name="nama">
                    <label for="">Alamat</label>
                    <textarea name="alamat" required class="form-control" id="">{{$office->alamat}}</textarea>
                    <label for="">gmaps</label>
                    <input type="text" value="{{$office->gmaps}}" required class="form-control" name="gmaps">
                    <button class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection