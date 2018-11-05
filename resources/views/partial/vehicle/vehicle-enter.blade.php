@extends('layouts.app')
@section('content')

<div class="container-fluid">
    	<div  id="vasale-tbale">
            <div class="row">
            	<form action="{{ action('VehileController@store') }}" method="post" style="width:100%">
                {{ csrf_field() }}
                		<div class="row">
                            <div class="card">
                                <div class="card-body">
                                     <?php /*?><div class="col-md-3 col-sm-offset-5 pt-4 float-left">
                                       <div id="button-listing" style="background:#fff; padding-bottom:5px">	
                                            <div class="input-group mb-3 pt-0">
                                            <div id="text-vichlel" style="width:100%;">I Have <span id="labelvachel">a</span><input name="number_of_vehicle" type="text" id="vechl_input" placeholder="a" class="form-control form-control-sm" value="0" min="1">Vehicle</div>
                                            </div>
                                            <div id="button-vach">
                                                <div class="input-group-prepend minusss">
                                                    <a href="javascript:void(0)"  onclick="goVasalelavel(); shoModel()" class="btn btn-dark btn-sm" id="vechlminus-btn"><i class="fa fa-minus"></i></a>
                                                </div>
                                                <div class="input-group-prepend">
                                                    <a href="javascript:void(0)"  onClick="goVasalelavel(); shoModel()" class="btn btn-dark btn-sm triger-pro" id="vechlplus-btn"><i class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><?php */?>
                                    <div  class="col-md-12 col-sm-offset-5 pt-4 float-left">
                                    	 
                                            <div  class="vechle_modelset">
                                                <div class="col-md-5 float-left">
                                                    <div id="vechDetails"  style="margin-top:0px;">
                                                        <select name="make" class="select2 m-b-10 select2-hidden-accessible inputactivss" onchange="ShoIyrm();" style="width:100%"  data-placeholder="Made By..." tabindex="-1"  aria-hidden="true" required>	
                                                        <option value="" selected="selected">Made By...</option>
                                                            <option value="Alfa Romeo">Alfa Romeo</option>
                                                                <option value="Audi">Audi</option>
                                                                <option value="AM General">AM General</option>
                                                                <option value="Acura">Acura</option>
                                                                <option value="Alfa Romeo">Alfa Romeo</option>
                                                                <option value="Aston Martin">Aston Martin</option>
                                                                <option value="Autokraft Limited">Autokraft Limited</option>
                                                                <option value="American Motors Corporation">American Motors Corporation</option>
                                                                <option value="Alpina">Alpina</option>
                                                                <option value="Azure Dynamics">Azure Dynamics</option>
                                                                <option value="Avanti Motor Corporation">Avanti Motor Corporation</option>
                                                                <option value="Aurora Cars Ltd">Aurora Cars Ltd</option>
                                                                <option value="ASC Incorporated">ASC Incorporated</option>
                                                                <option value="BYD">BYD</option>
                                                                <option value="Bill Dovell Motor Car Company">Bill Dovell Motor Car Company</option>
                                                                <option value="BMW">BMW</option>
                                                                <option value="Bugatti">Bugatti</option>
                                                                <option value="Buick">Buick</option>
                                                                <option value="Bentley">Bentley</option>
                                                                <option value="Bertone">Bertone</option>
                                                                <option value="Bitter Gmbh and Co. Kg">Bitter Gmbh and Co. Kg</option>
                                                                <option value="Cadillac">Cadillac</option>
                                                                <option value="Chevrolet">Chevrolet</option>
                                                                <option value="Cahrysler">Cahrysler</option>
                                                                <option value="CX Automotive">CX Cutomotive</option>
                                                                <option value="Consulier Industries Inc">Consulier Industries Inc</option>
                                                                <option value="CCC Engineering">CCC Engineering</option>
                                                                <option value="CODA Automotive">CODA Automotive</option>
                                                                <option value="Dodge">Dodge</option>
                                                                <option value="Dacia">Dacia</option>
                                                                <option value="Daihatsu">Daihatsu</option>
                                                                <option value="Dabryan Coach Builders Inc">Dabryan Coach Builders Inc</option>
                                                                <option value="Daewoo">Daewoo</option>
                                                                <option value="Evans Automobiles">Evans Automobiles</option>
                                                                <option value="Eagle">Eagle</option>
                                                                <option value="E. P. Dutton, Inc.">E. P. Dutton, Inc.</option>
                                                                <option value="Environmental Rsch and Devp Corp">Environmental Rsch and Devp Corp</option>
                                                                <option value="Excalibur Autos">Excalibur Autos</option>
                                                                <option value="Faord">Faord</option>
                                                                <option value="Ferrari">Ferrari</option>
                                                                <option value="Federal Coach">Federal Coach</option>
                                                                <option value="Fiat">Fiat</option>
                                                                <option value="Fisker">Fisker</option>
                                                                <option value="GMC">GMC</option>
                                                                <option value="Geo">Geo</option>
                                                                <option value="Grumman Olson">Grumman Olson</option>
                                                                <option value="Grumman Allied Industries">Grumman Allied Industries</option>
                                                                <option value="General Motors">General Motors</option>
                                                                <option value="Goldacre">Goldacre</option>
                                                                <option value="Genesis">Genesis</option>
                                                                <option value="Honda">Honda</option>
                                                                <option value="Hyundai">Hyundai</option>
                                                                <option value="Hummer">Hummer</option>
                                                                <option value="Infiniti">Infiniti</option>
                                                                <option value="Isuzu">Isuzu</option>
                                                                <option value="Isis Imports Ltd"> Isis Imports Ltd</option>
                                                                <option value="Import Foreign Auto Sales Inc">Import Foreign Auto Sales Inc</option>
                                                                <option value="Import Trade Services">Import Trade Services</option>
                                                                <option value="Jaguar">Jaguar</option>
                                                                <option value="Jeep">Jeep</option>
                                                                <option value="JBA Motorcars, Inc.">JBA Motorcars, Inc.</option>
                                                                <option value="J.K. Motors">J.K. Motors</option>
                                                                <option value="Kia">Kia</option>
                                                                <option value="Kenyon Corporation Of America">Kenyon Corporation Of America</option>
                                                                <option value="Laforza Automobile Inc">Laforza Automobile Inc</option>
                                                                <option value="Lamborghini">Lamborghini</option>
                                                                <option value="Lotus">Lotus</option>
                                                                <option value="Lexus">Lexus</option>
                                                                <option value="Lincoln">Lincoln</option>
                                                                <option value="Land Rover">Land Rover</option>
                                                                <option value="Lambda Control Systems">Lambda Control Systems</option>
                                                                <option value="London Coach Co Inc">London Coach Co Inc</option>
                                                                <option value="London Taxi">London Taxi</option>
                                                                <option value="Koenigsegg">Koenigsegg</option>
                                                                <option value="Karma">Karma</option>
                                                                <option value="Mercury">Mercury</option>
                                                                <option value="Mazda">Mazda</option>
                                                                <option value="Mercedes-Benz">Mercedes-Benz</option>
                                                                <option value="Mitsubishi">Mitsubishi</option>
                                                                <option value="Maserati">Maserati</option>
                                                                <option value="Morgan">Morgan</option>
                                                                <option value="MINI">MINI</option>
                                                                <option value="Maybach">Maybach</option>
                                                                <option value="Merkur">Merkur</option>
                                                                <option value="Mobility Ventures LLC">Mobility Ventures LLC</option>
                                                                <option value="Mahindra">Mahindra</option>
                                                                <option value="McLaren Automotive">McLaren Automotive</option>
                                                                <option value="Mcevoy Motors">Mcevoy Motors</option>
                                                                <option value="Nissan">Nissan</option>
                                                                <option value="Oldsmobile">Oldsmobile</option>
                                                                <option value="Pagani">Pagani</option>
                                                                <option value="Panos">Panos</option>
                                                                <option value="Pininfarina">Pininfarina</option>
                                                                <option value="Performance">Performance</option>
                                                                <option value="Peut">Peut</option>
                                                                <option value="Plymouth">Plymouth</option>
                                                                <option value="Pontiac">Pontiac</option>
                                                                <option value="Porsche">Porsche</option>
                                                                <option value="Panoz Auto-Development">Panoz Auto-Development</option>
                                                                <option value="Panther Car Company Limited">Panther Car Company Limited</option>
                                                                <option value="PAS Inc -">PAS Inc -</option>
                                                                <option value="Qvale">Qvale</option>
                                                                <option value="Quantum Technologies">Quantum Technologies</option>
                                                                <option value="Raolls-Royce">Raolls-Royce</option>
                                                                <option value="Roush ">Roush </option>
                                                                <option value="Renault">Renault</option>
                                                                <option value="Red Shift Ltd.">Red Shift Ltd.</option>
                                                                <option value="Ruf Automobile Gmbh">Ruf Automobile Gmbh</option>
                                                                <option value="Ram">Ram</option>
                                                                <option value="Spyker">Spyker</option>
                                                                <option value="Subaru">Subaru</option>
                                                                <option value="Saab">Saab</option>
                                                                <option value="Suzuki">Suzuki</option>
                                                                <option value="Saturn">Saturn</option>
                                                                <option value="Sealeen">Sealeen</option>
                                                                <option value="Scion">Scion</option>
                                                                <option value="Sterling">Sterling</option>
                                                                <option value="Shelby">Shelby</option>
                                                                <option value="Superior Coaches Div E.p. Dutton">Superior Coaches Div E.p. Dutton</option>
                                                                <option value="S and S Coach Company  E.p. Dutton">S and S Coach Company  E.p. Dutton</option>
                                                                <option value="smart">smart</option>
                                                                <option value="SRT">SRT</option>
                                                                <option value="Toyota">Toyota</option>
                                                                <option value="Texas Coach Company">Texas Coach Company</option>
                                                                <option value="TVR Engineering Ltd">TVR Engineering Ltd</option>
                                                                <option value="Tecstar, LP">Tecstar, LP</option>
                                                                <option value="Tesla">Tesla</option>
                                                                <option value="Volkswagen">Volkswagen</option>
                                                                <option value="VPG">VPG</option>
                                                                <option value="Volvo">Volvo</option>
                                                                <option value="Vector">Vector</option>
                                                                <option value="Vixen Motor Company">Vixen Motor Company</option>
                                                                <option value="Volga Associated Automobile">Volga Associated Automobile</option>
                                                                <option value="Wallace Environmental">Wallace Environmental</option>
                                                                <option value="Yaugo">Yaugo</option>
                                                               
                                                            </select>
                                                        </div>
                                               </div>
                                               <div id="yarmodel"class="col-md-5 float-left" style="display:none;">
                                               <select name="model" class="select2 m-b-10 select2-hidden-accessible inputactivss" onchange="ShoIyer();" style="width:100%"  data-placeholder="Model" tabindex="-1"  aria-hidden="true" required>	
                                                    <option value="" selected="selected">Model</option>
                                                    <option value="Spider Veloce 2000">Spider Veloce 2000</option>
                                                    <option value="Taestarossa">Taestarossa</option>
                                                    <option value="Charger">Charger</option>
                                                    <option value="B150/B250 Wagon 2WD">B150/B250 Wagon 2WD</option>
                                                    <option value="Legacy AWD Turbo">Legacy AWD Turbo</option>
                                                    <option value="Loyale">Loyale</option>
                                                    <option value="Corolla">Corolla</option>
                                                    <option value="Golf III / GTI">Golf III / GTI</option>
                                                    <option value="Jetta III">Jetta III</option>
                                                    <option value="B150/B250 Wagon 2WD">B150/B250 Wagon 2WD</option>
                                                    <option value="Jetta III">Jetta III</option>
                                                    <option value="240">240</option>
                                                    <option value="100">100</option>
                                                    <option value="740i">740i</option>
                                                    <option value="740il">740il</option>
                                                    <option value="750il">750il</option>
                                                    <option value="Century">Century</option>
                                                    <option value="B150/B250 Wagon 2WD">B150/B250 Wagon 2WD</option>
                                                    <option value="Regal">Regal</option>
                                                    <option value="Riviera">Riviera</option>
                                                    <option value="Eldorado">Eldorado</option>
                                                    <option value="Seville">Seville</option>
                                                    <option value="Lumina">Lumina</option>
                                                    <option value="B150/B250 Wagon 2WD">B150/B250 Wagon 2WD</option>
                                                    <option value="New Yorker">New Yorker</option>
                                                    <option value="XM v6">XM v6</option>
                                                    <option value="XM v6a">XM v6a</option>
                                                    <option value="Maxima">Maxima</option>
                                                    <option value="XM v6a">XM v6a</option>
                                                    <option value="Dynasty">Dynasty</option>
                                                    <option value="Spirit">Spirit</option>
                                                    <option value="Taurus">Taurus</option>
                                                    <option value="Taurus SHO">Taurus SHO</option>
                                                    <option value="B350 Wagon 2WD">B350 Wagon 2WD</option>
                                                    <option value="Thunderbird">Thunderbird</option>
                                                    <option value="Sonata">Sonata</option>
                                                    <option value="Q45">Q45</option>
                                                    <option value="Q45 Full-Active Suspension">Q45 Full-Active Suspension</option>
                                                    <option value="LS 400">LS 400</option>
                                                    <option value="Cougar">Cougar</option>
                                                    <option value="Sable">Sable</option>
                                                    <option value="626">626</option>
                                                    <option value="929">929</option>
                                                    <option value="Cutlass Ciera">Cutlass Ciera</option>
                                                    <option value="Cutlass Supreme">Cutlass Supreme</option>
                                                    <option value="Toronado">Toronado</option>
                                                    <option value="Acclaim">Acclaim</option>
                                                    <option value="E150 Club Wagon">E150 Club Wagon</option>
                                                    <option value="Grand Prix">Grand Prix</option>
                                                    <option value="Brooklands/Brklnds L">Brooklands/Brklnds L</option>
                                                    <option value="Turbo R/Turbo R(lwb)">Turbo R/Turbo R(lwb)</option>
                                                    <option value="Silver Spirit II/Silver Spur">Silver Spirit II/Silver Spur</option>
                                                    <option value="Camry">Camry</option>
                                                    <option value="Passat">Passat</option>
                                                    <option value="850">850</option>
                                                    <option value="940">940</option>
                                                    <option value="960">960</option>
                                                    <option value="LeSabre">LeSabre</option>
                                                    <option value="Park Avenue">Park Avenue</option>
                                                    <option value="Roadmaster">Roadmaster</option>
                                                    <option value="DeVille/60 Special">DeVille/60 Special</option>
                                                    <option value="Fleetwood">Fleetwood</option>
                                                    <option value="Caprice">Caprice</option>
                                                    <option value="Concorde">Concorde</option>
                                                    <option value="Fifth Avenue/Imperial">Fifth Avenue/Imperial</option>
                                                    <option value="Intrepid">Intrepid</option>
                                                    <option value="Vision">Vision</option>
                                                    <option value="LTD Crown Victoria">LTD Crown Victoria</option>
                                                    <option value="Continental">Continental</option>
                                                    <option value="Grand Marquis">Grand Marquis</option>
                                                    <option value="Town Car">Town Car</option>
                                                    <option value="300SD">300SD</option>
                                                    <option value="300SE">300SE</option>
                                                    <option value="400SEL">400SEL</option>
                                                    <option value="400SEL">400SEL</option>
                                                    <option value="500SEL">500SEL</option>
                                                    <option value="Eighty-Eight">Eighty-Eight</option>
                                                    <option value="Ninety-Eight">Ninety-Eight</option>
                                                    <option value="G15/25 Rally 2WD">G15/25 Rally 2WD</option>
                                                    <option value="Bonneville">Bonneville</option>
                                                    <option value="Silver Spur II Mpw Touring L">Silver Spur II Mpw Touring L</option>
                                                    <option value="9000">9000</option>
                                                    <option value="100 quattro Wagon">100 quattro Wagon</option>
                                                    <option value="525i Touring">525i Touring</option>
                                                    <option value="Cavalier Wagon">Cavalier Wagon</option>
                                                    <option value="XM v6 Break">XM v6 Break</option>
                                                    <option value="Escort Wagon">Escort Wagon</option>
                                                    <option value="Accord Wagon">Accord Wagon</option>
                                                    <option value="Tracer Wagon">Tracer Wagon</option>
                                                    <option value="SW">SW</option>
                                                    <option value="Legacy Wagon">Legacy Wagon</option>
                                                    <option value="Legacy Wagon AWD">Legacy Wagon AWD</option>
                                                    <option value="Legacy Wagon AWD Turbo">Legacy Wagon AWD Turbo</option>
                                                    <option value="Loyale Wagon">Loyale Wagon</option>
                                                    <option value="Corolla Wagon">Corolla Wagon</option>
                                                    <option value="Century Wagon">Century Wagon</option>
                                                    <option value="Summit Wagon">Summit Wagon</option>
                                                    <option value="Taurus Wagon">Taurus Wagon</option>
                                                    <option value="Sable Wagon">Sable Wagon</option>
                                                    <option value="Expo">Expo</option>
                                                    <option value="Expo.LRV">Expo.LRV</option>
                                                    <option value="Cutlass Cruiser">Cutlass Cruiser</option>
                                                    <option value="Diamante Wagon">Diamante Wagon</option>
                                                    <option value="Colt Vista">Colt Vista</option>
                                                    <option value="Camry Wagon">Camry Wagon</option>
                                                    <option value="Passat Wagon">Passat Wagon</option>
                                                    <option value="240 Wagon">240 Wagon</option>
                                                    <option value="940 Wagon">940 Wagon</option>
                                                    <option value="G35 Rally 2WD">G35 Rally 2WD</option>
                                                    <option value="960 Wagon">G35 Rally 2WD</option>
                                                    <option value="Roadmaster Wagon">Roadmaster Wagon</option>
                                                    <option value="Caprice Wagon">Caprice Wagon</option>
                                                    <option value="S10 Pickup 2WD">S10 Pickup 2WD</option>
                                                    <option value="Safari 2WD (passenger)">Safari 2WD (passenger)</option>
                                                    <option value="Truck 2WD">Truck 2WD</option>
                                                    <option value="Ram 50 Pickup 2WD">Ram 50 Pickup 2WD</option>
                                                    <option value="Sonoma 2WD">Sonoma 2WD</option>
                                                    <option value="Jimmy 2WD">Jimmy 2WD</option>
                                                    <option value="Pickup 2WD">Pickup 2WD</option>
                                                    <option value="C1500 Pickup 2WD">C1500 Pickup 2WD</option>
                                                    <option value="Pickup 2500 2WD">Pickup 2500 2WD</option>
                                                    <option value="Dakota Pickup 2WD">Dakota Pickup 2WD</option>
                                                    <option value="D100/D150 Pickup 2WD">D100/D150 Pickup 2WD</option>
                                                    <option value="D250 Pickup 2WD">D250 Pickup 2WD</option>
                                                    <option value="Comanche Pickup 4WD">D250 Pickup 2WD</option>
                                                    <option value="F150 Pickup 2WD">F150 Pickup 2WD</option>
                                                    <option value="Van 2WD">Van 2WD</option>
                                                    <option value="F250 Pickup 2WD">F250 Pickup 2WD</option>
                                                    <option value="Ranger Pickup 2WD">Ranger Pickup 2WD</option>
                                                    <option value="Sierra 1500 2WD">Sierra 1500 2WD</option>
                                                    <option value="Colt">Colt</option>
                                                    <option value="Vanagon 2WD">Vanagon 2WD</option>
                                                    <option value="Colt Vista 4WD">Colt Vista 4WD</option>
                                                    <option value="Sierra 2500 2WD">Sierra 2500 2WD</option>
                                                    <option value="B2200/B2600i">B2200/B2600i</option>
                                                    <option value="T100 2WD">T100 2WD</option>
                                                    <option value="Post Office DJ5 2WD">Post Office DJ5 2WD</option>
                                                    <option value="K1500 Pickup 4WD">K1500 Pickup 4WD</option>
                                                    <option value="Post Office DJ8 2WD">Post Office DJ8 2WD</option>
                                                    <option value="Pickup 2500 4WD">Pickup 2500 4WD</option>
                                                    <option value="Suburban C10 2WD">Suburban C10 2WD</option>
                                                    <option value="S10 Pickup 4WD">S10 Pickup 4WD</option>
                                                    <option value="Truck 4WD">Truck 4WD</option>
                                                    <option value="Dakota Pickup 4WD">Dakota Pickup 4WD</option>
                                                    <option value="Power Ram 50 4WD">Power Ram 50 4WD</option>
                                                    <option value="W100/W150 Pickup 4WD">W100/W150 Pickup 4WD</option>
                                                    <option value="W250 Pickup 4WD">W250 Pickup 4WD</option>
                                                    <option value="Comanche Pickup 2WD">Comanche Pickup 2WD</option>
                                                    <option value="F150 Pickup 4WD">F150 Pickup 4WD</option>
                                                    <option value="F150 Pickup 2WD FFV">F150 Pickup 2WD FFV</option>
                                                    <option value="S10 Blazer 2WD">S10 Blazer 2WD</option>
                                                    <option value="Ranger Pickup 4WD">Ranger Pickup 4WD</option>
                                                    <option value="Sierra 1500 4WD">Sierra 1500 4WD</option>
                                                    <option value="Sierra 2500 4WD">Sierra 2500 4WD</option>
                                                    <option value="Sonoma 4WD">Sonoma 4WD</option>
                                                    <option value="Pickup 4WD">Pickup 4WD</option>
                                                    <option value="B2300/B3000/B4000 Pickup 4WD">B2300/B3000/B4000 Pickup 4WD</option>
                                                    <option value="B2600i 4x4">B2600i 4x4</option>
                                                    <option value="Truck 4WD/T100 4WD">Truck 4WD/T100 4WD</option>
                                                    <option value="Astro AWD (cargo)">Astro AWD (cargo)</option>
                                                    <option value="Astro AWD (cargo) Conversion">Astro AWD (cargo) Conversion</option>
                                                    <option value="Astro 2WD (cargo)">Astro 2WD (cargo)</option>
                                                    <option value="Astro 2WD (cargo) Conversion">Astro 2WD (cargo) Conversion</option>
                                                    <option value="G10/20 Van 2WD">G10/20 Van 2WD</option>
                                                    <option value="G30 Van 2WD">G30 Van 2WD</option>
                                                    <option value="G30 Van 2WD (cargo)">G30 Van 2WD (cargo)</option>
                                                    <option value="B150/B250 Van 2WD">B150/B250 Van 2WD</option>
                                                    <option value="B350 Van 2WD">B350 Van 2WD</option>
                                                    <option value="Aerostar Van">Aerostar Van</option>
                                                    <option value="Aerostar Van AWD">Aerostar Van AWD</option>
                                                    <option value="AD100/AD150 Ramcharger 2WD">AD100/AD150 Ramcharger 2WD</option>
                                                    <option value="E150 Econoline 2WD">E150 Econoline 2WD</option>
                                                    <option value="E250 Econoline 2WD">E250 Econoline 2WD</option>
                                                    <option value="E250 Econoline 2WD CNG">E250 Econoline 2WD CNG</option>
                                                    <option value="Vandura G15/25 2WD">Vandura G15/25 2WD</option>
                                                    <option value="Vandura G35 2WD">Vandura G35 2WD</option>
                                                    <option value="Safari AWD (cargo)">Safari AWD (cargo)</option>
                                                    <option value="Safari 2WD (cargo)">Safari 2WD (cargo)</option>
                                                    <option value="Astro AWD (passenger)">Astro AWD (passenger)</option>
                                                    <option value="Astro 2WD (passenger)">Astro 2WD (passenger)</option>
                                                    <option value="Sport Van G10/20 2WD">Sport Van G10/20 2WD</option>
                                                    <option value="Sport Van G30 2WD">Sport Van G30 2WD</option>
                                                    <option value="Aerostar Wagon">Aerostar Wagon</option>
                                                    <option value="Aerostar Wagon AWD">Aerostar Wagon AWD</option>
                                                    <option value="Caravan/Ram Van 2WD">Caravan/Ram Van 2WD</option>
                                                    <option value="Caravan/Grand Caravan/Ram Van 2WD">Caravan/Grand Caravan/Ram Van 2WD</option>
                                                    <option value="Rally G15/25 2WD">Rally G15/25 2WD</option>
                                                    <option value="Rally G35 2WD">Rally G35 2WD</option>
                                                    <option value="Safari AWD (passenger)">Safari AWD (passenger)</option>
                                                    <option value="Previa">Previa</option>
                                                    <option value="Previa All-Trac">Previa All-Trac</option>
                                                    <option value="Eurovan">Eurovan</option>
                                                    <option value="Eurovan Camper">Eurovan Camper</option>
                                                    <option value="Lumina/APV Minivan 2WD">Lumina/APV Minivan 2WD</option>
                                                    <option value="Suburban 1500 2WD">Suburban 1500 2WD</option>
                                                    <option value="Suburban 1500 2WD FFV">Suburban 1500 2WD FFV</option>
                                                    <option value="Pathfinder 2WD">Pathfinder 2WD</option>
                                                    <option value="Quest">Quest</option>
                                                    <option value="Conquest">Conquest</option>
                                                    <option value="Town and Country 2WD">Town and Country 2WD</option>
                                                    <option value="Voyager/Town and Country 2WD">Voyager/Town and Country 2WD</option>
                                                    <option value="Caravan C/V/Grand Caravan 2WD">Caravan C/V/Grand Caravan 2WD</option>
                                                    <option value="Caravan/Grand Caravan 2WD">Caravan/Grand Caravan 2WD</option>
                                                    <option value="Ramcharger 2WD">Ramcharger 2WD</option>
                                                    <option value="Cherokee 2WD">Cherokee 2WD</option>
                                                    <option value="Grand Cherokee 2WD">Grand Cherokee 2WD</option>
                                                    <option value="Liberty/Cherokee 2WD">Liberty/Cherokee 2WD</option>
                                                    <option value="Explorer 2WD">Explorer 2WD</option>
                                                    <option value="Explorer 2WD FFV">Explorer 2WD FFV</option>
                                                    <option value="Villager FWD Van">Villager FWD Van</option>
                                                    <option value="Villager FWD Wagon">Villager FWD Wagon</option>
                                                    <option value="Tracker Convertible 2WD">Tracker Convertible 2WD</option>
                                                    <option value="Tracker Convertible 2WD">Tracker Convertible 2WD</option>
                                                    <option value="S15 Jimmy 2WD">S15 Jimmy 2WD</option>
                                                    <option value="Amigo 2WD">Amigo 2WD</option>
                                                    <option value="Rodeo 2WD">Rodeo 2WD</option>
                                                    <option value="MPV">MPV</option>
                                                    <option value="MPV 4x4">MPV 4x4</option>
                                                    <option value="Trans Sport 2WD">Trans Sport 2WD</option>
                                                    <option value="Voyager/Grand Voyager 2WD">Voyager/Grand Voyager 2WD</option>
                                                    <option value="Samurai 2WD">Samurai 2WD</option>
                                                    <option value="Sidekick Hardtop 2WD">Sidekick Hardtop 2WD</option>
                                                    <option value="Sidekick 2WD">Sidekick 2WD</option>
                                                    <option value="Silhouette 2WD">Silhouette 2WD</option>
                                                    <option value="4Runner 2WD">4Runner 2WD</option>
                                                    <option value="Blazer 1500 4WD">Blazer 1500 4WD</option>
                                                    <option value="Suburban 1500 4WD">Suburban 1500 4WD</option>
                                                    <option value="S10 Blazer 4WD">S10 Blazer 4WD</option>
                                                    <option value="Funeral Coach">Funeral Coach</option>
                                                    <option value="Funeral Coach/Hearse">Funeral Coach/Hearse</option>
                                                    <option value="Funeral Coach  2WD">Funeral Coach  2WD</option>
                                                    <option value="Pathfinder 4WD">Pathfinder 4WD</option>
                                                    <option value="Pathfinder 4WD Platinum">Pathfinder 4WD Platinum</option>
                                                    <option value="Town and Country 4WD">Town and Country 4WD</option>
                                                    <option value="Caravan/Grand Caravan 4WD">Caravan/Grand Caravan 4WD</option>
                                                    <option value="Ramcharger 4WD">Ramcharger 4WD</option>
                                                    <option value="AW100/AW150 Ramcharger 4WD">AW100/AW150 Ramcharger 4WD</option>
                                                    <option value="Cherokee 4WD">Cherokee 4WD</option>
                                                    <option value="Grand Cherokee 4WD">Grand Cherokee 4WD</option>
                                                    <option value="Liberty/Liberty/Cherokee 4WD">Liberty/Liberty/Cherokee 4WD</option>
                                                    <option value="Liberty/Cherokee 4WD">Liberty/Cherokee 4WD</option>
                                                    <option value="Cherokee 4WD Active Drive II">Cherokee 4WD Active Drive II</option>
                                                    <option value="C15 Suburban 2WD">C15 Suburban 2WD</option>
                                                    <option value="Wrangler 4WD">Wrangler 4WD</option>
                                                    <option value="New Wrangler 4WD">New Wrangler 4WD</option>
                                                    <option value="Bronco 4WD">Bronco 4WD</option>
                                                    <option value="Explorer 4WD">Explorer 4WD</option>
                                                    <option value="S15 Explorer 4WD">S15 Explorer 4WD</option>
                                                    <option value="Explorer 4WD FFV">Explorer 4WD FFV</option>
                                                    <option value="Tracker Convertible 4WD">Tracker Convertible 4WD</option>
                                                    <option value="Tracker Van 4WD">Tracker Van 4WD</option>
                                                    <option value="Jimmy 4WD">Jimmy 4WD</option>
                                                    <option value="K15 Jimmy 4WD">K15 Jimmy 4WD</option>
                                                    <option value="T15 (S15) Jimmy 4WD">T15 (S15) Jimmy 4WD</option>
                                                    <option value="Yukon 1500 4WD">Yukon 1500 4WD</option>
                                                    <option value="V15 Jimmy 4WD">V15 Jimmy 4WD</option>
                                                    <option value="S15 Jimmy 4WD">V15 Jimmy 4WD</option>
                                                    <option value="Amigo 4WD">Amigo 4WD</option>
                                                    <option value="Trooper">Trooper</option>
                                                    <option value="Trooper 2WD">Trooper 2WD</option>
                                                    <option value="Trooper 4WD">Trooper 4WD</option>
                                                    <option value="Defender 110">Defender 110</option>
                                                    <option value="Range Rover County">Range Rover County</option>
                                                    <option value="Range Rover County LWB">Range Rover County LWB</option>
                                                    <option value="Range Rover County Classic">Range Rover County Classic</option>
                                                    <option value="Montero">Montero</option>
                                                    <option value="Montero 4WD">Montero 4WD</option>
                                                    <option value="Montero Sport 2WD">Montero Sport 2WD</option>
                                                    <option value="Montero Sport 4WD">Montero Sport 4WD</option>
                                                    <option value="Navajo">Navajo</option>
                                                    <option value="Navajo 4x4">Navajo 4x4</option>
                                                    <option value="Pas-Typhoon">Pas-Typhoon</option>
                                                    <option value="Voyager/Grand Voyager 4WD">Voyager/Grand Voyager 4WD</option>
                                                    <option value="Loyale AWD">Loyale AWD</option>
                                                    <option value="Loyale Wagon AWD">Loyale Wagon AWD</option>
                                                    <option value="Samurai Soft-top 4WD">Samurai Soft-top 4WD</option>
                                                    <option value="Sidekick Hardtop 4WD">Sidekick Hardtop 4WD</option>
                                                    <option value="Sidekick Soft-top 4WD">Sidekick Soft-top 4WD</option>
                                                    <option value="Bravada AWD">Bravada AWD</option>
                                                    <option value="Land Cruiser Wagon 4WD">Land Cruiser Wagon 4WD</option>
                                                    <option value="4Runner 4WD">4Runner 4WD</option>
                                                    <option value="Commercial Chassis">Commercial Chassis</option>
                                                    <option value="Coachbuilder Wagon">Coachbuilder Wagon</option>
                                                    <option value="Postal Cab Chassis 2WD">Postal Cab Chassis 2WD</option>
                                                    <option value="Dakota Cab Chassis 2WD">Dakota Cab Chassis 2WD</option>
                                                    <option value="D250 Cab Chassis 2WD">D250 Cab Chassis 2WD</option>
                                                    <option value="Cab/Chassis 2WD">Cab/Chassis 2WD</option>
                                                    <option value="NSX">NSX</option>
                                                    <option value="NSX Hybrid">NSX Hybrid</option>
                                                    <option value="Spider">Spider</option>
                                                    <option value="Ferrari 348 TB/TS/Spider">Ferrari 348 TB/TS/Spider</option>
                                                    <option value="360 Modena/Spider">360 Modena/Spider</option>
                                                    <option value="360 Modena/Spider/Challenge">360 Modena/Spider/Challenge</option>
                                                    <option value="Spider Cambiocorsa/spider GT">Spider Cambiocorsa/spider GT</option>
                                                    <option value="Spider Cambiocorsa/spider GT">Spider Cambiocorsa/spider GT</option>
                                                    <option value="8 C Spider">8 C Spider</option>
                                                    <option value="458 Italia Spider">458 Italia Spider</option>
                                                    <option value="458 Spider">458 Spider</option>
                                                    <option value="MP4-12C Spider">MP4-12C Spider</option>
                                                    <option value="458 Speciale Spider">458 Speciale Spider</option>
                                                    <option value="650S Spider">650S Spider</option>
                                                    <option value="124 Spider">124 Spider</option>
                                                    <option value="488 Spider">488 Spider</option>
                                                    <option value="488 Pista Spider">488 Pista Spider</option>
                                                    <option value="Corvette">Corvette</option>
                                                    <option value="Corvette Convertible">Corvette Convertible</option>
                                                    <option value="Twin-Turbo Corvette">Twin-Turbo Corvette</option>
                                                    <option value="300ZX">300ZX</option>
                                                    <option value="300ZX 2x2">300ZX 2x2</option>
                                                    <option value="Viper">Viper</option>
                                                    <option value="Viper Convertible">Viper Convertible</option>
                                                    <option value="Viper Coupe">Viper Coupe</option>
                                                    <option value="Viper SRT">Viper SRT</option>
                                                    <option value="Ferrari 512 TR">Ferrari 512 TR</option>
                                                    <option value="Civic Del Sol">Civic Del Sol</option>
                                                    <option value="XJS Convertible">XJS Convertible</option>
                                                    <option value="Esprit Turbo">Esprit Turbo</option>
                                                    <option value="Esprit Turbo HC PI">Esprit Turbo HC PI</option>
                                                    <option value="Esprit Turbo HC PI">Esprit Turbo HC PI</option>
                                                    <option value="MX-5 Miata">MX-5 Miata</option>
                                                    <option value="Kubvan">Kubvan</option>
                                                    <option value="RX-7">RX-7</option>
                                                    <option value="SL320">SL320</option>
                                                    <option value="SL500">SL500</option>
                                                    <option value="SL600">SL600</option>
                                                    <option value="911 Carrera 4/2">911 Carrera 4/2</option>
                                                    <option value="968">968</option>
                                                    <option value="MR2">MR2</option>
                                                    <option value="Cabriolet">Cabriolet</option>
                                                    <option value="Ferrari Mondial T/Cabriolet">Ferrari Mondial T/Cabriolet</option>
                                                    <option value="CLK320 Cabriolet">CLK320 Cabriolet</option>
                                                    <option value="Mondial/Cabriolet">Mondial/Cabriolet</option>
                                                    <option value="3.2 Mondial/Cabriolet">3.2 Mondial/Cabriolet</option>
                                                    <option value="911 Carrera 4 Cabriolet">911 Carrera 4 Cabriolet</option>
                                                    <option value="911 Carrera Cabriolet">911 Carrera Cabriolet</option>
                                                    <option value="CLK55 AMG (Cabriolet)">CLK55 AMG (Cabriolet)</option>
                                                    <option value="Carrera 2 Cabriolet">Carrera 2 Cabriolet</option>
                                                    <option value="Carrera 2 Cabriolet kit">Carrera 2 Cabriolet kit</option>
                                                    <option value="Carrera 4 Cabriolet">Carrera 4 Cabriolet</option>
                                                    <option value="Carrera 4 Cabriolet Kit">Carrera 4 Cabriolet Kit</option>
                                                    <option value="A4 Cabriolet">A4 Cabriolet</option>
                                                    <option value="A4 Cabriolet quattro">A4 Cabriolet quattro</option>
                                                    <option value="Carrera 4 S Cabriolet">Carrera 4 S Cabriolet</option>
                                                    <option value="Carrera 4 S Cabriolet Kit">Carrera 4 S Cabriolet Kit</option>
                                                    <option value="S4 Cabriolet">S4 Cabriolet</option>
                                                    <option value="RS4 Cabriolet">RS4 Cabriolet</option>
                                                    <option value="CLK500 (Cabriolet)">CLK500 (Cabriolet)</option>
                                                    <option value="Carrera 2 S Cabriolet">Carrera 2 S Cabriolet</option>
                                                    <option value="911 Turbo Cabriolet">911 Turbo Cabriolet</option>
                                                    <option value="CLK550 (Cabriolet)">CLK550 (Cabriolet)</option>
                                                    <option value="CLK63 AMG (Cabriolet)">CLK63 AMG (Cabriolet)</option>
                                                    <option value="A5 Cabriolet">A5 Cabriolet</option>
                                                    <option value="A5 Cabriolet quattro">A5 Cabriolet quattro</option>
                                                    <option value="S5 Cabriolet">A5 Cabriolet quattro</option>
                                                    <option value="911 Carrera 4S Cabriolet">911 Carrera 4S Cabriolet</option>
                                                    <option value="318i Convertible">318i Convertible</option>
                                                    <option value="325i Convertible">325i Convertible</option>
                                                    <option value="Capri">Capri</option>
                                                    <option value="Cherokee/Wagoneer">Cherokee/Wagoneer</option>
                                                    <option value="Cherokee/Wagoneer 4WD">Cherokee/Wagoneer 4WD</option>
                                                    <option value="Cherokee/Wagoneer 2WD">Cherokee/Wagoneer 2WD</option>
                                                    <option value="E320 Convertible">E320 Convertible</option>
                                                    <option value="911 Turbo">911 Turbo</option>
                                                    <option value="Turbo 4">4 Turbo</option>
                                                           
                                                        </select>
                                               </div>
                                               <div id="yearc"class="col-md-2 float-left" style="display:none;">
                                               <select name="year" id="yearsls" onchange="ShoInpV();" class="yearselect form-control"></select>
                                               </div>
                                            </div>
                                            <div id="vecheldvl" style="display:none">
                                            <div  class="col-md-9 col-sm-offset-5 pt-4 float-left">
                                            
                                            <div  class="row">
                                            <div class="col-md-8 float-left">
                                            <input type="text" value="" class="form-control" name="powervalue" placeholder="Input Value" required />
                                            </div>
                                            <div class="col-md-4 pt-0 float-left">
                                            <select name="units" class="selectpicker bg-style" title="Units">
                                                <option value="gals">gals</option>
                                                <option value="cub ft">cub ft.</option>
                                                <option value="toe">toe</option>
                                            </select>
                                            </div>
                                        	</div>
                                            <div  class="row pt-2">
                                            
                                                <div class="col-md-8 float-left">
                                                <input onchange="showBtnSb();" type="text" value="" class="form-control" name="miles_driven" placeholder="Input Value"  required />
                                                </div>
                                                <div class="col-md-4 float-left">
                                                <div class="bg-style">Miles Driven</div>
                                                </div>
                                            
                                        	</div>
                                    	</div>
                                        <div id="submitSc" style="display:none" class="col-md-3 pt-4 float-left">
                                        	<input id="property_token" type="hidden" name"_token" value="{!! csrf_token() !!}">
                                            <input class="btn btn-block btn-outline-secondary" type="submit" name="submit" value="Submit" />
                                        </div>
                                    </div>
                            </div>
                        </div>
                        
                        </div>
                        
                        </form>
                    </div>
            </div>
        </div>
        <script>
		function ShoIyrm(){
			document.getElementById("yarmodel").style.display = "block";
		}
		function ShoIyer(){
			document.getElementById("yearc").style.display = "block";
		}
		function showBtnSb(){
				document.getElementById("submitSc").style.display = "block";
			}
        	function ShoInpV(){
				document.getElementById("vecheldvl").style.display = "block";
			}
        
        </script>

@endsection