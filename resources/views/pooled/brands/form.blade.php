@extends($theme.'layouts.app')
@section('browser_title', $action.' Brand')


@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/')}}">
                Home
            </a>
            <i class="fa fa-angle-right"></i>
            <a href="{{route('listProducts')}}">
                Brands
            </a>
            <i class="fa fa-angle-right"></i>
                {{$action}}
        </li>
    </ol>

    {{Form::open(['route' => 'saveBrand','files' => true, 'id'=>'form'])}}
    {{Form::hidden('id',$brand->id)}}

    <div class="grid-form">
        <div class="grid-form1">
            <h2 id="forms-example" class="">{{$action}} Brand</h2>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Name</label>    
                    {{Form::text('name',$brand->name,['maxlength'=>255, 'autocomplete' => 'off', 'class' => 'form-control' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Company</label>
                    {{Form::select('company_id',$company_list, $brand->company_id,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Image</label>   
                    {{Form::file('image')}}
                </div>
                <div class="form-group col-sm-6"">
                    @if(!empty($brand->image))
                     <img src="{{ asset(userImage($brand->image)) }}">
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6"">
                    <label>Active</label>
                    <label>{{Form::radio('is_active', 1,$brand->deleted_at)}} Yes</label>
                    <label>{{Form::radio('is_active', 0,!$brand->deleted_at)}} No</label>
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
    <script src="{{ asset($theme.'app/js/products.js')}}"></script>
    <script type="text/javascript">
        var save_url = '{{route("saveBrand")}}';
        var list_url = '{{route("listBrands")}}';
    </script>
@endsection

