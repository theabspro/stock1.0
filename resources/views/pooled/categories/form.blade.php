@extends($theme.'layouts.app')
@section('browser_title', $action.' Category')


@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/')}}">
                Home
            </a>
            <i class="fa fa-angle-right"></i>
            <a href="{{route('listCategories')}}">
                Categories
            </a>
            <i class="fa fa-angle-right"></i>
                {{$action}}
        </li>
    </ol>

    {{Form::open(['route' => 'saveCategory','files' => true, 'id'=>'form'])}}
    {{Form::hidden('id',$category->id)}}

    <div class="grid-form">
        <div class="grid-form1">
            <h2 id="forms-example" class="">{{$action}} Category</h2>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Name</label>    
                    {{Form::text('name',$category->name,['maxlength'=>255, 'autocomplete' => 'off', 'class' => 'form-control' ])}}
                </div>
                <div class="form-group col-sm-6">
                    <label>Parent</label>
                    {{Form::select('parent_id',$parent_list, $category->parent_id,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Company</label>
                    {{Form::select('company_id',$company_list, $category->company_id,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Image</label>   
                    {{Form::file('image')}}
                </div>
                <div class="form-group col-sm-6"">
                    @if(!empty($category->image))
                     <img src="{{ asset(userImage($category->profile_image)) }}">
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6"">
                    <label>Active</label>
                    <label>{{Form::radio('is_active', 1,$category->deleted_At)}} Yes</label>
                    <label>{{Form::radio('is_active', 0,!$category->deleted_At)}} No</label>
                </div>
            </div>

            <button type="submit" data-loading-text="Submitting..." id="submit" class="btn btn-lg btn-primary btn-block">
                Submit
            </button>
        </div>
    </div>
    
    {{Form::close()}}
@endsection

@section('footer_scripts')
    <script src="{{ asset($theme.'app/js/category.js')}}"></script>
    <script type="text/javascript">
        var save_url = '{{route("saveCategory")}}';
        var list_url = '{{route("listCategories")}}';
    </script>
@endsection

