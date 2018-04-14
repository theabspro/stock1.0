@extends($theme.'layouts.app')
@section('browser_title', $category->name)

@section('content')

<div class="services-breadcrumb">
	<div class="agile_inner_breadcrumb">
		<div class="container">
			<ul class="w3_short">
				<li>
					<a href="index.html">Home</a>
					<i>|</i>
				</li>
				<li>{{$category->name}}</li>
			</ul>
		</div>
	</div>
</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<h3 class="tittle-w3l">{{$category->name}}
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			
			<!-- product left -->
		  	<div class="side-bar col-md-3">				
				<div class="left-side">
					@if(count($category->sub_categories) >0 )
					<div class="bgf">{{$category->name}}</div>
					<ul>
							@foreach($category->sub_categories as $sub_category)
	    	                	<li>
	    	                		<a href="{{route('category', ['category' => $sub_category->id])}}">
	    	                			{{$sub_category->name}}
	    	                		</a>
	    	                	</li>
	    	                @endforeach
                    </ul>
    	            @endif
                             
					<div class="bgf">Brands</div>
					<ul>
						@foreach($all_brands as $brand)
						<li>
							<input type="checkbox" class="checked filter_by_brands" value="{{$brand}}" autocomplete="off" checked="checked">
							<span class="span">{{$brand}}</span>
						</li>
						@endforeach
					</ul>
			  	</div>
			</div>

			<div class="agileinfo-ads-display col-md-9">
				<div class="wrapper">
					<!-- first section (nuts) -->
				  	<div class="product-sec1">

						@foreach($products as $product)
						<div class="col-md-4 product_item {{$product->brand->name}}">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<div class="card-figure">
										<img src="{{ asset(productImage($product->image1,$product->id)) }}" alt="{{$product->name}}" class="img-responsive">
									</div>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{route('product', ['product' => $product->id])}}" class="link-product-add-cart">
												Quick View
											</a>
										</div>
									</div>
									@if($product->is_new == 'YES')
									<span class="product-new-top">New</span>
									@endif

								</div>
								<div class="item-info-product ">
									<h4>
										<a href="{{route('product', ['product' => $product->id])}}">{{$product->name}}</a>
									</h4>
									
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
											<fieldset>
												<input type="button" data-id="{{$product->id}}" data-name="{{$product->name}}" value="Buy" class="button buy-btn" data-toggle="modal" data-target="#buy_modal" />
											</fieldset>
									</div>
								</div>
							</div>
						</div>
						@endforeach

						<div class="clearfix"></div>
					</div>				
				</div>
			</div><!-- col-md-9 -->
		</div>
	</div>
						
@endsection                            
