@extends($theme.'layouts.app')
@section('browser_title', $action.' Sale')


@section('content')

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/')}}">
                Home
            </a>
            <i class="fa fa-angle-right"></i>
                {{$action}} Sale
                
        </li>
    </ol>

    {{Form::open(['route' => 'saveSale','files' => true, 'id'=>'form'])}}
    {{Form::hidden('id',$sale->id)}}

    <div class="grid-form">
        <div class="grid-form1">
            <h2 id="forms-example" class="">{{$action}} Sale</h2>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Date</label>    
                    {{Form::text('created_at',$sale->created_at,['readonly'=>'readonly', 'class' => 'form-control' ])}}
                </div>
                <div class="form-group col-sm-6">
                    <label>Customer</label>
                    {{Form::select('customer_id',$customer_list, $sale->customer_id,['class' => 'form-control customer_select', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div id="sale_details_wrp">
            @foreach($sale_details as $key => $sale_detail)
                @include($theme.'partials/sales/sale_details')
            @endforeach
            </div>
            <hr/>

            <div class="row">
                <div class="form-group col-sm-3">
                    <label>Sub Total</label>
                    {{Form::text('sub_total', $sale->sub_total,['readonly' => 'readonly', 'class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
                <div class="form-group col-sm-3">
                    <label>Discount</label>
                    {{Form::text('discount', $sale->discount,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
                <div class="form-group col-sm-3">
                    <label>Net</label>
                    {{Form::text('net', $sale->net,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
                <div class="form-group col-sm-3">
                    <label>Tax Group</label>
                    {{Form::select('tax_group_id', $tax_group_list, $sale->tax_group_id,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-3">
                    <label>Payment</label>
                    {{Form::text('payment', $sale->payment,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
                <div class="form-group col-sm-3">
                    <label>Balance</label>
                    {{Form::text('balance', $sale->balance,['readonly' => 'readonly', 'class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
                <div class="form-group col-sm-3">
                    <label>Description</label>
                    {{Form::textarea('description', $sale->description,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Payment Mode</label>
                    {{Form::select('payment_mode', $payment_modes, $sale->payment_mode,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
                <div class="form-group col-sm-6">
                    <label>Due Date</label>
                    {{Form::text('due_date', $sale->due_date,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <button type="submit" data-loading-text="Submitting..." id="submit" class="btn btn-lg btn-primary btn-block">
                Submit
            </button>
        </div>
    </div>
    
    {{Form::close()}}

    <div id="dummy_sale_detail" style="display: block;">
        @include($theme.'partials/sales/sale_details', ['sale_detail' => new App\SaleDetail, 'key' => 'XXXX'])
    </div>
@endsection

@section('footer_scripts')
    <script src="{{ asset($theme.'app/js/sales.js')}}"></script>
    <script type="text/javascript">
        var save_url = '{{route("saveSale")}}';
        var list_url = '{{route("listSales")}}';
        var sale_detail_count = {{count($sale_details)}}
        @if(count($sale_details) == 0)
        var add_sale_detail = true;
        @else
        var add_sale_detail = false;
        @endif
        var get_product_stock_details_url = '{{url("/get-product-stocks")}}';

    </script>
@endsection

