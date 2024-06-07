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
                                <option value="" disabled>Pilih jenis kendaraan</option>
                                <option value="Light Duty" {{$kendaraan->kategori == 'Light Duty' ? 'selected' : ''}}>Light Duty</option>
                                <option value="Medium Duty" {{$kendaraan->kategori == 'Medium Duty' ? 'selected' : ''}}>Medium Duty</option>
                                <option value="Tractor Head" {{$kendaraan->kategori == 'Tractor Head' ? 'selected' : ''}}>Tractor Head</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="">Tipe</label>
                            <select name="tipe" id="tipe" required class="form-select">
                                @if ($kendaraan->kategori == 'Light Duty')
                                <option value="Super Economial" {{$kendaraan->tipe == 'Super Economial' ? 'selected' : ''}}>Super Economial</option>
                                <option value="Super Power" {{$kendaraan->tipe == 'Super Power' ? 'selected' : ''}}>Super Power</option>
                                <option value="Super Speed" {{$kendaraan->tipe == 'Super Speed' ? 'selected' : ''}}>Super Speed</option>
                                <option value="Super Capacity" {{$kendaraan->tipe == 'Super Capacity' ? 'selected' : ''}}>Super Capacity</option>
                                @elseif ($kendaraan->kategori == 'Medium Duty')
                                    <option value="4x2" {{$kendaraan->tipe == '4x2' ? 'selected' : ''}}>4x2</option>
                                    <option value="6x2" {{$kendaraan->tipe == '6x2' ? 'selected' : ''}}>6x2</option>
                                    <option value="6x4" {{$kendaraan->tipe == '6x4' ? 'selected' : ''}}>6x4</option>
                                @elseif ($kendaraan->kategori == 'Tractor Head')
                                    <option value="6x4" {{$kendaraan->tipe == '6x4' ? 'selected' : ''}}>6x4</option>
                                @endif
                            </select>
                        </div> --}}
                    
                    <div class="col-md-12">
                        <label for="">Nama kendaraan</label>
                    <input type="text" required class="form-control" value="{{$kendaraan->nama}}" name="nama">
                    </div>
                    
                    <div class="col-md-6">
                        <label for="">Gambar thumbnail png</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>

                    <div class="col-md-6">
                        <label for="">Gambar untuk halaman utama (berbackground)</label>
                    <input type="file" class="form-control" name="gambar2">
                    </div>
                    
                    <label for="">Beban muatan</label>
                    <input type="text" required value="{{$kendaraan->muatan}}" class="form-control" name="muatan">
                    <div class="col-md-6">
                        <label for="">Deskripsi section fitur lengkap</label>
                        <input type="text" value="{{$kendaraan->fitur_lengkap}}" required class="form-control" name="fitur_lengkap">
                    </div>
                    <div class="col-md-6">
                    <label for="">Foto section fitur lengkap</label>
                    <small style="color: red; font-size 11px;">Foto wajib horizontal / berukuran 846 x 596</small>
                    <input type="file" class="form-control" name="foto_fitur_lengkap">
                    </div>
                    <div class="col-md-6">
                    <label for="">Deskripsi section mesin canggih</label>
                    <input type="text" required value="{{$kendaraan->mesin_canggih}}" class="form-control" name="mesin_canggih">
                    </div>
                    <div class="col-md-6">
                    <label for="">Foto section mesin canggih</label>
                    <small style="color: red; font-size 11px;">Foto wajib horizontal / berukuran 846 x 596</small>
                    <input type="file" class="form-control" name="foto_mesin_canggih">
                     </div>
                    <div class="col-md-6">
                    <label for="">Deskripsi section chasis</label>
                    <input type="text" required value="{{$kendaraan->chasis}}" class="form-control" name="chasis">
                    </div>
                    <div class="col-md-6">
                    <label for="">Foto section chasis</label>
                    <small style="color: red; font-size 11px;">Foto wajib horizontal / berukuran 846 x 596</small>
                    <input type="file" class="form-control" name="foto_chasis">
                </div>
                <div class="col-12">
                    <hr>
                    <h5 for="">Section slider</h5>
                    <div onclick="addRow()" class="badge bg-primary">+ Add row</div>
                    <div id="row_slider">
                        @forelse ($kendaraan_slider as $idx => $item)
                        <div class="row">
                            <div class="col-md-4">
                                <input type="hidden" name="item[{{$idx}}][id]" value="{{$item->id}}">
                                    <label for="">Judul</label>
                                    <input type="text" value="{{$item->judul}}" required class="form-control" name="item[{{$idx}}][judul]">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Deskripsi</label>
                                    <input type="text" value="{{$item->deskripsi}}" required class="form-control" name="item[{{$idx}}][deskripsi]">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Foto background</label>
                                    <div class="d-flex">
                                        <input type="file" class="form-control" name="item[{{$idx}}][background]">
                                        <a href="/kendaraan_slider/delete/{{$item->id}}" class="btn btn-danger my-0">Del</a>
                                    </div>
                                    
                                </div>
                        </div>
                        @empty
                        <div class="row">
                            <input type="hidden" name="item[0][id]"/>
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
                        @endforelse
                        
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
        let i = {{count($kendaraan_slider) == 0 ? (count($kendaraan_slider) + 1) : count($kendaraan_slider)}}
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
                    <input type="hidden" name="item[${i}][id]"/>
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