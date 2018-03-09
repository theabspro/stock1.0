@extends($theme.'layouts.app')
@section('browser_title', 'Categories')

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
                List
        </li>
    </ol>

    <div class="agile-grids">   
        <div class="agile-tables">
            <div class="w3l-table-info">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Categories</h2>
                    </div>
                    <div class="col-sm-offset-4 col-sm-2">
                        <a href="{{route('addCategory')}}" class="btn btn-primary btn-block pull-right">Add Category</a>
                    </div>
                </div>
                <table id="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Parent</th>
                            <th>Company</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{isset($category->parent) ? $category->parent->name : 'Main Category'}}</td>
                            <td>{{$category->company->name}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$category->image}}</td>
                            <td>
                                 <a href="{{route('editCategory', ['category' => $category->id])}}">
                                    <i class="fa fa-edit"></i>
                                </a>                               
                                 <a href="{{route('deleteCategory', ['category' => $category->id])}}">
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
