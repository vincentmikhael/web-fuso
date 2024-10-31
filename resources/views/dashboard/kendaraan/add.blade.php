@extends('layouts/dashboard')
@section('url','Kendaraan')
@section('title','Manajemen kendaraan')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Tambah data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        {{-- <div class="col-md-6">
                            <label for="">Kategori kendaraan</label>
                            <select name="kategori" id="kategori" required class="form-select">
                                <option value="" selected disabled>Pilih jenis kendaraan</option>
                                <option value="Light Duty">Light Duty</option>
                                <option value="Medium Duty">Medium Duty</option>
                                <option value="Tractor Head">Tractor Head</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="">Tipe</label>
                            <select name="tipe" id="tipe" required class="form-select">
                                <option value="" selected disabled>Pilih jenis kendaraan</option>
                            </select>
                        </div> --}}
                    
                    <div class="col-md-12">
                        <label for="">Nama</label>
                    <input type="text" required class="form-control" name="nama">
                    </div>
                    
                    <div class="col-md-6">
                        <label for="">Gambar thumbnail png</label>
                        <input type="file" required class="form-control" name="gambar">
                    </div>

                    <div class="col-md-6">
                        <label for="">Gambar untuk halaman utama (berbackground)</label>
                    <input type="file" required class="form-control" name="gambar2">
                    </div>
                    
                    <label for="">Beban muatan</label>
                    <input type="text" required class="form-control" name="muatan">
                    <div class="col-md-6">
                        <label for="">Deskripsi section fitur lengkap</label>
                        <input type="text" required class="form-control" name="fitur_lengkap">
                    </div>
                    <div class="col-md-6">
                    <label for="">Foto section fitur lengkap</label>
                    <input type="file" required class="form-control" name="foto_fitur_lengkap">
                    </div>
                    <div class="col-md-6">
                    <label for="">Deskripsi section euro 4</label>
                    <input type="text" required class="form-control" name="mesin_canggih">
                    </div>
                    <div class="col-md-6">
                    <label for="">Foto section euro 4</label>
                    <input type="file" required class="form-control" name="foto_mesin_canggih">
                     </div>
                    <div class="col-md-6">
                    <label for="">Deskripsi section chasis</label>
                    <input type="text" required class="form-control" name="chasis">
                    </div>
                    <div class="col-md-6">
                    <label for="">Foto section chasis</label>
                    <input type="file" required class="form-control" name="foto_chasis">
                </div>
                <div class="col-12">
                    <hr>
                    <h5 for="">Section slider</h5>
                    <div onclick="addRow()" class="badge bg-primary">+ Add row</div>
                    <div id="row_slider">
                        <div class="row">
                        <div class="col-md-4">
                            <label for="">Judul</label>
                            <input type="text" required class="form-control" name="item[0][judul]">
                        </div>
                        <div class="col-md-4">
                            <label for="">Deskripsi</label>
                            <input type="text" required class="form-control" name="item[0][deskripsi]">
                        </div>
                        <div class="col-md-4">
                            <label for="">Foto background</label>
                            <input type="file" required class="form-control" name="item[0][background]">
                        </div>
                    </div>
                    </div>
                </div>
                    


                </div>

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
        document.querySelector('#kategori').addEventListener('change',function(e){
            if(e.target.value == 'Light Duty'){
                document.querySelector('#tipe').innerHTML = `
                <option value="" selected disabled>Pilih jenis kendaraan</option>
                <option value="Super Economial">Super Economial</option>
                <option value="Super Power">Super Power</option>
                <option value="Super Speed">Super Speed</option>
                <option value="Super Capacity">Super Capacity</option>
                `
            }else if(e.target.value == 'Medium Duty'){
                document.querySelector('#tipe').innerHTML = `
                <option value="" selected disabled>Pilih jenis kendaraan</option>
                <option value="4x2">4x2</option>
                <option value="6x2">6x2</option>
                <option value="6x4">6x4</option>
                `
            }else if(e.target.value == 'Tractor Head'){
                document.querySelector('#tipe').innerHTML = `
                <option value="6x4" selected>6x4</option>
                `
            }
        })

        function addRow(){
        document.querySelector('#row_slider').insertAdjacentHTML('beforeend',
                  `
                  <div class="row">
                  <div class="col-md-4">
                            <label for="">Judul</label>
                            <input type="text" required class="form-control" name="item[${i}][judul]">
                        </div>
                        <div class="col-md-4">
                            <label for="">Deskripsi</label>
                            <input type="text" required class="form-control" name="item[${i}][deskripsi]">
                        </div>
                        <div class="col-md-4">
                            <label for="">Foto background</label>
                            <div class="d-flex gap-2 align-items-center justify-content-center">
                  
                                    
                                    <input type="file" required class="form-control" name="item[${i}][background]">
                         
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