@extends($theme.'layouts.app')
@section('browser_title', 'Products')

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
                List
        </li>
    </ol>

    <div class="agile-grids">   
        <div class="agile-tables">
            <div class="w3l-table-info">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Products</h2>
                    </div>
                    <div class="col-sm-offset-4 col-sm-2">
                        <a href="{{route('addProduct')}}" class="btn btn-primary btn-block pull-right">Add Product</a>
                    </div>
                </div>
                <table id="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Company</th>
                            <th>Category</th>
                            <th>Name</th>
                            <th>HSN Code</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->company->name}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->hsn_code}}</td>
                            <td>{{$product->image}}</td>
                            <td>
                                 <a href="{{route('editProduct', ['product' => $product->id])}}">
                                    <i class="fa fa-edit"></i>
                                </a>                               
                                 <a href="{{route('deleteProduct', ['product' => $product->id])}}">
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
