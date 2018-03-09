@extends($theme.'layouts.app')
@section('browser_title', $action.' Customer')


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
                {{$action}}
        </li>
    </ol>

    {{Form::open(['route' => 'saveCustomer','files' => true, 'id'=>'form'])}}
    {{Form::hidden('id',$customer->id)}}

    <div class="grid-form">
        <div class="grid-form1">
            <h2 id="forms-example" class="">{{$action}} Customer</h2>
            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Name*</label>    
                    {{Form::text('name',$customer->name,['maxlength'=>255, 'autocomplete' => 'off', 'class' => 'form-control' ])}}
                </div>
                <div class="form-group col-sm-6">
                    <label>Email</label>
                    {{Form::text('email', $customer->email,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Mobile Number1*</label>
                    {{Form::text('mobile_1', $customer->mobile_1,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
                <div class="form-group col-sm-6">
                    <label>Mobile Number2</label>
                    {{Form::text('mobile_2', $customer->mobile_2,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Address Line1</label>
                    {{Form::text('address_line_1', $customer->address_line_1,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
                <div class="form-group col-sm-6">
                    <label>Address Line2</label>
                    {{Form::text('address_line_2', $customer->address_line_2,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>State*</label>
                    {{Form::select('state_id',$states_list, $customer->state_id,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
                <div class="form-group col-sm-6">
                    <label>City*</label>
                    {{Form::select('city_id',$city_list, $customer->city_id,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Pincode</label>
                    {{Form::text('pincode', $customer->pincode,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Image</label>   
                    {{Form::file('image')}}
                </div>
                <div class="form-group col-sm-6"">
                    @if(!empty($customer->image))
                     <img src="{{ asset(userImage($customer->image)) }}">
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    <label>Comapny*</label>
                    {{Form::select('company_id',$company_list, $customer->company_id,['class' => 'form-control', 'autocomplete' => 'off' ])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6"">
                    <label>Active</label>
                    <label>{{Form::radio('is_active', 1,$customer->deleted_at)}} Yes</label>
                    <label>{{Form::radio('is_active', 0,!$customer->deleted_at)}} No</label>
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
    <script src="{{ asset($theme.'app/js/customers.js')}}"></script>
    <script type="text/javascript">
        var save_url = '{{route("saveCustomer")}}';
        var list_url = '{{route("listCustomers")}}';
    </script>
@endsection

