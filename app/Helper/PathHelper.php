<?php
    function productImagePath() {
		return 'products/';
	}
	function productImage($image,$product_id) {
		return 'app/products/'.$product_id.'/'.$image;
	}
    function brandImagePath() {
		return 'brands/';
	}
	function brandImage($image) {
		return 'app/brands/'.$image;
	}
