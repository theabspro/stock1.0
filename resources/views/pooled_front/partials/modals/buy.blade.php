	<!-- signup Model -->
	<div class="modal fade" id="buy_modal" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Send Enquiry</h3>
						{{Form::open(['route' => 'create_order'])}}
							<div class="styled-input agile-styled-input-top">
								<label id="cart_product_name">Bosch Drilling</label>
								<input type="hidden" value="NEW" name="status">
								<input type="hidden" value="" name="product_id" id="product_id">
							</div>

							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="Name" name="customer_name" required="" maxlength="255">
							</div>
							<div class="styled-input">
								<input type="text" placeholder="Mobile Number" name="mobile" required="" maxlength="10">
							</div>
							<div class="styled-input">
								<input type="email" placeholder="E-mail" name="email">
							</div>
							<input type="submit" value="Send">
						{{Form::close()}}
					</div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
    