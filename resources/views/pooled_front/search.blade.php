@extends($theme.'layouts.app')
@section('browser_title', 'Search Result')

@section('content')

<div class="services-breadcrumb">
	<div class="agile_inner_breadcrumb">
		<div class="container">
			<ul class="w3_short">
				<li>
					<a href="index.html">Home</a>
					<i>|</i>
				</li>
				<li>Search Result</li>
			</ul>
		</div>
	</div>
</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<h3 class="tittle-w3l">Search Result for {{$query}}
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			
			<!-- product left -->
		  	<div class="side-bar col-md-3">				
				<div class="left-side">
                             
					<div class="bgf">Brands</div>
					<ul>
						@foreach($all_brands as $brand)
						<li>
							<input type="checkbox" class="checked filter_by_brands" value="{{$brand}}" autocomplete="off">
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
						<h3 class="heading-tittle">Search Result for {{$query}}</h3>

						@foreach($products as $product)
						<div class="col-md-4 product_item {{$product->brand->name}}">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<div class="card-figure">
										<img src="images/m1.jpg" alt="">
									</div>
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{route('product', ['product' => $product->id])}}" class="link-product-add-cart">
												Quick View
											</a>
										</div>
									</div>
									<span class="product-new-top">New</span>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="single.html">{{$product->name}}</a>
									</h4>
									
									<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
										<form action="#" method="post">
											<fieldset>
												<input type="submit" name="submit" value="Add to cart" class="button" />
											</fieldset>
										</form>
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