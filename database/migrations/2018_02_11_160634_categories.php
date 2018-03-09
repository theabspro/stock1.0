<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('parent_id');
            $table->unsignedInteger('company_id');
            $table->string('name');
            $table->string('image');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->unsignedInteger('deleted_by');
            $table->timestamps();
            $table->softdeletes();
        });

        Schema::create('products',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('company_id');
            $table->string('name');
            $table->string('hsn_code');
            $table->string('sku');
            $table->decimal('price',12,2);
            $table->string('image');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->unsignedInteger('deleted_by');
            $table->timestamps();
            $table->softdeletes();
        });

        Schema::create('customers',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('company_id');
            $table->string('name');
            $table->string('email');
            $table->string('mobile_1',10);
            $table->string('mobile_2',10);
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('state_id');
            $table->unsignedInteger('country_id');
            $table->string('pincode',6);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->unsignedInteger('deleted_by');
            $table->timestamps();
            $table->softdeletes();
        });

        Schema::create('brands',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('company_id');
            $table->string('name');
            $table->string('image');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->unsignedInteger('deleted_by');
            $table->timestamps();
            $table->softdeletes();
        });

        Schema::create('orders',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('company_id');
            $table->date('date');
            $table->decimal('sub_total',12,2);
            $table->decimal('discount',12,2);
            $table->decimal('total',12,2);
            $table->decimal('paid',12,2);
            $table->unsignedTinyInteger('payment_mode_id');
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->unsignedInteger('deleted_by');
            $table->timestamps();
            $table->softdeletes();
        });

        Schema::create('order_details',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('product_id');
            $table->unsignedMediumInteger('quantity');
            $table->decimal('total',12,2);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->unsignedInteger('deleted_by');
            $table->timestamps();
            $table->softdeletes();
        });

        Schema::create('taxes',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('company_id');
            $table->string('name');
            $table->decimal('rate',5,2);
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by');
            $table->unsignedInteger('deleted_by');
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
