@extends('admin.index')
@section('alluser')
<div class="container-fluid px-4">
    <h1 class="mt-4">Manage User Page</h1>
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
                        <th>Email</th>
                        <th>Image</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>Function</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>Function</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($user as $key => $value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->username }}</td>
                        <td>{{ $value->email}}</td>
                        <td>{{ $value->email}}</td>
                        <td>{{ $value->email}}</td>
                        <td>{{ $value->role}}</td>
                        <td>
                            <a href="{{route('editUser', $value->user_id)}}"class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"></span>Edit</a>
                            <a href="{{route('deleteUser' , $value->user_id)}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">
                            <span class="glyphicon glyphicon-trash"></span>Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop