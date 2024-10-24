@extends('layouts/dashboard')
@section('url','Sparepart')
@section('title','Manajemen sparepart')
@section('content')
<div class="row">
        <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Tabel sparepart</h6>
              </div>
              <div class="card-body px-4 pt-0 pb-2">
                <div class="d-flex justify-content-end">
                    <a href="/sparepart/add" class="btn btn-primary">Tambah data</a>
                </div>
                
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Material</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Material grup</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($sparepart as $item)
                        <tr>
                          <td>
                            <div class="d-flex px-2 gap-3 py-1">
                                <img src="{{asset($item->gambar)}}" style="width: 80px; height: 80px; object-fit: cover;" alt="">
                              <div class="d-flex flex-column justify-content-center">
                                
                                <h6 class="mb-0 text-sm">{{$item->nama}}</h6>
                              </div>
                            </div>
                          </td>
                          
                          <td>
                            <h6 class="mb-0 text-sm">{{$item->harga}}</h6>
                          </td><td>
                            <h6 class="mb-0 text-sm">{{$item->kategori_id}}</h6>
                          </td>
                          <td>
                            <h6 class="mb-0 text-sm">{{$item->material}}</h6>
                          </td>
                          <td>
                            <h6 class="mb-0 text-sm">{{$item->material_grup}}</h6>
                          </td>
                          <td>
                            <h6 class="mb-0 text-sm">{{$item->deskripsi}}</h6>
                          </td>
         
                          <td class="align-middle">
                            <a href="/sparepart/edit/{{$item->id}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit sparepart_kategori"> Edit </a>
                            <a href="/sparepart/delete/{{$item->id}}" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete sparepart_kategori"> Hapus </a>
                          </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
          </div>
        </div>
@endsection