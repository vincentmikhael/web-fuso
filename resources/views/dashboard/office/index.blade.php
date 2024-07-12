@extends('layouts/dashboard')
@section('url','Office')
@section('title','Manajemen office')
@section('content')
<div class="row">
        <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Data office</h6>
              </div>
              <div class="card-body px-4 pt-0 pb-2">
                <div class="d-flex justify-content-end">
                    <a href="/office/add" class="btn btn-primary">Tambah data</a>
                </div>
                
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                      <thead>
                        <tr>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gmaps</th>
                          <th class="text-secondary opacity-7"></th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created by</th>
                          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated by</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($office as $item)
                        <tr>
                          <td>
                            <div class="d-flex px-2 py-1">
                 
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$item->nama}}</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex px-2 py-1">
                 
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$item->alamat}}</h6>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="d-flex px-2 py-1">
                 
                              <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{$item->gmaps}}</h6>
                              </div>
                            </div>
                          </td>
              
         
                          <td class="align-middle">
                            <a href="/office/edit/{{$item->id}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit office"> Edit </a>
                            <a href="/office/delete/{{$item->id}}" class="text-danger font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete office"> Hapus </a>
                          </td>
                          <td class="mb-0 text-sm h6">{{$item->created_by}}</td>
                          <td class="mb-0 text-sm h6">{{$item->updated_by}}</td>
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