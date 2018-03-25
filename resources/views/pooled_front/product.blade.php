@extends($theme.'layouts.app')
@section('browser_title', $product->name)

@section('content')

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
							<li data-thumb="images/si.jpg">
								<div class="thumb-image">
									<img src="images/si.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="images/si2.jpg">
								<div class="thumb-image">
									<img src="images/si2.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							<li data-thumb="images/si3.jpg">
								<div class="thumb-image">
									<img src="images/si3.jpg" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-7 single-right-left simpleCart_shelfItem">
				<h3>{{$product->name}}</h3>
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked="">
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<label for="rating1">1</label>
					</span>
						<input id="rating1" type="radio" name="rating" value="1">
				</div>
				<p>
					<span class="item_price">$950.00</span>
					<del>$1300.00</del>
					<label>Free delivery</label>
				</p>
				<div class="single-infoagile">
					<ul>
						<li>
							Cash on Delivery Eligible.
						</li>
						<li>
							Shipping Speed to Delivery.
						</li>
						<li>
							Sold and fulfilled by Supple Tek (3.6 out of 5 | 8 ratings).
						</li>
						<li>
							1 offer from
							<span class="item_price">$950.00</span>
						</li>
					</ul>
				</div>
				<div class="product-single-w3l">
					<p>
						<i class="fa fa-hand-o-right" aria-hidden="true"></i>
						<label>Advantages
    
</label> </p>
					<ul>
						<li>
						The powerful and precise tool with 2 gears
    
						</li>
						<li>
							Powerful motor for drilling up to 13 mm diameter in steel
   
						</li>
						<li>
							 2-speed gearbox: for demanding work Metal keyless chuck for high precision and long lifetime
   
  
						</li>
						<li>
							Contains only the best and purest grade of basmati rice grain of Export quality.
                            
                        
 
                            
                            
                            
						</li>
                        
                        <li>  Drill chuck secured by centring screw against coming loose in reverse rotation
    Synchronised 2-speed draw key transmission; switchover possible during operation</li>
   
     <li> Small width across corners of 29 mm</li>
   <li> Spindle collar diameter of 43 mm
    (European standard) - can be used in drill stands</li>
   <li> Fully ball and roller bearing-mounted for long lifetime and precise working
    Forward/reverse rotation</li>
   <li> Speed preselection with setting wheel</li>
   
   
   
   
					</ul>
					<p>
						<i class="fa fa-refresh" aria-hidden="true"></i>All products are
						<label>non-returnable.</label>
					</p>
				</div>
				<div class="occasion-cart">
					<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
						<form action="#" method="post">
							<fieldset>
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" />
								<input type="hidden" name="business" value=" " />
								<input type="hidden" name="item_name" value="Zeeba Premium Basmati Rice - 5 KG" />
								<input type="hidden" name="amount" value="950.00" />
								<input type="hidden" name="discount_amount" value="1.00" />
								<input type="hidden" name="currency_code" value="USD" />
								<input type="hidden" name="return" value=" " />
								<input type="hidden" name="cancel_return" value=" " />
								<input type="submit" name="submit" value="Add to cart" class="button" />
							</fieldset>
						</form>
					</div>

				</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<!-- newsletter -->
	<div class="footer-top">
		<div class="container-fluid">
			<div class="col-xs-8 agile-leftmk">
				<h2>Get your Products delivered from local stores</h2>
				<p>Free Delivery on your first order!</p>
				<form action="#" method="post">
					<input type="email" placeholder="E-mail" name="email" required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="newsform-w3l">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
			</div>
			<div class="col-xs-4 w3l-rightmk">
				<img src="images/tab3.png" alt=" ">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- footer -->
	<footer>
		<div class="container">
			<!-- footer first section -->
			<p class="footer-main">
				
				 We at <span>"Craftsman Corporation"</span> We at Craftsman Corporation believe that the principle of mutual benefit between corporations, customers, employees and communities is the most effective route to profitable and sustainable growth. One of the leading wholesalers and importers of Power Tools in Coimbatore</p>
			<!-- //footer first section -->
			<!-- footer second section -->
			<div class="w3l-grids-footer">
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Track Your Order</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-refresh" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Free & Easy Returns</h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-xs-4 offer-footer">
					<div class="col-xs-4 icon-fot">
						<span class="fa fa-times" aria-hidden="true"></span>
					</div>
					<div class="col-xs-8 text-form-footer">
						<h3>Online cancellation </h3>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- //footer second section -->
			<!-- footer third section -->
			<div class="footer-info w3-agileits-info">
				<!-- footer categories -->
				<!--<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Categories</h3>
						<ul>
							<li>
								<a href="#">Grocery</a>
							</li>
							<li>
								<a href="#">Fruits</a>
							</li>
							<li>
								<a href="#">Soft Drinks</a>
							</li>
							<li>
								<a href="product2.html">Dishwashers</a>
							</li>
							<li>
								<a href="#">Biscuits & Cookies</a>
							</li>
							<li>
								<a href="product2.html">Baby Diapers</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 footer-grids agile-secomk">
						<ul>
							<li>
								<a href="#">Snacks & Beverages</a>
							</li>
							<li>
								<a href="#">Bread & Bakery</a>
							</li>
							<li>
								<a href="#">Sweets</a>
							</li>
							<li>
								<a href="#">Chocolates & Biscuits</a>
							</li>
							<li>
								<a href="product2.html">Personal Care</a>
							</li>
							<li>
								<a href="#">Dried Fruits & Nuts</a>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- //footer categories -->
				<!-- quick links -->
				<!--<div class="col-sm-5 address-right">
					<div class="col-xs-6 footer-grids">
						<h3>Quick Links</h3>
						<ul>
							<li>
								<a href="about.html">About Us</a>
							</li>
							<li>
								<a href="contact.html">Contact Us</a>
							</li>
							<li>
								<a href="help.html">Help</a>
							</li>
							<li>
								<a href="faqs.html">Faqs</a>
							</li>
							<li>
								<a href="terms.html">Terms of use</a>
							</li>
							<li>
								<a href="privacy.html">Privacy Policy</a>
							</li>
						</ul>
					</div>
					<div class="col-xs-6 footer-grids">
						<h3>Get in Touch</h3>
						<ul>
							<li>
								<i class="fa fa-map-marker"></i> 123 Sebastian, USA.</li>
							<li>
								<i class="fa fa-mobile"></i> 333 222 3333 </li>
							<li>
								<i class="fa fa-phone"></i> +222 11 4444 </li>
							<li>
								<i class="fa fa-envelope-o"></i>
								<a href="mailto:example@mail.com"> mail@example.com</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- //quick links -->
				<!-- social icons -->
				<!--<div class="col-sm-2 footer-grids  w3l-socialmk">
					<h3>Follow Us on</h3>
					<div class="social">
						<ul>
							<li>
								<a class="icon fb" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="icon tw" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="icon gp" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="agileits_app-devices">
						<h5>Download the App</h5>
						<a href="#">
							<img src="images/1.png" alt="">
						</a>
						<a href="#">
							<img src="images/2.png" alt="">
						</a>
						<div class="clearfix"> </div>
					</div>
				</div>
				<!-- //social icons -->
				<div class="clearfix"></div>
			</div>
			<!-- //footer third section -->
			<!-- footer fourth section (text) -->
			<div class="agile-sometext">
				<div class="sub-some">
					<h5>Online CCMART Shopping</h5>
					<p>Order online. All your favourite products from the low price online Power Tools supermarket for Industrial, Commercial Products on home delivery in Coimbatore and, other cities in India. Lowest prices guaranteed on All Products.</p>
				</div>
				<div class="sub-some">
					<h5>Shop online with the best deals & offers</h5>
					<p>Now Get Upto 40% Off On Everyday Essential Products Shown On The Offer Page. The range includes Industrial, Commercial,
						Residential, Need Products. Discount May Vary From Product To Product.</p>
				</div>
				<!-- brands -->
				<div class="sub-some">
					<h5>Popular Brands</h5>
					<ul>
						<li>
							<a href="#">Bosch</a>
						</li>
						<li>
							<a href="#">Hitachi</a>
						</li>
						<li>
							<a href="#">Dewalt</a>
						</li>
						<li>
							<a href="#">Revo</a>
						</li>
						<li>
							<a href="#">Aken</a>
						</li>
						<li>
							<a href="#">Makita</a>
						</li>
						<li>
							<a href="#">AEG</a>
						</li>
						<li>
							<a href="#">Apachi</a>
						</li>
						<li>
							<a href="product2.html">Miller</a>
						</li>
						<li>
							<a href="product2.html">Laser</a>
						</li>
						<li>
							<a href="product2.html">Dettol</a>
						</li>
						<li>
							<a href="product2.html">Black & Deccor</a>
						</li>
						<li>
							<a href="product2.html">Ken</a>
						</li>
						<li>
							<a href="#">Kennex</a>
						</li>
						<li>
							<a href="product2.html">Kent Professional</a>
						</li>
						<li>
							<a href="product2.html">Makita</a>
						</li>
						<li>
							<a href="#">Maktech</a>
						</li>
						<li>
							<a href="#">3M</a>
						</li>
						<li>
							<a href="#">Bullet</a>
						</li>
						<li>
							<a href="#">Skil</a>
						</li>
						<li>
							<a href="#">Yuri</a>
						</li>
						<li>
							<a href="#">Oreo</a>
						</li>
						<li>
							<a href="#">Clif</a>
						</li>
						<li>
							<a href="#">Black Hawk</a>
						</li>
						<li>
							<a href="#">Titan</a>
						</li>
						<li>
							<a href="product2.html">Polygon</a>
						</li>
						<li>
							<a href="product2.html">Penta</a>
						</li>
						<li>
							<a href="#">Orbit</a>
						</li>
						<li>
							<a href="product2.html">Peak</a>
						</li>
						<li>
							<a href="product2.html">Pilot</a>
						</li>
						<li>
							<a href="#">Norton</a>
						</li>
						<li>
							<a href="#">Green Works</a>
						</li>
						<li>
							<a href="#">Addison</a>
						</li>
						<li>
							<a href="product2.html"> Orion</a>
						</li>
					</ul>
				</div>
				<!-- //brands -->
				<!-- payment -->
				<div class="sub-some child-momu">
					<h5>Payment Method</h5>
					<ul>
						<li>
							<img src="images/pay2.png" alt="">
						</li>
						<li>
							<img src="images/pay5.png" alt="">
						</li>
						<li>
							<img src="images/pay1.png" alt="">
						</li>
						<li>
							<img src="images/pay4.png" alt="">
						</li>
						<li>
							<img src="images/pay6.png" alt="">
						</li>
						<li>
							<img src="images/pay3.png" alt="">
						</li>
						<li>
							<img src="images/pay7.png" alt="">
						</li>
						<li>
							<img src="images/pay8.png" alt="">
						</li>
						<li>
							<img src="images/pay9.png" alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
			<!-- //footer fourth section (text) -->
		</div>
	</footer>
@endsection                            
