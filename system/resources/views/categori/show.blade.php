

@extends('template.base')
@section('content')

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class="container">
                <div class="row">
                    <div class ="col-md-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                 Detail Data categori
                            </div>
                            <div class ="card-body">
                            <h3> {{$produk->nama}}</h3>
                            <hr>
                            <p> 
                                categori : {{$categori->nama}} |
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
