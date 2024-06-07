@extends('layouts/main')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h6>Filter</h6>

                    <form action="" method="">
                        <label for="">Pencarian</label>
                        <input type="text" name="pekerjaan" class="form-control">

                        <label for="">Perusahaan</label>
                        <select name="perusahaan" class="form-control" id="">
                            <option value="">-- Pilih perusahaan</option>
                            @foreach ($perusahaan as $item)
                                <option value="{{$item->perusahaan}}">{{$item->perusahaan}}</option>
                            @endforeach
                        </select>

                        <button type="submit" class="btn btn-warning text-white mt-4">Cari</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                @foreach ($karir as $item)
                <div class="col-md-6 py-3">
                    <a href="/list-karir/{{$item->slug}}" class="card h-100 text-dark">
                        <div class="card-body">
                            <h5>{{$item->pekerjaan}}</h5>
                            <small>  {{$item->perusahaan}}</small> <br><br>
                            <small class="my-4">{{$item->tempat}}</small> <br><br>
                            <div class="font-weight-bold">Kualifikasi</div>

                            <p>{!! nl2br($item->kualifikasi) !!}</p>
                        </div>
                    </a>
                </div>
                @endforeach

                
                
            </div>
            {{ $karir->links() }}
        </div>
    </div>
</div>

@endsection