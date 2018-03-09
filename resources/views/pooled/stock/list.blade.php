@extends($theme.'layouts.app')
@section('browser_title', 'Stock')

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
                List
        </li>
    </ol>

    <div class="agile-grids">   
        <div class="agile-tables">
            <div class="w3l-table-info">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Stock</h2>
                    </div>
                    <div class="col-sm-offset-4 col-sm-2">
                        <a href="{{route('addStock')}}" class="btn btn-primary btn-block pull-right">Add Stock</a>
                    </div>
                </div>
                <table id="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Company</th>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>QTY</th>
                            <th>SKU</th>
                            <th>Price</th>
                            <th>Create By</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stocks as $stock)
                        <tr>
                            <td>{{$stock->id}}</td>
                            <td>{{$stock->company->name}}</td>
                            <td>{{$stock->product->name}}</td>
                            <td>{{$stock->product->category->name}}</td>
                            <td>{{$stock->product->brand->name}}</td>
                            <td>{{$stock->qty}}</td>
                            <td>{{$stock->sku}}</td>
                            <td>{{number_format($stock->price,2)}}</td>
                            <td>{{$stock->user->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
              </table>
            </div>
        </div>
    </div>
        
@endsection
