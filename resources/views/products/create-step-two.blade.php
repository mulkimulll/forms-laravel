@extends('layout.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('products.create.step.two.post') }}" method="POST">
                @csrf
                <div class="card">
                    <img src="{{asset('image/atas1.jpeg')}}" alt="">

                    <div class="card-body">
                        <h2>Questionairs / Pertanyaan Kepuasan</h2>
                        <p>5 = Completely Satisfied / Sangat Puas <br> 4 = Satisfied / Puas <br> 3 = Dissatisfied /
                            Tidak Puas</p><br>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="form-group">
                            <label for="partner">Product Status</label><br/>
                            <label class="radio-inline"><input type="radio" name="partner" value="1" {{{ (isset($p->partner) && $p->partner == '1') ? "checked" : "" }}}> Active</label>
                            <label class="radio-inline"><input type="radio" name="partner" value="0" {{{ (isset($p->partner) && $p->partner == '0') ? "checked" : "" }}}> DeActive</label>
                        </div>

                        <div class="form-group">
                            <label for="why">Product Stock</label>
                            <input type="text" value="{{{ $p->why ?? '' }}}" class="form-control" id="why" name="why" placeholder="Enter your answer" />
                        </div>

                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('products.create.step.one') }}"
                                    class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
