@extends($theme.'layouts.app')
@section('browser_title', 'About')

@section('content')

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
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
					<li>About Us</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- about page -->
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Welcome to our Site
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="w3l-welcome-info">
				<div class="col-sm-6 col-xs-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/about.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="col-sm-6 col-xs-6 welcome-grids">
					<div class="welcome-img">
						<img src="images/about2.jpg" class="img-responsive zoom-img" alt="">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3l-welcome-text">
				<p>We at Craftsman Corporation believe that the principle of mutual benefit between corporations, customers, employees and communities is the most effective route to profitable and sustainable growth. One of the leading wholesalers and importers of Power Tools in Coimbatore, Craftsman Corporation is more than a decade old with a strong customer focused approach. Our continuous effort to strive for customer satisfaction has made us a preferred vendor for a number of major industries in Sothern India. With over 2000 products in power tools itself, ranging from major international brands to their Indian counterparts, we provide tools, accessories and spares of all major power tools brands. A one stop shop for your tools, accessories as well as service of those tools, we do not limit you to any particular brand but believe in offering the right tool for the right job. We have opened up a second Unit at Park Street, Coimbatore, with a complete range of power tools, hand tools and machinery items, dedicated wholly towards our wholesale customers and industrial clients. Along with our existing office at Dr. Nanjappa Road, we are now twice as strong to handle clients from various sections of the supply chain. We strive towards our vision of strong customer focus and hope to serve our clients with double the enthusiasm and effectiveness.</p>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- video -->
	<div class="about">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Our Video
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="about-tp">
				<div class="col-md-8 about-agileits-w3layouts-left">
					<iframe src="https://www.youtube.com/watch?v=SrPmvP9Zulg"></iframe>
				</div>
				<div class="col-md-4 about-agileits-w3layouts-right">
					<div class="img-video-about">
						<img src="images/videoimg2.png" alt="">
					</div>
					<h4>Grocery Shoppy</h4>
					<p>No.1 Leading E-commerce marketplace with over 70 million Products</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //video-->
	<!-- //about page -->
	@include($theme.'partials.cms_footer')

@endsection                            
