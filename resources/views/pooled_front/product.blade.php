@extends($theme.'layouts.app')
@section('browser_title', $product->name)
@section('header_css')
	<!-- flexslider -->
	<link rel="stylesheet" href="{{ asset($theme.'css/flexslider.css')}}" type="text/css" media="screen" />
@endsection
@section('content')

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l"></div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Home</a>
						<i>|</i>
					</li>
					<li>{{$product->name}}</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">{{$product->name}}
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="col-md-5 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="{{ asset(productImage($product->image1,$product->id)) }}">
								<div class="thumb-image">
									<img src="{{ asset(productImage($product->image1,$product->id)) }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="{{ asset(productImage($product->image2,$product->id)) }}">
								<div class="thumb-image">
									<img src="{{ asset(productImage($product->image2,$product->id)) }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="{{ asset(productImage($product->image3,$product->id)) }}">
								<div class="thumb-image">
									<img src="{{ asset(productImage($product->image3,$product->id)) }}" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
                    <div class="product-single-w3l">
					<p>
						<i class="fa fa-hand-o-right" aria-hidden="true"></i>
						<label>Special Feature</label> 
					</p>
					<ul>
						<?php echo $product->features ?>
                    </ul>
                        </div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3>{{$product->name}}</h3>
				<div class="rating1">
					<span class="starRating">
						@for($i=5;$i>=1;$i--)
						<input id="rating{{$i}}" type="radio" name="rating" value="{{$i}}" {{$product->rating == $i ? 'checked="checked"' : ''}}>
						<label for="rating{{$i}}">{{$i}}</label>
						@endfor
					</span>
				</div>
				<div class="single-infoagile">
					<h3 class="pdp-specs__title" id="specificationsTitle">Specifications</h3>
                    <ul class="pdp-specs__specifications" aria-labelledby="specificationsTitle">
                    	<?php echo $product->specifications ?>
                    </ul>
				</div>
				<div class="product-single-w3l">
					<p>
						<i class="fa fa-hand-o-right" aria-hidden="true"></i>
						<label>Advantages</label> 
					</p>
					<ul>
						<?php echo $product->advantages ?>
					</ul>
					<p>
						<i class="fa fa-refresh" aria-hidden="true"></i>All products are
						<label>non-returnable.</label>
					</p>
				</div>

				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<fieldset>
								<input type="button" data-id="{{$product->id}}" data-name="{{$product->name}}" value="Buy" class="button buy-btn" data-toggle="modal" data-target="#buy_modal" />
							</fieldset>
					</div>

				</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //Single Page -->
@endsection                            
@section('footer_scripts')

	<!-- imagezoom -->
	<script src="{{ asset($theme.'js/imagezoom.js')}}"></script>
	<!-- //imagezoom -->

	<!-- FlexSlider -->
	<script src="{{ asset($theme.'js/jquery.flexslider.js')}}"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->
@endsection