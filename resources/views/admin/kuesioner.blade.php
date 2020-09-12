@extends('layout.index')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Kuesioner</h1>
    <hr>
    <div class="row">
        <div class="col-sm-4">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tambah-kuesioner') }}" name="tambah"> {{csrf_field()}}
                          <div class="form-group">
                            <label for="kuesioner">Isi Kuesioner</label>
                            <input type="text" class="form-control" name="kuesioner" id="kuesioner" autocomplete="off" required="required" placeholder="ketik">
                          </div>
                          <div class="form-group">
                            <label for="jawaban">Text / Radio Button</label>
                            <select name="jawaban" id="jawaban" class="form-control">
                                <option value="text">Text</option>
                                <option value="radio">Radio</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-sm btn-success" name="tambah"><i class="fa fa-plus"></i> Tambah</button>
                            <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Batal</button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Kuesioner</h6>
                </div>
                <div class="card-body">  
                    @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">                            
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{ session('message') }}</strong>
                    </div>     
                    @endif               
                    <table class="table table-bordered" id="dataTable" width="" cellspacing="0">
                          <thead>
                            <tr>
                                <th>No</th>
                                <th>Kuesioner</th>
                                <th>Aksi</th>
                            </tr>
                         </thead>
                         <tbody>
                             @foreach ($a as $item)
                             <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->pertanyaan }}</td>
                                <td>
                                    <a href="{{ url('ask/kuesioner-edit/'.$item->id) }}" class="btn btn-sm btn-info"><i class="fa fa-pen"></i> Ubah</a>
                                    <a href="{{ url('ask/kuesioner-delete/'.$item->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
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