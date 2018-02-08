@extends('theme1.layouts.app')
@section('browser_title', 'Add Category')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{url('/')}}">Home</a>
            <i class="fa fa-angle-right"></i>
            <a href="{{url('/category/add')}}">Categories</a>
            <i class="fa fa-angle-right"></i>
            <b>Add</b></li>
    </ol>

    <div class="validation-system">
        <div class="validation-form">
        <form>
            <div class="vali-form">
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Category Name</label>
              <input type="text" placeholder="Categoryname" required="">
            </div>
             <div class="clearfix"> </div>
              <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Parent</label>
            <select>
                <option value="">Power Tools</option>
                <option value="">Electronics</option>
                <option value="">Motors</option>
                <option value="">Mobile</option>
                
            </select>
            </div>
             <div class="clearfix"> </div>

            <div class="col-md-12 form-group">
              <div class="checkbox1">
                <label>
                 status
                  <input type="checkbox" ng-model="model.winner" required="" class="ng-invalid ng-invalid-required">
                 active
                </label>
              </div>
            </div>
             <div class="clearfix"> </div>
        </form>
    
    <!---->
     <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
 </div>

</div>

@endsection                            