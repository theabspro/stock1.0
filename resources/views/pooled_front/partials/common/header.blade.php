	<!-- top-header -->
	<div class="header-most-top">
		<p>CCMART Offer Zone Top Deals &amp; Discounts</p>
	</div>

	<!-- header-bot-->
	<div class="header-bot">
		<div class="header-bot_inner_wthreeinfo_header_mid">
			<!-- header-bot-->
			<div class="col-md-4 logo_agile">
				<h1>
					<a href="{{url('/')}}">
						<img src="{{ asset($theme.'images/logo2.png')}}" alt=" ">
					</a>
				</h1>
			</div>
			<!-- header-bot -->
			<div class="col-md-8 header">
				<!-- header lists -->
				<ul>
					<li>
						<a class="play-icon popup-with-zoom-anim" href="{{route('page',['page' => 'contact'])}}#map-locator" >
							<span class="fa fa-map-marker" aria-hidden="true"></span> Shop Locator</a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-truck" aria-hidden="true"></span>Track Order</a>
					</li>
					<li>
						<span class="fa fa-phone" aria-hidden="true"></span> 001 234 5678
					</li>
					<li style="border-right: none;">
						<span class="fa fa-envelope" aria-hidden="true"></span> contact@ccmart.in
					</li>
					<!--li>
						<a href="#" data-toggle="modal" data-target="#myModal1">
							<span class="fa fa-unlock-alt" aria-hidden="true"></span> Sign In </a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#myModal2">
							<span class="fa fa-pencil-square-o" aria-hidden="true"></span> Sign Up </a>
					</li-->
				</ul>
				<!-- //header lists -->
				<!-- search -->
				<div class="agileits_search">
					{{Form::open(['route' => 'search', 'method' => 'GET'])}}
						<input name="q" type="search" placeholder="How can we help you today?" required="required" value="{{isset($query) ? $query : ''}}">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<span class="fa fa-search" aria-hidden="true"> </span>
						</button>
					</form>
				</div>
				<!-- //search -->
				<!-- cart details -->
				<div class="top_nav_right" style="display: none;">
					<div class="wthreecartaits wthreecartaits2 cart cart box_1">
						<form action="#" method="post" class="last">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="w3view-cart" type="submit" name="submit" value="">
								<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
							</button>
						</form>
					</div>
				</div>
				<!-- //cart details -->
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
   
    @include($theme.'partials.modals.sign_in')
    @include($theme.'partials.modals.sign_up')
    @include($theme.'partials.modals.buy')
	<div class="clearfix"></div>
</div>
       
			<div class="main">
				<nav id="cbp-hrmenu" class="cbp-hrmenu">
					<ul>
                    	<li>
							<a href="" data-href="{{route('page',['page' => 'about'])}}">About Us</a>
						</li>
						
						@foreach($main_categories as $category)
						<li>
							<a href="{{route('category', ['category' => $category->id])}}" data-href="">
								{{$category->name}}
							</a>
							<div class="cbp-hrsub">
								<div class="cbp-hrsub-inner"> 
									<div>
										@foreach($category->sub_categories as $sub_category)
										<h4>
											<a href="{{route('category', ['category' => $sub_category->id])}}">
												{{$sub_category->name}}
											</a>
										</h4>
										<ul>
											@foreach($sub_category->sub_categories as $final_category)
					                        	<li>
					                        		<a href="{{route('category', ['category' => $final_category->id])}}">		{{$final_category->name}}
					                        		</a>
					                        	</li>
					                        @endforeach
                        					<li class="se">
                        						<a href="{{route('category', ['category' => $category->id])}}">
                        							See all
                        						</a>
                        					</li>
                        				</ul>
                        				@endforeach
									</div>							
								</div><!-- /cbp-hrsub-inner -->
							</div><!-- /cbp-hrsub -->
						</li>
						@endforeach

						<li>
							<a href="" data-href="{{route('brands')}}">Brands</a>
						
						</li>
                        <li>
							<a href="" data-href="{{route('category', ['category' => 11])}}">Accessories</a>
						</li>
                        <li><a href="" data-href="{{route('page',['page' => 'contact'])}}">Contact Us</a>
                           
						
						</li>
					</ul>
				</nav>