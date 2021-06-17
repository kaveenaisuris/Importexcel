<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportExcleModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('importexcle3_models', function (Blueprint $table) {
            $table->id();
            $table->integer('Stock #')->nullable();
            $table->integer('St')->nullable();
            $table->string('Loc')->nullable();
            $table->String('Man Order')->nullable();
            $table->string('Slp')->nullable();
            $table -> string('Serial')->nullable();
            $table -> string('Make')->nullable();
            $table -> string('Model Name')->nullable();
            $table -> string('Line')->nullable();
            $table -> string('Model Code')->nullable();
            $table -> string('Body')->nullable();
            $table -> string('Colour')->nullable();
            $table -> char('Type')->nullable();
            $table -> string('Opt1')->nullable();
            $table -> string('Opt2')->nullable();
            $table -> string('Opt3')->nullable();
            $table -> string('Opt4')->nullable();
            $table -> string('Opt5')->nullable();
            $table -> string('Notes')->nullable();
            $table -> string('Base Cost')->nullable();
            $table -> float('Addons')->nullable();
            $table -> float('Total Cost')->nullable();
            $table -> float('Retail')->nullable();
            $table -> float('SaleTotal')->nullable();
            $table -> float('Disc')->nullable();
            $table -> string('Sold Date')->nullable();
            $table -> string('Stock Date')->nullable();
            $table -> string('Order Date')->nullable();
            $table -> string('ETA Date')->nullable();
            $table -> string('FlpDueDate')->nullable();
            $table -> integer('Bail #')->nullable();
            $table -> char('OrderType')->nullable();
            $table -> integer('SourceNo')->nullable();
            $table -> integer('GOFNo')->nullable();
            $table -> string('Program')->nullable();
            $table -> string('CRA')->nullable();
            $table -> string('Manf Code')->nullable();
            $table -> string('Manf Desc')->nullable();
            $table -> string('Price List')->nullable();
            $table -> string('Desc')->nullable();
            $table -> integer('Status')->nullable();
            $table -> string('Safety')->nullable();
            $table -> string('Engine#')->nullable();
            $table -> string('Manuf#')->nullable();
            $table -> integer('Comp')->nullable();
            $table -> integer('Built')->nullable();
            $table -> integer('Traded Cus#')->nullable();
            $table -> string('Traded Name')->nullable();
            $table -> integer('Sold Cus#')->nullable();
            $table -> string('Sold Name')->nullable();
            $table -> char('In Stk')->nullable();
            $table -> char('Prohibit')->nullable();
            $table -> integer('Slsp#')->nullable();
            $table -> string('Slsp Name')->nullable();
            $table -> string('Alert')->nullable();
            $table -> string('Version')->nullable();
            $table -> string('ColourDesc')->nullable();
            $table -> string('Rego')->nullable();
            $table -> string('FlpExtDate')->nullable();
            $table -> integer('Pending')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('importexcle3_models');
    }
}
