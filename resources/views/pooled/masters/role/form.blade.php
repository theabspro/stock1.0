@extends($theme.'layouts.app')
@section('browser_title', $action.' Role')

@section('content')
    {{Form::open(['route' => 'saveRole','files' => true, 'id'=>'role_form'])}}
    {{Form::hidden('id',$role->id)}}

    <div class="grid-form">
        <div class="grid-form1">
            <h2 id="forms-example" class="">{{$action}} Role</h2>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label for="exampleInputEmail1">Role Name</label>
                    {{Form::text('name',$role->display_name, ['maxlength'=>"255", "autocomplete" => "off", "class" => "form-control" ])}}
                </div>
            </div>
            <h4>Roles</h4>
            @foreach($permission_list as $permission)
                <label>
                    {{Form::checkbox('permission_ids[]',$permission->id,in_array($permission->id,$selected_permissions))}}
                    {{$permission->display_name}}
                </label>
            @endforeach

            <button type="submit" data-loading-text="Submitting..." id="role_submit" class="btn btn-lg btn-primary btn-block">
                Submit
            </button>
        </div>
    </div>

    {{Form::close()}}
@endsection

@section('footer_scripts')
    <script src="{{ asset($theme.'/js/app-role.js')}}"></script>
    <script type="text/javascript">
        var save_url = '{{route("saveRole")}}';
        var list_url = '{{route("listRoles")}}';
    </script>
@endsection
