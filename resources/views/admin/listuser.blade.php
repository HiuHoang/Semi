@extends('admin.index')
@section('alluser')
<div class="container-fluid px-4">
    <h1 class="mt-4">Manage User Page</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="#">Management</a></li>
        <li class="breadcrumb-item active">All User</li>
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
                        <th>FullName</th>
                        <th>Avatar</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Function</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>FullName</th>
                        <th>Avatar</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Function</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($user as $key => $value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $value->username }}</td>
                        <td>{{ $value->fullname}}</td>
                        <td>
                            @if($value->userimage)
                            <img class="image rounded-circle" src="{{asset('images/users/'.$value->userimage)}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">
                            @endif
                        </td>
                        <td>{{ $value->email}}</td>
                        <td>{{ $value->address}}</td>
                        <td>{{ $value->phonenumber}}</td>
                        <td>{{ $value->rolename}}</td>
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