@extends($theme.'layouts.app')
@section('browser_title', 'Brands')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/')}}">
                Home
            </a>
            <i class="fa fa-angle-right"></i>
            <a href="{{route('listBrands')}}">
                Brands
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
                        <h2>Brands</h2>
                    </div>
                    <div class="col-sm-offset-4 col-sm-2">
                        <a href="{{route('addBrand')}}" class="btn btn-primary btn-block pull-right">Add Brand</a>
                    </div>
                </div>
                <table id="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Company</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($brands as $brand)
                        <tr>
                            <td>{{$brand->id}}</td>
                            <td>{{$brand->company->name}}</td>
                            <td>{{$brand->name}}</td>
                            <td>{{$brand->image}}</td>
                            <td>
                                 <a href="{{route('editBrand', ['brand' => $brand->id])}}">
                                    <i class="fa fa-edit"></i>
                                </a>                               
                                 <a href="{{route('deleteBrand', ['brand' => $brand->id])}}">
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
