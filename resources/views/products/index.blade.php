@extends('layout.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <img src="{{asset('image/atas1.jpeg')}}" alt="">

                <div class="card-body">                                    
                    <div>
                        <br>
                        <p>
                            <h2><img src="{{asset('image/ceklis.jpg')}}" alt="sukses" style="height: 60px"> Thanks!</h2><br>
                            Thank you for your cooperation.
Have a great day. 

                        </p>           
                        <a href="{{ route('products.create.step.one') }}" class="btn btn-primary pull-right">Submit another response</a>             
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection