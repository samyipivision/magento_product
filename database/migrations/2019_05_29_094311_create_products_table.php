<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('store_code');
            $table->string('product_type')->nullable();
            $table->string('sku');
            $table->string('model_number')->nullable();
            $table->string('name')->nullable();
            $table->string('color_code')->nullable();
            $table->string('brand')->nullable();
            $table->string('supplier')->nullable();
            $table->string('gender')->nullable();
            $table->string('age_group')->nullable();
            $table->string('eyewear_type')->nullable();
            $table->string('frame_type')->nullable();
            $table->string('color')->nullable();
            $table->text('short_description')->nullable();
            $table->string('style')->nullable();
            $table->string('shape')->nullable();
            $table->string('front_material')->nullable();
            $table->string('temple_material')->nullable();
            $table->string('rrp')->nullable();
            $table->string('price')->nullable();
            $table->string('front_color')->nullable();
            $table->string('temple_color')->nullable();
            $table->unsignedInteger('mirror')->nullable();
            $table->unsignedInteger('gradient')->nullable();
            $table->unsignedInteger('polarized')->nullable();
            $table->unsignedInteger('customized_plano')->nullable();
            $table->unsignedInteger('prescription_available')->nullable();
            $table->unsignedInteger('nose_pads_adjustable')->nullable();
            $table->string('lens_width')->nullable();
            $table->string('bridge_width')->nullable();
            $table->string('temple_length')->nullable();
            $table->string('lens_height')->nullable();
            $table->string('fitting_height')->nullable();
            $table->string('frame_width')->nullable();
            $table->string('effective_diameter')->nullable();
            $table->string('surface_curvature')->nullable();
            $table->string('trylive_id_3d')->nullable();;
            $table->unsignedInteger('active')->nullable();
            $table->unsignedInteger('stock')->nullable();
            $table->string('frame_material')->nullable();
            $table->string('gtin')->nullable();
            $table->string('cost')->nullable();
            $table->bigInteger('promotion_id')->nullable();
            $table->string('promotion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
