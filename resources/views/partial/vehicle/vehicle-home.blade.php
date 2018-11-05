@extends('layouts.app')
@section('content')
 

    
    <div class="row">
        <div class="col-md-12 pt-5">
           @if($vehile->count() > 0)
               <div class="row">
                        <div class="col-12">
                            <!-- Table -->
                            <div class="card">
                                <div class="card-body" style="overflow:auto">
                                <table class="table table-bordered table-striped">
                                	<thead>
                                    <tr>
                                    	<th>Vehile Id</th>
                                        <th>Make</th>
                                        <th>Model</th>
                                        <th>Year</th>
                                        <th>Power value</th>
                                        <th>Miles Driven</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($vehile as $vehiles)
                                    	<tr>
                                        	<td>{{ $vehiles->id}}</td>
                                            <td>{{ $vehiles->make}}</td>
                                            <td>{{ $vehiles->model}}</td>
                                            <td>{{ $vehiles->year}}</td>
                                            <td>{{ $vehiles->powervalue}} {{ $vehiles->units}}</td>
                                            <td>{{ $vehiles->miles_driven}}</td>
                                            <td><a href="vehicle/{{ $vehiles->id}}/edit">Eidit</a> <a href="vehicle/{{ $vehiles->id}}/delet">Delet</a></td>
                                        </tr>
                                   @endforeach 
                                   </tbody>
                                 </table>   
                                </div>
                            </div>
                         </div>
                    </div>
                    <div class="row" style="overflow:hidden; padding:25px 0 35px;">
                    	<div class="container">
                           <div class="col-md-4"></div>
                            <div class="col-md-4" style="text-align:center;">
                                <a  href="{{route('vehicle-enter')}}" style="background:#fff; display:block; width:100%; cursor:pointer; padding:15px 0; text-align:center;" class="enter-now"> Enter Another One</a>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
            		@else
                <div class="col-md-3"><h3>No data to show</h3></div>
                <div class="col-md-3">
                <a  href="{{route('vehicle-enter')}}" style="background:#fff; display:block; width:100%; cursor:pointer; padding:15px 0; text-align:center;" class="enter-now"> Enter now</a>
            </div>
             @endif
                
        </div>
    </div>

@endsection