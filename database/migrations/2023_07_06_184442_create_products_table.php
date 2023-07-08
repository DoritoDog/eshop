<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solar_panels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->string('image_url');
            $table->string('description');
            $table->string('pdf_path');
            $table->string('manufacturer_id');
            $table->integer('power');
            $table->enum('module_cell_type', ['Monofacial Framed', 'Bifacial Framed']);
            $table->integer('cells_quantity');
            $table->enum('module_backsheet_color', ['White Tedlar', 'Black Tedlar', 'Glass (clear)', 'Glass (milk)']);
            $table->enum('module_frame_color', ['Black', 'Silver']);
            $table->enum('wafer_size', ['M6 (166mm)', 'M10 (182mm)', 'G12R (210x182mm)', 'G12 (210mm)', 'M10 (182 x 186 mm)']);
            $table->integer('height');
            $table->integer('length');
            $table->integer('width');
            $table->integer('performance_warranty');
            $table->integer('product_warranty');
            $table->timestamps();
        });

        Schema::create('inverters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->string('image_url');
            $table->string('description');
            $table->string('pdf_path');
            $table->string('manufacturer_id');
            $table->integer('power');
            $table->enum('phase', ['1- & 3-phase', '1-phase', '3-phase']);
            $table->enum('type', ['Battery', 'Hybrid', 'Microinverter', 'On grid']);
            $table->enum('compatible_inverter', ['Enphase', 'Fronius', 'Goodwe', 'Huawei', 'Kostal', 'SMA', 'Solar Edge', 'Victron']);
            $table->timestamps();
        });

        Schema::create('batteries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->string('image_url');
            $table->string('description');
            $table->string('pdf_path');
            $table->string('manufacturer_id');
            $table->integer('power');
            $table->enum('cell_type', ['LFP (Lithium)', 'NMC (Lithium)']);
            $table->enum('type', ['DC High Voltage', 'DC Low Voltage', 'AC (Inverter included)']);
            $table->enum('capacity_extension', ['Modular', 'Parallel']);
            $table->integer('total_nominal_energy');
            $table->integer('usable_energy');
            $table->enum('storage_sub_category', ['Batteries', 'Battery Management Unit', 'Battery Accessories']);
            $table->enum('activation', ['RFID', 'App', 'RFID & App', 'Plug & Charge']);
            $table->timestamps();
        });

        Schema::create('emobility', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->string('image_url');
            $table->string('description');
            $table->string('manufacturer_id');
            $table->enum('emobility_sub_category', ['Wallboxes', 'Charging cables', 'Pedestal', 'Other Accessories']);
            $table->enum('emobility_cable_type', ['Type 2 Cable', 'Type 2 Socket', 'Type 2 Twin Socket']);
            $table->integer('maximum_power');
        });

        Schema::create('accessories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->string('image_url');
            $table->string('description');
            $table->string('manufacturer_id');
            $table->enum('color', ['silver', 'black']);
            $table->enum('type', [' Connectors/Tools', 'Cables', 'DC Protection', 'Cable extensions/sets']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solar_panels');
        Schema::dropIfExists('inverters');
        Schema::dropIfExists('batteries');
        Schema::dropIfExists('emobility');
        Schema::dropIfExists('accessories');
    }
}
