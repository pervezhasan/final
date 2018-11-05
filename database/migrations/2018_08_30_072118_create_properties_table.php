<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
			$table->increments('id');
			$table->string('country')->nullable();
			$table->string('zipcode')->nullable();
			
			$table->string('powertype')->nullable();
			
			$table->string('numberindividusalhousehold')->nullable();
			$table->string('own_or_rent')->nullable();
			
			
			$table->string('single_or_apartment_or_mobilehome')->nullable();
			$table->string('single_detached_or_attached')->nullable();
			
			$table->string('apartment_4_unit_or_5_building')->nullable();

			$table->string('year_build')->nullable();
			$table->string('square_footage')->nullable();

			$table->string('serviceyear')->nullable();
			
			$table->string('appliances_elec')->nullable();
			$table->string('appliances_naturalgas')->nullable();
			$table->string('appliances_fuelkarosane')->nullable();
			$table->string('appliances_wood')->nullable();
			$table->string('appliances_propane')->nullable();
			$table->string('appliances_wind')->nullable();
			$table->string('appliances_hydro')->nullable();
			$table->string('appliances_biomass')->nullable();
			$table->string('appliances_tidal')->nullable();
			$table->string('appliances_nuclear')->nullable();
			
			$table->string('electronics_elec')->nullable();
			$table->string('electronics_naturalgas')->nullable();
			$table->string('electronics_fuelkarosane')->nullable();
			$table->string('electronics_wood')->nullable();
			$table->string('electronics_propane')->nullable();
			$table->string('electronics_wind')->nullable();
			$table->string('electronics_hydro')->nullable();
			$table->string('electronics_biomass')->nullable();
			$table->string('electronics_tidal')->nullable();
			$table->string('electronics_nuclear')->nullable();
			
			$table->string('lighting_elec')->nullable();
			$table->string('lighting_naturalgas')->nullable();
			$table->string('lighting_fuelkarosane')->nullable();
			$table->string('lighting_wood')->nullable();
			$table->string('lighting_propane')->nullable();
			$table->string('lighting_wind')->nullable();
			$table->string('lighting_hydro')->nullable();
			$table->string('lighting_biomass')->nullable();
			$table->string('lighting_tidal')->nullable();
			$table->string('lighting_nuclear')->nullable();
			
			$table->string('spaceheating_elec')->nullable();
			$table->string('spaceheating_naturalgas')->nullable();
			$table->string('spaceheating_fuelkarosane')->nullable();
			$table->string('spaceheating_wood')->nullable();
			$table->string('spaceheating_propane')->nullable();
			$table->string('spaceheating_wind')->nullable();
			$table->string('spaceheating_hydro')->nullable();
			$table->string('spaceheating_biomass')->nullable();
			$table->string('spaceheating_tidal')->nullable();
			$table->string('spaceheating_nuclear')->nullable();
			
			$table->string('airconditioning_elec')->nullable();
			$table->string('airconditioning_naturalgas')->nullable();
			$table->string('airconditioning_fuelkarosane')->nullable();
			$table->string('airconditioning_wood')->nullable();
			$table->string('airconditioning_propane')->nullable();
			$table->string('airconditioning_wind')->nullable();
			$table->string('airconditioning_hydro')->nullable();
			$table->string('airconditioning_biomass')->nullable();
			$table->string('airconditioning_tidal')->nullable();
			$table->string('airconditioning_nuclear')->nullable();
			
			$table->string('waterheating_elec')->nullable();
			$table->string('waterheating_naturalgas')->nullable();
			$table->string('waterheating_fuelkarosane')->nullable();
			$table->string('waterheating_wood')->nullable();
			$table->string('waterheating_propane')->nullable();
			$table->string('waterheating_wind')->nullable();
			$table->string('waterheating_hydro')->nullable();
			$table->string('waterheating_biomass')->nullable();
			$table->string('waterheating_tidal')->nullable();
			$table->string('waterheating_nuclear')->nullable();
			
			$table->string('powerusedelectricity')->nullable();
			$table->string('powerusednaturalgas')->nullable();
			$table->string('powerusedpoeloilkarosane')->nullable();
			$table->string('powerusedwood')->nullable();
			$table->string('powerusedpropane')->nullable();
			$table->string('powerusedwind')->nullable();
			$table->string('powerusedhydro')->nullable();
			$table->string('powerusedbiomass')->nullable();
			$table->string('powerusedtidal')->nullable();
			$table->string('powerusednuclear')->nullable();
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
		
        	Schema::dropIfExists('properties');
    }
}
