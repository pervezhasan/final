<?php

namespace App\DataTables;
use App\Property;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)->setRowId('id')->addColumn('powerusednaturalgas', '');
    }
/*'powerusedelectricity') ?: 'MWh';
		$property->powerusednaturalgas = $request->input('powerusednaturalgas') ?: 'Cubic ft' ;
		$property->powerusedpoeloilkarosane = $request->input('powerusedpoeloilkarosane') ?: 'Gals' ;
		$property->powerusedwood = $request->input('powerusedwood') ?: 'cubic feet' ;
		$property->powerusedpropane = $request->input('powerusedpropane') ?: 'Cubic ft' ;
		$property->powerusedwind = $request->input('powerusedwind') ?: 'Toe' ;
		$property->powerusedhydro = $request->input('powerusedhydro') ?: 'MWh' ;
		$property->powerusedbiomass = $request->input('powerusedbiomass') ?: 'Cubic ft' ;
		$property->powerusedtidal = $request->input('powerusedtidal') ?: 'MWh' ;
		$property->powerusednuclear = $request->input('powerusednuclear') ?: 'MWh' ;*/
		
    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Property $model)
    {
        return $model->newQuery()->select(
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
				
				'powerusedpoeloilkarosane',
				'powerusedwood',
				'powerusedpropane',
				'powerusedwind',
				'powerusedhydro',
				'powerusedbiomass',
				'powerusedtidal',
				'powerusednuclear');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->parameters([
                        'dom' => 'Bfrtip',
                        'order' => [1, 'asc'],
                        'select' => [
                            'style' => 'os',
                            'selector' => 'td:first-child',
                        ],
                        'buttons' => [
                            /*['extend' => 'create', 'editor' => 'editor'],
                            ['extend' => 'edit', 'editor' => 'editor'],
                            ['extend' => 'remove', 'editor' => 'editor'],*/
                        ]
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            [
                'data' => null,
                'defaultContent' => '',
                'className' => 'select-checkbox',
                'title' => '',
                'orderable' => false,
                'searchable' => false
            ],
            'id',
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
		
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'properties_' . time();
    }
}