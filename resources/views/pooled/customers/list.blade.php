@extends($theme.'layouts.app')
@section('browser_title', 'Customers')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/')}}">
                Home
            </a>
            <i class="fa fa-angle-right"></i>
            <a href="{{route('listCustomers')}}">
                Customers
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
                        <h2>Customers</h2>
                    </div>
                    <div class="col-sm-offset-4 col-sm-2">
                        <a href="{{route('addCustomer')}}" class="btn btn-primary btn-block pull-right">Add Customer</a>
                    </div>
                </div>
                <table id="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Company</th>
                            <th>Name</th>
                            <th>Mobile Number1</th>
                            <th>Mobile Number2</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                        <tr>
                            <td>{{$customer->id}}</td>
                            <td>{{$customer->company->name}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->mobile_1}}</td>
                            <td>{{$customer->mobile_2}}</td>
                            <td>{{$customer->city->name}}</td>
                            <td>{{$customer->state->name}}</td>
                            <td>
                                 <a href="{{route('editCustomer', ['customer' => $customer->id])}}">
                                    <i class="fa fa-edit"></i>
                                </a>                               
                                 <a href="{{route('deleteCustomer', ['customer' => $customer->id])}}">
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
