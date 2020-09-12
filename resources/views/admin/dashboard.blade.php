@extends('layout.index')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Dashboard Forms</h1>
    <hr>
    <div class="row">
      <div class="col-xl-4 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data kuesioner</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $r->ask }} Kuesioner</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-car fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Submit</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $s->submit }} Orang</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Data Akun</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $a->akun }} Akun</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div class="card shadow">
          <div class="card-header">
            <strong>Akun yang sedang login</strong>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <img src="{{ asset('image/prof.png') }}" alt="" class="img-thumbnail mb-4">
              </div>
              <div class="col-md-9">
                <table class="table table-borderless">
                  <tbody><tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><b>{{ Auth::user()->name }}</b></td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><b>{{ Auth::user()->email }}</b></td>
                  </tr>
                  <tr>
                    <td>Tgl akun dibuat</td>
                    <td>:</td>
                    <td><b>{{ Auth::user()->created_at }}</b></td>
                  </tr>
                </tbody></table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection