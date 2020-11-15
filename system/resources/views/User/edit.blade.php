

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
                                 Tambah Data User
                            </div>
                            <div class ="card-body">
                                <form action="{{url('user',$user->id)}}" method="post">
                                    @csrf
                                    @method("PUT")
                                    <div class ="form-group">
                                        <label  for ="" class ="control-label"> Nama </label>
                                        <input type="text" class="form-control" name="nama" value = "{{$user->nama}}">
                                    </div>
                                    <div class ="form-group">
                                        <label  for ="" class ="control-label"> Username </label>
                                        <input type="text" class="form-control" name="username" value = "{{$user->username}}">
                                    </div>
                                    <div class ="form-group">
                                        <label  for ="" class ="control-label"> Email </label>
                                        <input type="text" class="form-control" name="email" value = "{{$user->email}}">
                                    </div>
                                    <div class ="form-group">
                                        <label  for ="" class ="control-label"> Password </label>
                                        <input type="text" class="form-control" >
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
