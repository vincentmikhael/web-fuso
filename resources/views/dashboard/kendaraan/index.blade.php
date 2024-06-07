@extends('layouts/dashboard')
@section('url','Kendaraan')
@section('title','Manajemen kendaraan')
@section('content')
<div class="row">
        <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>CMS Kendaraan</h6>
              </div>
              <div class="card-body px-4 pt-0 pb-2">
                {{-- <div class="d-flex justify-content-end">
                    <a href="/kendaraan/lineup_spesifikasi" class="btn btn-primary">Buat master data spesifikasi</a>
                </div> --}}
                
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                          <th class="text-secondary opacity-7"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($kendaraan as $item)
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                              {{-- <div>
                                <img src="{{asset($item->sampul)}}" class="avatar avatar-sm me-3" alt="user1">
                              </div> --}}
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$item->nama}}</h6>
                              </div>
                            </div>
                          </td>
                          <td><h6 class="mb-0 text-sm">{{$item->kategori}}</h6></td>
         
                          <td class="d-flex gap-2 align-items-center">
                            <a href="/kendaraan/{{$item->id}}/lineup" class=" btn btn-warning font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit kendaraan"> Atur lineup kendaraan </a>
                            <a href="/kendaraan/edit/{{$item->id}}" class=" btn btn-success font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit kendaraan"> Edit </a>
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