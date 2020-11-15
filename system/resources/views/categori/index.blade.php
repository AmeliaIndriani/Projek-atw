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
                                Data categori
                            <a href="{{url('categori/create')}}" class="btn-btn-dark float-right "> <i class="fa fa-plus"></i>Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead> 
                                        <th> No </th>
                                        <th> Aksi</th>
                                        <th> Nama</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_categori as $categori)
                                        <tr>
                                            <td> {{$loop->iteration}}</td>
                                            <td>
                                                <div class ="btn-group">
                                                    <a href="{{url('categori', $categori->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a> 
                                                    <a href="{{url('categori', $categori->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    @include('template.utils.delete' , ['url'=> url('categori', $categori->id)])    
                                                </div>
                                            </td>
                                            <td> {{$categori-> nama}} </td>
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