<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model {
	public static function validate($input) {

            $rules = array(
                'square_footage' => 'numeric',
				'serviceyear' => 'numeric',
				'appliances_elec' => 'numeric',
				'appliances_naturalgas' => 'numeric',
				'appliances_fuelkarosane' => 'numeric',
				'appliances_wood' => 'numeric',
				'appliances_propane' => 'numeric',
				'appliances_wind' => 'numeric',
				'appliances_hydro' => 'numeric',
				'appliances_biomass' => 'numeric',
				'appliances_tidal' => 'numeric',
				'appliances_nuclear' => 'numeric',
				'electronics_elec' => 'numeric',
				'electronics_naturalgas' => 'numeric',
				'electronics_fuelkarosane' => 'numeric',
				'electronics_wood' => 'numeric',
				'electronics_propane' => 'numeric',
				'electronics_wind' => 'numeric',
				'electronics_hydro' => 'numeric',
				'electronics_biomass' => 'numeric',
				'electronics_tidal' => 'numeric',
				'electronics_nuclear' => 'numeric',
				'lighting_elec' => 'numeric',
				'lighting_naturalgas' => 'numeric',
				'lighting_fuelkarosane' => 'numeric',
				'lighting_wood' => 'numeric',
				'lighting_propane' => 'numeric',
				'lighting_wind' => 'numeric',
				'lighting_hydro' => 'numeric',
				'lighting_biomass' => 'numeric',
				'lighting_tidal' => 'numeric',
				'lighting_nuclear' => 'numeric',
				'spaceheating_elec' => 'numeric',
				'spaceheating_naturalgas' => 'numeric',
				'spaceheating_fuelkarosane' => 'numeric',
				'spaceheating_wood' => 'numeric',
				'spaceheating_propane' => 'numeric',
				'spaceheating_wind' => 'numeric',
				'spaceheating_hydro' => 'numeric',
				'spaceheating_biomass' => 'numeric',
				'spaceheating_tidal' => 'numeric',
				'spaceheating_nuclear' => 'numeric',
				'airconditioning_elec' => 'numeric',
				'airconditioning_naturalgas' => 'numeric',
				'airconditioning_fuelkarosane' => 'numeric',
				'airconditioning_wood' => 'numeric',
				'airconditioning_propane' => 'numeric',
				'airconditioning_wind' => 'numeric',
				'airconditioning_hydro' => 'numeric',
				'airconditioning_biomass' => 'numeric',
				'airconditioning_tidal' => 'numeric',
				'airconditioning_nuclear' => 'numeric',
				'waterheating_elec' => 'numeric',
				'waterheating_naturalgas' => 'numeric',
				'waterheating_fuelkarosane' => 'numeric',
				'waterheating_wood' => 'numeric',
				'waterheating_propane' => 'numeric',
				'waterheating_wind' => 'numeric',
				'waterheating_hydro' => 'numeric',
				'waterheating_biomass' => 'numeric',
				'waterheating_tidal' => 'numeric',
				'waterheating_nuclear' => 'numeric',
              );
            return Validator::make($input, $rules);
        }
	
	
    protected $fillable = [
				'country',
				'zipcode',
				'powertype',
				'numberindividusalhousehold',
				'own_or_rent',
				'single_or_apartment_or_mobilehome',
				'single_detached_or_attached',
				'apartment_4_unit_or_5_building',
				'year_build',
				'square_footage',
				'serviceyear',
				'appliances_elec',
				'appliances_naturalgas',
				'appliances_fuelkarosane',
				'appliances_wood',
				'appliances_propane',
				'appliances_wind',
				'appliances_hydro',
				'appliances_biomass',
				'appliances_tidal',
				'appliances_nuclear',
				'electronics_elec',
				'electronics_naturalgas',
				'electronics_fuelkarosane',
				'electronics_wood',
				'electronics_propane',
				'electronics_wind',
				'electronics_hydro',
				'electronics_biomass',
				'electronics_tidal',
				'electronics_nuclear',
				'lighting_elec',
				'lighting_naturalgas',
				'lighting_fuelkarosane',
				'lighting_wood',
				'lighting_propane',
				'lighting_wind',
				'lighting_hydro',
				'lighting_biomass',
				'lighting_tidal',
				'lighting_nuclear',
				'spaceheating_elec',
				'spaceheating_naturalgas',
				'spaceheating_fuelkarosane',
				'spaceheating_wood',
				'spaceheating_propane',
				'spaceheating_wind',
				'spaceheating_hydro',
				'spaceheating_biomass',
				'spaceheating_tidal',
				'spaceheating_nuclear',
				'airconditioning_elec',
				'airconditioning_naturalgas',
				'airconditioning_fuelkarosane',
				'airconditioning_wood',
				'airconditioning_propane',
				'airconditioning_wind',
				'airconditioning_hydro',
				'airconditioning_biomass',
				'airconditioning_tidal',
				'airconditioning_nuclear',
				'waterheating_elec',
				'waterheating_naturalgas',
				'waterheating_fuelkarosane',
				'waterheating_wood',
				'waterheating_propane',
				'waterheating_wind',
				'waterheating_hydro',
				'waterheating_biomass',
				'waterheating_tidal',
				'waterheating_nuclear',
				'powerusedelectricity',
				'powerusednaturalgas',
				'powerusedpoeloilkarosane',
				'powerusedwood',
				'powerusedpropane',
				'powerusedwind',
				'powerusedhydro',
				'powerusedbiomass',
				'powerusedtidal',
				'powerusednuclear',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'properties';
	
	
	public static function boot() {
    parent::boot();

    static::creating(function($model){
        foreach ($model->attributes as $key => $value) {
            $model->{$key} = empty($value) ? null : $value;
        }
    });

    static::updating(function($model){
        foreach ($model->attributes as $key => $value) {
            $model->{$key} = empty($value) ? null : $value;
        }
    });

}
}
