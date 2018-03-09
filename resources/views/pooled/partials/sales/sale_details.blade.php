<hr/>
<div class="row">
    <div class="form-group col-sm-3">
        <label>Product</label>
        {{Form::select("sale_detail[$key][product_id]",$product_list, $sale_detail->product_id,['class' => 'form-control product_select', 'autocomplete' => 'off' ])}}
    </div>
    <div class="form-group col-sm-2">
        <label>SKU</label>
        {{Form::select("sale_detail[$key][stock_id]",[], $sale_detail->stock_id,['class' => 'form-control stock_select sku', 'autocomplete' => 'off' ])}}
    </div>
    <div class="form-group col-sm-2">
        <label>Stock</label>
        {{Form::text("sale_detail[$key][stock]", '',['readonly' => 'readonly', 'class' => 'form-control stock', 'autocomplete' => 'off' ])}}
    </div>
    <div class="form-group col-sm-2">
        <label>Quantity</label>
        {{Form::text("sale_detail[$key][qty]",$sale_detail->qty,['class' => 'form-control', 'autocomplete' => 'off' ])}}
    </div>
    <div class="form-group col-sm-3">
        <label>Price</label>
        {{Form::text("sale_detail[$key][price]",$sale_detail->price,['readonly' => 'readonly', 'class' => 'form-control price', 'autocomplete' => 'off' ])}}
    </div>
    <div class="form-group col-sm-3">
        <label>Total</label>
        {{Form::text("sale_detail[$key][total]",$sale_detail->total,['readonly' => 'readonly', 'class' => 'form-control', 'autocomplete' => 'off' ])}}
    </div>
    <div class="form-group col-sm-1">
        <a href="javascript:;">X</a>
    </div>
</div>
