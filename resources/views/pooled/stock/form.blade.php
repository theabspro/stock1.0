@extends($theme.'layouts.app')
@section('browser_title', $action.' Stock')


@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/')}}">
                Home
            </a>
            <i class="fa fa-angle-right"></i>
            <a href="{{route('listStock')}}">
                Stock
            </a>
            <i class="fa fa-angle-right"></i>
                {{$action}}
        </li>
    </ol>

    {{Form::open(['route' => 'saveStock','files' => true, 'id'=>'form'])}}
    {{Form::hidden('id',$stock->id)}}

    <div class="grid-form">
        <div class="grid-form1">
            <h2 id="forms-example" class="">{{$action}} Stock</h2>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Company*</label>
                    {{Form::select('company_id',$company_list, '',['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
                <div class="form-group col-sm-6">
                    <label>Product*</label>
                    {{Form::select('product_id',$product_list, $stock->product_id,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Category</label>
                    {{Form::select('category_id',$category_list, '',['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
                <div class="form-group col-sm-6">
                    <label>Brand</label>
                    {{Form::select('brand_id',$brands_list, '',['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>


            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Quantity*</label>
                    {{Form::text('qty', $stock->qty,['class' => 'form-control calculate_total', 'autocomplete' => 'off', 'id' => 'qty' ])}}
                </div>
                <div class="form-group col-sm-6">
                    <label>Price*</label>
                    {{Form::text('price', $stock->price,['class' => 'form-control calculate_total', 'autocomplete' => 'off', 'id' => 'price' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Total</label>
                    {{Form::text('total', $stock->qty * $stock->price,['readonly' => 'readonly', 'class' => 'form-control', 'autocomplete' => 'off', 'id' => 'total' ])}}
                </div>
                <div class="form-group col-sm-6">
                    <label>SKU*</label>
                    {{Form::text('sku', $stock->sku,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Comments (if any)</label>
                    {{Form::text('comments', $stock->comments,['class' => 'form-control', 'autocomplete' => 'off' ])}}
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
    <script src="{{ asset($theme.'app/js/stock.js')}}"></script>
    <script type="text/javascript">
        var save_url = '{{route("saveStock")}}';
        var list_url = '{{route("listStock")}}';
    </script>
@endsection

