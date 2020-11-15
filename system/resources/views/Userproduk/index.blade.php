@extends('template.base')
@section('content')

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <div class=" container">
                <div class="row">
                    <div class ="col-md-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                Data Produk
                            <a href="{{url('userproduk/create')}}" class="btn-btn-dark float-right "> <i class="fa fa-plus"></i>Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead> 
                                        <th> No </th>
                                        <th> Aksi</th>
                                        <th> Nama</th>
                                        <th> Harga </th>
                                        <th> Stok</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_produk as $produk)
                                        <tr>
                                            <td> {{$loop->iteration}}</td>
                                            <td>
                                                <div class ="btn-group">
                                                    <a href="{{url('userproduk', $userproduk->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a> 
                                                    <a href="{{url('userproduk', $userproduk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    @include('template.utils.delete' , ['url'=> url('userproduk', $userproduk->id)])    
                                                </div>
                                            </td>
                                            <td> {{$userproduk-> nama}} </td>
                                            <td> {{$userproduk-> harga}} </td>
                                            <td> {{$userproduk-> stok}}</td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                            <td> </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection