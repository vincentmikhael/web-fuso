@extends('layouts/dashboard')
@section('url','Lineup kendaraan')
@section('title','Manajemen lineup kendaraan')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Edit data</div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                    <div class="col-md-6">
                        <input type="hidden" value="{{$id_kendaraan}}" name="kendaraan_id">
                        <label for="">Nama</label>
                        <input type="text" value="{{$lineup->nama}}" required class="form-control" name="nama">
                    </div>


                        <div class="col-md-6">
                            <label for="">Tipe</label>
                            <select name="tipe" id="tipe" required class="form-select">
                                @if ($id_kendaraan == 1)
                                <option value="Super Economial" {{$lineup->tipe == 'Super Economial' ? 'selected' : ''}}>Super Economial</option>
                                <option value="Super Power" {{$lineup->tipe == 'Super Power' ? 'selected' : ''}}>Super Power</option>
                                <option value="Super Speed" {{$lineup->tipe == 'Super Speed' ? 'selected' : ''}}>Super Speed</option>
                                <option value="Super Capacity" {{$lineup->tipe == 'Super Capacity' ? 'selected' : ''}}>Super Capacity</option>
                                <option value="Bus" {{$lineup->tipe == 'Bus' ? 'selected' : ''}}>Bus</option>
                                @elseif ($id_kendaraan == 2)
                                    <option value="4x2" {{$lineup->tipe == '4x2' ? 'selected' : ''}}>4x2</option>
                                    <option value="6x2" {{$lineup->tipe == '6x2' ? 'selected' : ''}}>6x2</option>
                                    <option value="6x4" {{$lineup->tipe == '6x4' ? 'selected' : ''}}>6x4</option>
                                @elseif ($id_kendaraan == 3)
                                    <option value="6x4" {{$lineup->tipe == '6x4' ? 'selected' : ''}}>6x4</option>
                                @endif
                            </select>
                        </div>

                        <div class="col-md-6">
                            <input type="hidden" name="kendaraan_id">
                            <label for="">Jumlah ban</label>
                            <input type="number" value="{{$lineup->ban}}" required class="form-control" name="ban">
                        </div>
                        <div class="col-md-6">
                            <input type="hidden" name="kendaraan_id">
                            <label for="">PS</label>
                            <input type="number" required value="{{$lineup->ps}}" class="form-control" name="ps">
                        </div>

                        <div class="col-md-4">
                            <input type="hidden" name="kendaraan_id">
                            <label for="">Gambar Thumbnail</label>
                            <input type="file" class="form-control" name="thumbnail">
                        </div>
                        <div class="col-md-4">
                            <input type="hidden" name="kendaraan_id">
                            <label for="">Banner atas</label>
                            <input type="file" class="form-control" name="banner">
                        </div>
                        <div class="col-md-4">
                            <input type="hidden" name="kendaraan_id">
                            <label for="">Brosur (PDF)</label>
                            <input type="file" class="form-control" name="brosur">
                        </div>
                        {{-- <div class="col-md-4">
                            <input type="hidden" name="kendaraan_id">
                            <label for="">Gambar dibawah banner</label>
                            <input type="file" class="form-control" name="gambar">
                        </div> --}}

                    <button onclick="addRow()" class="btn btn-secondary mt-4">+Add row slider</button>
                    <div id="row_lineup" class="">
                        @forelse ($lineup_slider as $idx => $item)
                        <div class="row">
                            <div class="col-6">
                                <input type="hidden" name="item[{{$idx}}][id]" value="{{$item->id}}">
                                <label for="">Foto</label>
                                <input type="file" class="form-control" name="item[{{$idx}}][gambar]">
                            </div>
                            <div class="col-6">
                                <label for="">Text</label>
                                <div class="d-flex align-items-center">
                                <input value="{{$item->text}}" type="text" required class="form-control my-0" name="item[{{$idx}}][text]">
                                <a href="/lineup_slider/delete/{{$item->id}}" class="btn btn-danger my-0">Del</a>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="row">
                            <div class="col-6">
                                <input type="hidden" name="item[0][id]">
                                <label for="">Foto</label>
                                <input type="file" required class="form-control" name="item[0][gambar]">
                            </div>
                            <div class="col-6">
                                <label for="">Text</label>
                                <input type="text" required class="form-control my-0" name="item[0][text]">
                            </div>
                        </div>
                        @endforelse
                    
                </div>
                <button onclick="addRow2()" class="btn btn-secondary mt-4">+Add row spesifikasi</button>
                <div id="row_spesifikasi" class="">
                    @forelse ($lineup_spesifikasi as $idx => $item)
                    <div class="row">
                        <div class="col-3">
                            <input type="hidden" name="spesifikasi[{{$idx}}][id]" value="{{$item->id}}">
                            <label for="">Foto</label>
                            <select name="spesifikasi[{{$idx}}][jenis]" id="" class="form-control">
                                <option value="" disabled>-- Pilih spesifikasi</option>
                                <option value="DIMENSI" {{ $item->jenis == 'DIMENSI' ? 'selected' : '' }}>DIMENSI</option>
        <option value="BERAT" {{ $item->jenis == 'BERAT' ? 'selected' : '' }}>BERAT</option>
        <option value="KEMAMPUAN" {{ $item->jenis == 'KEMAMPUAN' ? 'selected' : '' }}>KEMAMPUAN</option>
        <option value="MESIN" {{ $item->jenis == 'MESIN' ? 'selected' : '' }}>MESIN</option>
        <option value="TRANMISI" {{ $item->jenis == 'TRANMISI' ? 'selected' : '' }}>TRANMISI</option>
        <option value="SETIR" {{ $item->jenis == 'SETIR' ? 'selected' : '' }}>SETIR</option>
        <option value="SUSPENSI" {{ $item->jenis == 'SUSPENSI' ? 'selected' : '' }}>SUSPENSI</option>
        <option value="REM" {{ $item->jenis == 'REM' ? 'selected' : '' }}>REM</option>
        <option value="RODA" {{ $item->jenis == 'RODA' ? 'selected' : '' }}>RODA</option>
        <option value="SISTEM KELISTRIKAN" {{ $item->jenis == 'SISTEM KELISTRIKAN' ? 'selected' : '' }}>SISTEM KELISTRIKAN</option>
        <option value="KAPASITAS BAHAN BAKAR" {{ $item->jenis == 'KAPASITAS BAHAN BAKAR' ? 'selected' : '' }}>KAPASITAS BAHAN BAKAR</option>
        <option value="KAPASITAS PENGEMUDI" {{ $item->jenis == 'KAPASITAS PENGEMUDI' ? 'selected' : '' }}>KAPASITAS PENGEMUDI</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="">Text kiri</label>
                            <input type="text" value="{{$item->text1}}" required class="form-control my-0" name="spesifikasi[{{$idx}}][text1]">
                        </div>
                        <div class="col-3">
                            <label for="">Text tengah</label>
                            <input type="text" value="{{$item->text2}}" required class="form-control my-0" name="spesifikasi[{{$idx}}][text2]">
                        </div>
                        <div class="col-3">
                            <label for="">Text kanan</label>
                            <div class="d-flex align-items-center">
                                <input type="text" value="{{$item->text3}}" required class="form-control my-0" name="spesifikasi[{{$idx}}][text3]">
                                <a href="/lineup_spesifikasi/delete/{{$item->id}}" class="btn btn-danger my-0">Del</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="row">
                        <div class="col-3">
                            <input type="hidden" name="spesifikasi[0][id]">
                            <label for="">Foto</label>
                            <select name="spesifikasi[0][jenis]" id="" class="form-control">
                                <option value="" selected disabled>-- Pilih spesifikasi</option>
                                <option value="DIMENSI">DIMENSI</option>
                                <option value="BERAT">BERAT</option>
                                <option value="KEMAMPUAN">KEMAMPUAN</option>
                                <option value="MESIN">MESIN</option>
                                <option value="TRANMISI">TRANMISI</option>
                                <option value="SETIR">SETIR</option>
                                <option value="SUSPENSI">SUSPENSI</option>
                                <option value="REM">REM</option>
                                <option value="RODA">RODA</option>
                                <option value="SISTEM KELISTRIKAN">SISTEM KELISTRIKAN</option>
                                <option value="KAPASITAS BAHAN BAKAR">KAPASITAS BAHAN BAKAR</option>
                                <option value="KAPASITAS PENGEMUDI">KAPASITAS PENGEMUDI</option>
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
                    @endforelse
                    
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
        let i = {{count($lineup_slider) == 0 ? (count($lineup_slider) + 1) : count($lineup_slider)}}
        let a = {{count($lineup_spesifikasi) == 0 ? (count($lineup_spesifikasi) + 1) : count($lineup_spesifikasi)}}
        function addRow(){
      document.querySelector('#row_lineup').insertAdjacentHTML('beforeend',
                  `
                  <div class="row">
                        <div class="col-6">
                            <input type="hidden" name="item[${i}][id]">
                            <label for="">Foto</label>
                            <input type="file" required class="form-control" name="item[${i}][gambar]">
                        </div>
                        <div class="col-6">
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
                            <input type="hidden" name="spesifikasi[${a}][id]">
                            <label for="">Foto</label>
                            <select name="spesifikasi[${a}][jenis]" id="" class="form-control">
                                <option value="" selected disabled>-- Pilih spesifikasi</option>
                                <option value="DIMENSI">DIMENSI</option>
                                <option value="BERAT">BERAT</option>
                                <option value="KEMAMPUAN">KEMAMPUAN</option>
                                <option value="MESIN">MESIN</option>
                                <option value="TRANMISI">TRANMISI</option>
                                <option value="SETIR">SETIR</option>
                                <option value="SUSPENSI">SUSPENSI</option>
                                <option value="REM">REM</option>
                                <option value="RODA">RODA</option>
                                <option value="SISTEM KELISTRIKAN">SISTEM KELISTRIKAN</option>
                                <option value="KAPASITAS BAHAN BAKAR">KAPASITAS BAHAN BAKAR</option>
                                <option value="KAPASITAS PENGEMUDI">KAPASITAS PENGEMUDI</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <label for="">Text kiri</label>
                            <input type="text" required class="form-control my-0" name="spesifikasi[${a}][text1]">
                        </div>
                        <div class="col-3">
                            <label for="">Text tengah</label>
                            <input type="text" required class="form-control my-0" name="spesifikasi[${a}][text2]">
                        </div>
                        <div class="col-3">
                            <label for="">Text kanan</label>

                            <div class="d-flex gap-2">
                                <input type="text" required class="form-control my-0" name="spesifikasi[${a}][text3]">
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