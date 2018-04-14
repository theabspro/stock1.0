@extends($theme.'layouts.app')
@section('browser_title', 'Brands')

@section('content')

<div class="services-breadcrumb">
	<div class="agile_inner_breadcrumb">
		<div class="container">
			<ul class="w3_short">
				<li>
					<a href="index.html">Home</a>
					<i>|</i>
				</li>
				<li>Brands</li>
			</ul>
		</div>
	</div>
</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid">
		<div class="container">
			<h3 class="tittle-w3l">Brands
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			
			<div class="agileinfo-ads-display col-md-12">
				<div class="wrapper">
					<!-- first section (nuts) -->
				  	<div class="product-sec1">

						@foreach($brands as $brand)
						<div class="col-md-3 product_item">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<div class="card-figure">
										<a href="{{route('brand_products', ['brand' => $brand->id])}}" class="link-product-add-cart">
											<img src="{{ asset(brandImage($brand->image)) }}" alt="{{$brand->name}}" class="img-responsive">
										</a>
									</div>
								</div>
								<div class="item-info-product ">
									<h4>
										<a href="{{route('brand_products', ['brand' => $brand->id])}}">{{$brand->name}}</a>
									</h4>									
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
