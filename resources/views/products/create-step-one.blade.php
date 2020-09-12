@extends('layout.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('products.create.step.one.post') }}" method="POST">
                @csrf

                <div class="card">
                    <img src="{{asset('image/atas1.jpeg')}}" alt="">
                    <div class="card-body">

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <h2>Customer Information</h2> 
                        <br>
                        <div class="form-group">
                            <label for="company">1.Company's Name / Nama Perusahaan</label>
                            <input type="text" value="{{ $p->company ?? '' }}" class="form-control" id="company" name="company" placeholder="Enter your answer">
                        </div>
                        <div class="form-group">
                            <label for="nama">2.Name / Nama </label>
                            <input type="text" value="{{{ $p->nama ?? '' }}}" class="form-control" id="nama" name="nama" placeholder="Enter your answer" />
                        </div>
                        <div class="form-group">
                            <label for="jabatan">3.Rank / Jabatan </label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{{ $p->jabatan ?? '' }}}" placeholder="Enter your answer">
                        </div>


                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
