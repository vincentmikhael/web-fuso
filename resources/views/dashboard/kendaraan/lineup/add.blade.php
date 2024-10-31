@extends('layouts/dashboard')
@section('url','Lineup kendaraan')
@section('title','Manajemen lineup kendaraan')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Tambah data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                    <div class="col-md-6">
                        <input type="hidden" value="{{$id_kendaraan}}" name="kendaraan_id">
                        <label for="">Nama</label>
                        <input type="text" required class="form-control" name="nama">
                    </div>

                        <div class="col-md-6">
                            <label for="">Tipe</label>
                            <select name="tipe" id="tipe" required class="form-select">
                                @if ($id_kendaraan == 1)
                                <option value="Super Economial">Super Economial</option>
                                <option value="Super Power">Super Power</option>
                                <option value="Super Speed">Super Speed</option>
                                <option value="Super Capacity">Super Capacity</option>
                                <option value="Bus">Bus</option>
                                @elseif ($id_kendaraan == 2)
                                    <option value="4x2">4x2</option>
                                    <option value="6x2">6x2</option>
                                    <option value="6x4">6x4</option>
                                @elseif ($id_kendaraan == 3)
                                    <option value="6x4">6x4</option>
                                @endif
                            </select>
                        </div>

                        <div class="col-md-6">
                            <input type="hidden" name="kendaraan_id">
                            <label for="">Jumlah ban</label>
                            <input type="hidden" value="0"  class="form-control" name="ban">
                        </div>
                        <div class="col-md-6">
                            <input type="hidden" name="kendaraan_id">
                            <label for="">PS</label>
                            <input type="hidden" value="0" required class="form-control" name="ps">
                        </div>

                        <div class="col-md-4">
                            <input type="hidden" name="kendaraan_id">
                            <label for="">Gambar Thumbnail</label>
                            <input type="file" required class="form-control" name="thumbnail">
                        </div>
                        <div class="col-md-4">
                            <input type="hidden" name="kendaraan_id">
                            <label for="">Banner atas</label>
                            <input type="file" required class="form-control" name="banner">
                        </div>
                        <div class="col-md-4">
                            <input type="hidden" name="kendaraan_id">
                            <label for="">Brosur (PDF)</label>
                            <input type="file" class="form-control" name="brosur">
                        </div>
                        {{-- <div class="col-md-4">
                            <input type="hidden" name="kendaraan_id">
                            <label for="">Gambar dibawah banner</label>
                            <input type="file" required class="form-control" name="gambar">
                        </div> --}}

                    <button onclick="addRow()" class="btn btn-secondary mt-4">+Add row slider</button>
                    <div id="row_lineup" class="">
                    <div class="row">
                        <div class="col-4">
                            <label for="">Judul</label>
                            <div class="d-flex align-items-center">
                            <input type="text" required class="form-control my-0" name="item[0][judul]">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="">Foto</label>
                            <input type="file" required class="form-control" name="item[0][gambar]">
                        </div>
                        <div class="col-4">
                            <label for="">Text</label>
                            <input type="text" required class="form-control my-0" name="item[0][text]">
                        </div>
                    </div>
                </div>

                <button onclick="addRow3()" class="btn btn-secondary mt-4">+Add row slider</button>
                    <div id="row_lineup2" class="">
                    <div class="row">

                        <div class="col-6">
                            <label for="">Foto</label>
                            <input type="file" required class="form-control" name="item2[0][gambar]">
                        </div>
                        <div class="col-6">
                            <label for="">Text</label>
                            <input type="text" required class="form-control my-0" name="item2[0][text]">
                        </div>
                    </div>
                </div>


                <button onclick="addRow2()" class="btn btn-secondary mt-4">+Add row spesifikasi</button>
                <div id="row_spesifikasi" class="">
                    <div class="row">
                        <div class="col-3">
                            <label for="">Foto</label>
                            <select name="spesifikasi[0][jenis]" id="" class="form-control">
                                <option value="" selected disabled>-- Pilih spesifikasi</option>
                                <option value="DIMENSI">DIMENSI</option>
                                <option value="BERAT">BERAT</option>
                                <option value="KEMAMPUAN">KEMAMPUAN</option>
                                <option value="MESIN">MESIN</option>
                                <option value="TRANSMISI">TRANSMISI</option>
                                <option value="SETIR">SETIR</option>
                                <option value="SUSPENSI">SUSPENSI</option>
                                <option value="REM">REM</option>
                                <option value="RODA">RODA</option>
                                <option value="SISTEM KELISTRIKAN">SISTEM KELISTRIKAN</option>
                                <option value="KAPASITAS BAHAN BAKAR">KAPASITAS BAHAN BAKAR</option>
                                <option value="KAPASITAS PENGEMUDI">KAPASITAS PENGEMUDI</option>
                                <option value="AS">AS</option>
                                <option value="KABIN">KABIN</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="">Text kiri</label>
                            <input type="text" required class="form-control my-0" name="spesifikasi[0][text1]">
                        </div>
                        <div class="col-3">
                            <label for="">Text tengah</label>
                            <input type="text" required class="form-control my-0" name="spesifikasi[0][text2]">
                        </div>
                        <div class="col-3">
                            <label for="">Text kanan</label>
                            <input type="text" required class="form-control my-0" name="spesifikasi[0][text3]">
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
        let a = 1

        let ii = 1
        let aa = 1

        function addRow3(){
      document.querySelector('#row_lineup').insertAdjacentHTML('beforeend',
                  `
                  <div class="row">
                        <div class="col-6">
                            <label for="">Foto</label>
                            <input type="file" required class="form-control" name="item[${ii}][gambar]">
                        </div>
                        <div class="col-6">
                            <label for="">Text</label>

                            <div class="d-flex gap-2">
                                <input type="text" required class="form-control my-0" name="item[${ii}][text]">
                                <button onclick="deleteRow(this)" class="btn btn-danger my-0">x</button>
                            </div>
                            
                        </div>
                    </div>
                  `)
                  ii++
    }


        function addRow(){
      document.querySelector('#row_lineup').insertAdjacentHTML('beforeend',
                  `
                  <div class="row">
                    <div class="col-4">
                            <label for="">Judul</label>
                            <div class="d-flex align-items-center">
                            <input type="text" required class="form-control my-0" name="item[${i}][judul]">
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="">Foto</label>
                            <input type="file" required class="form-control" name="item[${i}][gambar]">
                        </div>
                        <div class="col-4">
                            <label for="">Text</label>

                            <div class="d-flex gap-2">
                                <input type="text" required class="form-control my-0" name="item[${i}][text]">
                                <button onclick="deleteRow(this)" class="btn btn-danger my-0">x</button>
                            </div>
                            
                        </div>
                    </div>
                  `)
                  i++
    }

    function addRow2(){
      document.querySelector('#row_spesifikasi').insertAdjacentHTML('beforeend',
                  `
                  <div class="row">
                        <div class="col-3">
                            <label for="">Foto</label>
                            <select name="spesifikasi[0][jenis]" id="" class="form-control">
                                <option value="" selected disabled>-- Pilih spesifikasi</option>
                                <option value="DIMENSI">DIMENSI</option>
                                    <option value="BERAT">BERAT</option>
                                    <option value="KEMAMPUAN">KEMAMPUAN</option>
                                    <option value="MESIN">MESIN</option>
                                    <option value="TRANSMISI">TRANSMISI</option>
                                    <option value="SETIR">SETIR</option>
                                    <option value="SUSPENSI">SUSPENSI</option>
                                    <option value="REM">REM</option>
                                    <option value="RODA">RODA</option>
                                    <option value="SISTEM KELISTRIKAN">SISTEM KELISTRIKAN</option>
                                    <option value="KAPASITAS BAHAN BAKAR">KAPASITAS BAHAN BAKAR</option>
                                    <option value="KAPASITAS PENGEMUDI">KAPASITAS PENGEMUDI</option>
                                    <option value="AS">AS</option>
                                    <option value="KABIN">KABIN</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="">Text kiri</label>
                            <input type="text" required class="form-control my-0" name="spesifikasi[0][text1]">
                        </div>
                        <div class="col-3">
                            <label for="">Text tengah</label>
                            <input type="text" required class="form-control my-0" name="spesifikasi[0][text2]">
                        </div>
                        <div class="col-3">
                            <label for="">Text kanan</label>

                            <div class="d-flex gap-2">
                                <input type="text" required class="form-control my-0" name="spesifikasi[0][text3]">
                                <button onclick="deleteRow(this)" class="btn btn-danger my-0">x</button>
                            </div>
                            
                        </div>
                    </div>
                  `)
                  i++
    }

    function deleteRow(e){
      e.parentElement.parentElement.parentElement.remove()
    }

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

    </script>
@endsection