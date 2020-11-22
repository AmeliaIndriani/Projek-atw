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
                                Filter
                            </div>
                            <div class="card-body">
                                <form action="{{url('kategori/filter')}} " method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" value="{{$nama?? ""}}">
                                    </div>
                                    <button class="btn btn-dark float-right"><i class="fa fa-search"></i>Filter</button>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                Data kategori
                            <a href="{{url('kategori/create')}}" class="btn-btn-dark float-right "> <i class="fa fa-plus"></i>Tambah Data</a>
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead> 
                                        <th> No </th>
                                        <th> Aksi</th>
                                        <th> Nama</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($list_kategori as $kategori)
                                        <tr>
                                            <td> {{$loop->iteration}}</td>
                                            <td>
                                                <div class ="btn-group">
                                                    <a href="{{url('kategori', $kategori->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a> 
                                                    <a href="{{url('kategori', $kategori->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    @include('template.utils.delete' , ['url'=> url('kategori', $kategori->id)])    
                                                </div>
                                            </td>
                                            <td> {{$kategori-> nama}} </td>
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