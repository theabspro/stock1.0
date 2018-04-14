@extends($theme.'layouts.app')
@section('browser_title', $action.' Product')


@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/')}}">
                Home
            </a>
            <i class="fa fa-angle-right"></i>
            <a href="{{route('listProducts')}}">
                Products
            </a>
            <i class="fa fa-angle-right"></i>
                {{$action}}
        </li>
    </ol>

    {{Form::open(['route' => 'saveProduct','files' => true, 'id'=>'form'])}}
    {{Form::hidden('id',$product->id)}}

    <div class="grid-form">
        <div class="grid-form1">
            <h2 id="forms-example" class="">{{$action}} Product</h2>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Name</label>    
                    {{Form::text('name',$product->name,['maxlength'=>255, 'autocomplete' => 'off', 'class' => 'form-control' ])}}
                </div>
                <div class="form-group col-sm-6">
                    <label>Category</label>
                    {{Form::select('category_id',$category_list, $product->category_id,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Company</label>
                    {{Form::select('company_id',$company_list, $product->company_id,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
                <div class="form-group col-sm-6">
                    <label>Brand</label>
                    {{Form::select('brand_id',$barnds_list, $product->brand_id,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>HSN Code</label>
                    {{Form::text('hsn_code', $product->hsn_code,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div id="features_wrp">
                <h4>Features</h4>
                <div id="feature_inner">
                    @foreach($product->features as $feature)
                        <?php $value = $feature->feature ?>
                        @include($theme.'partials.product.feature')
                    @endforeach
                </div>
                <a href="javascript:;" id="add-feature">ADD</a>
            </div><!-- features_wrp -->


            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Image 1</label>   
                    {{Form::file('image1')}}
                </div>
                <div class="form-group col-sm-6"">
                    @if(!empty($product->image1))
                     <img src="{{ asset(productImage($product->image1,$product->id)) }}">
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Image 2</label>   
                    {{Form::file('image2')}}
                </div>
                <div class="form-group col-sm-6"">
                    @if(!empty($product->image2))
                     <img src="{{ asset(productImage($product->image2,$product->id)) }}">
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Image 3</label>   
                    {{Form::file('image3')}}
                </div>
                <div class="form-group col-sm-6"">
                    @if(!empty($product->image3))
                     <img src="{{ asset(productImage($product->image3,$product->id)) }}">
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6"">
                    <label>Active</label>                    
                    <label>{{Form::radio('is_active', 1,$product->deleted_at == NULL)}} Yes</label>
                    <label>{{Form::radio('is_active', 0,$product->deleted_at != NULL)}} No</label>
                </div>
            </div>

            <button type="submit" data-loading-text="Submitting..." id="submit" class="btn btn-lg btn-primary btn-block">
                Submit
            </button>
        </div>
    </div>
    
    {{Form::close()}}
    <div style="display: none;" id="dummy_feature">
        @include($theme.'partials.product.feature',['value' => ''])
    </div>
@endsection

@section('footer_scripts')
    <script src="{{ asset($theme.'app/js/products.js')}}"></script>
    <script type="text/javascript">
        var save_url = '{{route("saveProduct")}}';
        var list_url = '{{route("listProducts")}}';
        @if(count($product->feature) > 0)
            var add_new_feature = false;
        @else
            var add_new_feature = true;
        @endif
    </script>
@endsection

