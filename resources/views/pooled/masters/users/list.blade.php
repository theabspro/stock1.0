@extends($theme.'layouts.app')
@section('browser_title', 'User Master')


@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/')}}">
                Home
            </a>
            <i class="fa fa-angle-right"></i>
            <a href="{{route('listRoles')}}">
                Masters
            </a>
            <i class="fa fa-angle-right"></i>
                Users
        </li>
    </ol>

    <div class="agile-grids">   
        <div class="agile-tables">
            <div class="w3l-table-info">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>User Master</h2>
                    </div>
                    <div class="col-sm-offset-4 col-sm-2">
                        <a href="{{route('addUser')}}" class="btn btn-primary btn-block pull-right">Add User</a>
                    </div>
                </div>
                <table id="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Role</th>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->role->name}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                 <a href="{{route('editUser', ['user' => $user->id])}}">
                                    <i class="fa fa-edit"></i>
                                </a>                               
                                 <a href="{{route('deleteUser', ['user' => $user->id])}}">
                                    <i class="fa fa-eye"></i>
                                </a>                               
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
              </table>
            </div>
        </div>
    </div>
        
@endsection
