

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
                                 Tambah Data Categori
                            </div>
                            <div class ="card-body">
                                <form action="{{url('categori',$categori->id)}}" method="post">
                                    @csrf
                                    @method("PUT")
                                    <div class ="form-group">
                                        <label  for ="" class ="control-label"> nama </label>
                                        <input type="text" class="form-control" name="nama" value = "{{$categori->nama}}">
                                    </div>
                                    <button class="btn btn-dark float-right"><i class="fa fa-save"></i>simpan</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
