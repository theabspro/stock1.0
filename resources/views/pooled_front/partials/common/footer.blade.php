<div class="footer-top" style="padding-bottom:30px; padding-top:20px;">
	<div class="container-fluid">

		<div class="col-sm-5 address-right">
			<div class="col-xs-6 footer-grids">
				<h4>Shop by Categories</h4>
				<ul>
					@foreach($main_categories as $category)
					<li>
						<a href="{{route('category', ['category' => $category->id])}}">{{$category->name}}</a>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="col-xs-6 footer-grids">
                <h4>Shop by Brands</h4>
				<ul>
					@foreach($brands as $brand)
					<li>
						<a href="{{route('brand_products', ['brand' => $brand->id])}}">{{$brand->name}}</a>
					</li>
					@endforeach
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
      
		<div class="col-sm-5 address-right">
			<div class="col-xs-6 footer-grids">
				<h4>Quick Links</h4>
				<ul>
					<li>
						<a href="{{route('page',['page' => 'about'])}}">About Us</a>
					</li>
					<li>
						<a href="{{route('page',['page' => 'contact'])}}">Contact Us</a>
					</li>										
					<li>
						<a href="{{route('page',['page' => 'terms'])}}">Terms of use</a>
					</li>
					<li>
						<a href="{{route('page',['page' => 'privacy_policy'])}}">Privacy Policy</a>
					</li>
				</ul>
			</div>
                      
			<div class="col-xs-6 footer-grids">
				<h4>Get in Touch</h4>
				<ul>
					<li>
						<i class="fa fa-map-marker"></i> Dr Nanjappa Road</li>
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
              
		<!-- social icons -->
		<div class="col-sm-2 footer-grids  w3l-socialmk">
			<h4>Follow Us on</h4>
            <br/>
       
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
	
		</div>

		<div class="clearfix"></div>
	</div>

</div>
</div>

    </div>

	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right">
		<div class="container">
			<p>© 2018 Craftsman Corporation All rights reserved | Design by
				<a href="http://phoinixsolution.com">Phoinix Solution.</a>
			</p>
		</div>
	</div>
    
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="{{ asset($theme.'js/jquery-2.1.4.min.js')}}"></script>

	<!-- price range (top products) -->
	<script src="{{ asset($theme.'js/jquery-ui.js')}}"></script>

	<!-- smoothscroll -->
	<script src="{{ asset($theme.'js/SmoothScroll.min.js')}}"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="{{ asset($theme.'js/move-top.js')}}"></script>
	<script src="{{ asset($theme.'js/easing.js')}}"></script>

    <script src="{{ asset($theme.'plugins/jquery-validation/dist/jquery.validate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset($theme.'plugins/jquery-validation/dist/additional-methods.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset($theme.'plugins/noty/js/noty.min.js') }}" type="text/javascript"></script>

	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			$('.filter_by_brands').click(function(){
				var selected_brands = [];
				$('.product_item').show();
				$('.filter_by_brands:not(:checked)').each(function(){
					$('.'+$(this).val()).hide();;
				});
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="{{ asset($theme.'js/bootstrap.js')}}"></script>
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="{{ asset($theme.'js/cbpHorizontalMenu.js')}}"></script>
	<script>
			$(function() {
				cbpHorizontalMenu.init();
			});
		</script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

	<!-- cart-js -->
	<script>
		$(document).ready(function(){
			$('.buy-btn').click(function(){
				$('#buy_modal #product_id').val($(this).data('id'));
				$('#buy_modal #cart_product_name').html($(this).data('name'));
			});
		});
	</script>
	<!-- //cart-js -->

</body>

</html>