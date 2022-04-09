@extends('admin.index')
@section('allproduct')
<div class="container-fluid px-4">
    <h1 class="mt-4">Manage Product Page</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            User Table
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Colour</th>
                        <th>Material</th>
                        <th>Origin</th>
                        <th>Description</th>
                        <th>Function</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Colour</th>
                        <th>Material</th>
                        <th>Origin</th>
                        <th>Description</th>
                        <th>Function</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($product as $key => $value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->productname }}</td>
                        <td>{{ $value->filename }}</td>
                        <td>{{ $value->price}}</td>
                        <td>{{ $value->colour}}</td>
                        <td>{{ $value->material}}</td>
                        <td>{{ $value->origin}}</td>
                        <td>{{$value->description}}</td>
                        <td>
                            <a href="{{route('editProduct', $value->product_id)}}"class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"></span>Edit</a>
                            <a href="{{route('deleteProduct' , $value->product_id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash"></span>Delete</a>
                            <a href="{{route('insert')}}"class="btn btn-success edit"><span class="glyphicon glyphicon-edit"></span>Insert</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop