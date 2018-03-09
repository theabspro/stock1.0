@extends($theme.'layouts.app')
@section('browser_title', $action.' User')


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
            <a href="{{route('listUsers')}}">
                Masters
            </a>
            <i class="fa fa-angle-right"></i>
                {{$action}}
        </li>
    </ol>

    {{Form::open(['route' => 'saveUser','files' => true, 'id'=>'form'])}}
    {{Form::hidden('id',$user->id)}}

    <div class="grid-form">
        <div class="grid-form1">
            <h2 id="forms-example" class="">{{$action}} User</h2>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Name</label>    
                    {{Form::text('name',$user->name,['maxlength'=>255, 'autocomplete' => 'off', 'class' => 'form-control' ])}}
                </div>
                <div class="form-group col-sm-6">
                    <label>Email</label>   
                    {{Form::email('email',$user->email,['maxlength'=>255, 'autocomplete' => 'off', 'class' => 'form-control' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Role</label>
                    {{Form::select('role_id',$roles_list, $user->role_id,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
                <div class="form-group col-sm-6">
                    <label>User Name</label>
                    {{Form::text('username',$user->username, ['maxlength'=> '255', 'autocomplete' => 'off', 'class' => 'form-control' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6" style="display: {{!empty($user->id) ? 'block' : 'none'}}">
                       <label>Change Password</label> 
                       {{Form::radio('password_change', 'Yes',false,['class' => 'password_change'])}} {{Form::radio('password_change', 'No',true,['class' => 'password_change1'])}}     
                </div>
                <div class="form-group col-sm-6" style="display: {{empty($user->id) ? 'block' : 'none'}}">
                    <label>Password</label>
                    {{Form::password('password',['maxlength'=>255, 'autocomplete' => 'off', 'class' => 'form-control' ])}}
                    {{Form::hidden('password_yes','Yes')}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Profile Image</label>   
                    {{Form::file('profile_image')}}
                </div>
                <div class="form-group col-sm-6"">
                    @if(!empty($user->profile_image))
                     <img src="{{ asset(userImage($user->profile_image)) }}">
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Company</label>   
                    {{Form::select('company_id', $company, $user->company_id, ['class' => 'form-control'] )}}
                </div>
                <div class="form-group col-sm-6"">
                    <label>Active</label>
                    {{Form::radio('is_active', 1,$user->is_active)}}
                    {{Form::radio('is_active', 0,!$user->is_active)}}
                </div>
            </div>

            <button type="submit" data-loading-text="Submitting..." id="role_submit" class="btn btn-lg btn-primary btn-block">
                Submit
            </button>
        </div>
    </div>
    
    {{Form::close()}}
@endsection

@section('footer_scripts')
    <script src="{{ asset($theme.'app/js/user.js')}}"></script>
    <script type="text/javascript">
        var save_url = '{{route("saveUser")}}';
        var list_url = '{{route("listUsers")}}';
    </script>
@endsection

