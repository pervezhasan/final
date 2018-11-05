@extends('layouts.app')
@section('content')
 <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="../../../assets/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">Mark Jeckson</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                        <li><a href="" onclick="document.getElementById('logOut').submit();"><i class="fa fa-power-off"></i> Logout</a></li>

                        <form action="{{route('logout')}}" method="POST" id="logOut">
                            {{csrf_field()}}
                        </form>

                    </ul>
                </li>
                {{--<li class="nav-small-cap">--- PERSONAL</li>--}}
                {{--<li> <a class="has-arrow waves-effect waves-dark" href="../../{{route("/")}}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard <span class="badge badge-pill badge-cyan ml-auto">4</span></span></a>--}}
                    {{--<ul aria-expanded="false" class="collapse">--}}
                        {{--<li><a href="{{route('minimal')}}">Minimal </a></li>--}}
                        {{--<li><a href="{{route('analytical')}}">Analytical</a></li>--}}
                        {{--<li><a href="../../index3.html">Demographical</a></li>--}}
                        {{--<li><a href="../../index4.html">Modern</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Apps</span></a>--}}
                    {{--<ul aria-expanded="false" class="collapse">--}}
                        {{--<li><a href="../../app-calendar.html">Calendar</a></li>--}}
                        {{--<li><a href="../../app-chat.html">Chat app</a></li>--}}
                        {{--<li><a href="../../app-ticket.html">Support Ticket</a></li>--}}
                        {{--<li><a href="../../app-contact.html">Contact / Employee</a></li>--}}
                        {{--<li><a href="../../app-contact2.html">Contact Grid</a></li>--}}
                        {{--<li><a href="../../app-contact-detail.html">Contact Detail</a></li>--}}
                        {{--<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Inbox</span></a>--}}
                            {{--<ul aria-expanded="false" class="collapse">--}}
                                {{--<li><a href="../../app-email.html">Mailbox</a></li>--}}
                                {{--<li><a href="../../app-email-detail.html">Mailbox Detail</a></li>--}}
                                {{--<li><a href="../../app-compose.html">Compose Mail</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li> <a class="has-arrow waves-effect waves-dark two-column" href="javascript:void(0)" aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Ui <span class="badge badge-pill badge-primary text-white ml-auto">25</span></span></a>--}}
                    {{--<ul aria-expanded="false" class="collapse">--}}
                        {{--<li><a href="../../ui-cards.html">Cards</a></li>--}}
                        {{--<li><a href="../../ui-user-card.html">User Cards</a></li>--}}
                        {{--<li><a href="../../ui-buttons.html">Buttons</a></li>--}}
                        {{--<li><a href="../../ui-modals.html">Modals</a></li>--}}
                        {{--<li><a href="../../ui-tab.html">Tab</a></li>--}}
                        {{--<li><a href="../../ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>--}}
                        {{--<li><a href="../../ui-tooltip-stylish.html">Tooltip stylish</a></li>--}}
                        {{--<li><a href="../../ui-sweetalert.html">Sweet Alert</a></li>--}}
                        {{--<li><a href="../../ui-notification.html">Notification</a></li>--}}
                        {{--<li><a href="../../ui-progressbar.html">Progressbar</a></li>--}}
                        {{--<li><a href="../../ui-nestable.html">Nestable</a></li>--}}
                        {{--<li><a href="../../ui-range-slider.html">Range slider</a></li>--}}
                        {{--<li><a href="../../ui-timeline.html">Timeline</a></li>--}}
                        {{--<li><a href="../../ui-typography.html">Typography</a></li>--}}
                        {{--<li><a href="../../ui-horizontal-timeline.html">Horizontal Timeline</a></li>--}}
                        {{--<li><a href="../../ui-session-timeout.html">Session Timeout</a></li>--}}
                        {{--<li><a href="../../ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>--}}
                        {{--<li><a href="../../ui-bootstrap.html">Bootstrap Ui</a></li>--}}
                        {{--<li><a href="../../ui-breadcrumb.html">Breadcrumb</a></li>--}}
                        {{--<li><a href="../../ui-bootstrap-switch.html">Bootstrap Switch</a></li>--}}
                        {{--<li><a href="../../ui-list-media.html">List Media</a></li>--}}
                        {{--<li><a href="../../ui-ribbons.html">Ribbons</a></li>--}}
                        {{--<li><a href="../../ui-grid.html">Grid</a></li>--}}
                        {{--<li><a href="../../ui-carousel.html">Carousel</a></li>--}}
                        {{--<li><a href="../../ui-date-paginator.html">Date-paginator</a></li>--}}
                        {{--<li><a href="../../ui-dragable-portlet.html">Dragable Portlet</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>--}}
                {{--<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span class="hide-menu">Forms</span></a>--}}
                    {{--<ul aria-expanded="false" class="collapse">--}}
                        {{--<li><a href="../../form-basic.html">Basic Forms</a></li>--}}
                        {{--<li><a href="../../form-layout.html">Form Layouts</a></li>--}}
                        {{--<li><a href="../../form-addons.html">Form Addons</a></li>--}}
                        {{--<li><a href="../../form-material.html">Form Material</a></li>--}}
                        {{--<li><a href="../../form-float-input.html">Floating Lable</a></li>--}}
                        {{--<li><a href="../../form-pickers.html">Form Pickers</a></li>--}}
                        {{--<li><a href="../../form-upload.html">File Upload</a></li>--}}
                        {{--<li><a href="../../form-mask.html">Form Mask</a></li>--}}
                        {{--<li><a href="../../form-validation.html">Form Validation</a></li>--}}
                        {{--<li><a href="../../form-dropzone.html">File Dropzone</a></li>--}}
                        {{--<li><a href="../../form-icheck.html">Icheck control</a></li>--}}
                        {{--<li><a href="../../form-img-cropper.html">Image Cropper</a></li>--}}
                        {{--<li><a href="../../form-bootstrapwysihtml5.html">HTML5 Editor</a></li>--}}
                        {{--<li><a href="../../form-typehead.html">Form Typehead</a></li>--}}
                        {{--<li><a href="../../form-wizard.html">Form Wizard</a></li>--}}
                        {{--<li><a href="../../form-xeditable.html">Xeditable Editor</a></li>--}}
                        {{--<li><a href="../../form-summernote.html">Summernote Editor</a></li>--}}
                        {{--<li><a href="../../form-tinymce.html">Tinymce Editor</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-accordion-merged"></i><span class="hide-menu">Tables</span></a>--}}
                    {{--<ul aria-expanded="false" class="collapse">--}}
                        {{--<li><a href="../../table-basic.html">Basic Tables</a></li>--}}
                        {{--<li><a href="../../table-layout.html">Table Layouts</a></li>--}}
                        {{--<li><a href="../../table-data-table.html">Data Tables</a></li>--}}
                        {{--<li><a href="../../table-footable.html">Footable</a></li>--}}
                        {{--<li><a href="../../table-jsgrid.html">Js Grid Table</a></li>--}}
                        {{--<li><a href="../../table-responsive.html">Responsive Table</a></li>--}}
                        {{--<li><a href="../../table-bootstrap.html">Bootstrap Tables</a></li>--}}
                        {{--<li><a href="../../table-editable-table.html">Editable Table</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Widgets</span></a>--}}
                    {{--<ul aria-expanded="false" class="collapse">--}}
                        {{--<li><a href="../../widget-data.html">Data Widgets</a></li>--}}
                        {{--<li><a href="../../widget-apps.html">Apps Widgets</a></li>--}}
                        {{--<li><a href="../../widget-charts.html">Charts Widgets</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="nav-small-cap">--- EXTRA COMPONENTS</li>--}}
                {{--<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Pages <span class="badge badge-pill badge-info">25</span></span></a>--}}
                    {{--<ul aria-expanded="false" class="collapse">--}}
                        {{--<li><a href="../../starter-kit.html">Starter Kit</a></li>--}}
                        {{--<li><a href="../../pages-blank.html">Blank page</a></li>--}}
                        {{--<li><a href="javascript:void(0)" class="has-arrow">Authentication <span class="badge badge-pill badge-success pull-right">6</span></a>--}}
                            {{--<ul aria-expanded="false" class="collapse">--}}
                                {{--<li><a href="../../pages-login.html">Login 1</a></li>--}}
                                {{--<li><a href="../../pages-login-2.html">Login 2</a></li>--}}
                                {{--<li><a href="../../pages-register.html">Register</a></li>--}}
                                {{--<li><a href="../../pages-register2.html">Register 2</a></li>--}}
                                {{--<li><a href="../../pages-register3.html">Register 3</a></li>--}}
                                {{--<li><a href="../../pages-lockscreen.html">Lockscreen</a></li>--}}
                                {{--<li><a href="../../pages-recover-password.html">Recover password</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="../../pages-profile.html">Profile page</a></li>--}}
                        {{--<li><a href="../../pages-animation.html">Animation</a></li>--}}
                        {{--<li><a href="../../pages-fix-innersidebar.html">Sticky Left sidebar</a></li>--}}
                        {{--<li><a href="../../pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>--}}
                        {{--<li><a href="../../pages-invoice.html">Invoice</a></li>--}}
                        {{--<li><a href="../../pages-treeview.html">Treeview</a></li>--}}
                        {{--<li><a href="../../pages-utility-classes.html">Helper Classes</a></li>--}}
                        {{--<li><a href="../../pages-search-result.html">Search result</a></li>--}}
                        {{--<li><a href="../../pages-scroll.html">Scrollbar</a></li>--}}
                        {{--<li><a href="../../pages-pricing.html">Pricing</a></li>--}}
                        {{--<li><a href="../../pages-lightbox-popup.html">Lighbox popup</a></li>--}}
                        {{--<li><a href="../../pages-gallery.html">Gallery</a></li>--}}
                        {{--<li><a href="../../pages-faq.html">Faqs</a></li>--}}
                        {{--<li><a href="javascript:void(0)" class="has-arrow">Error Pages</a>--}}
                            {{--<ul aria-expanded="false" class="collapse">--}}
                                {{--<li><a href="../../pages-error-400.html">400</a></li>--}}
                                {{--<li><a href="../../pages-error-403.html">403</a></li>--}}
                                {{--<li><a href="../../pages-error-404.html">404</a></li>--}}
                                {{--<li><a href="../../pages-error-500.html">500</a></li>--}}
                                {{--<li><a href="../../pages-error-503.html">503</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-pie-chart"></i><span class="hide-menu">Extra</span></a>--}}
                    {{--<ul aria-expanded="false" class="collapse">--}}
                        {{--<li><a href="../../chart-morris.html">Morris Chart</a></li>--}}
                        {{--<li><a href="../../chart-chartist.html">Chartis Chart</a></li>--}}
                        {{--<li><a href="../../chart-echart.html">Echarts</a></li>--}}
                        {{--<li><a href="../../chart-flot.html">Flot Chart</a></li>--}}
                        {{--<li><a href="../../chart-knob.html">Knob Chart</a></li>--}}
                        {{--<li><a href="../../chart-chart-js.html">Chartjs</a></li>--}}
                        {{--<li><a href="../../chart-sparkline.html">Sparkline Chart</a></li>--}}
                        {{--<li><a href="../../chart-extra-chart.html">Extra chart</a></li>--}}
                        {{--<li><a href="../../chart-peity.html">Peity Charts</a></li>--}}
                        {{--<li>--}}
                            {{--<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Icons</span></a>--}}
                            {{--<ul aria-expanded="false" class="collapse">--}}
                                {{--<li><a href="../../icon-material.html">Material Icons</a></li>--}}
                                {{--<li><a href="../../icon-fontawesome.html">Fontawesome Icons</a></li>--}}
                                {{--<li><a href="../../icon-themify.html">Themify Icons</a></li>--}}
                                {{--<li><a href="../../icon-weather.html">Weather Icons</a></li>--}}
                                {{--<li><a href="../../icon-simple-lineicon.html">Simple Line icons</a></li>--}}
                                {{--<li><a href="../../icon-flag.html">Flag Icons</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Maps</span></a>--}}
                            {{--<ul aria-expanded="false" class="collapse">--}}
                                {{--<li><a href="../../map-google.html">Google Maps</a></li>--}}
                                {{--<li><a href="../../map-vector.html">Vector Maps</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                {{--<li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-align-left"></i><span class="hide-menu">Multi</span></a>--}}
                    {{--<ul aria-expanded="false" class="collapse">--}}
                        {{--<li><a href="javascript:void(0)">item 1.1</a></li>--}}
                        {{--<li><a href="javascript:void(0)">item 1.2</a></li>--}}
                        {{--<li> <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Menu 1.3</a>--}}
                            {{--<ul aria-expanded="false" class="collapse">--}}
                                {{--<li><a href="javascript:void(0)">item 1.3.1</a></li>--}}
                                {{--<li><a href="javascript:void(0)">item 1.3.2</a></li>--}}
                                {{--<li><a href="javascript:void(0)">item 1.3.3</a></li>--}}
                                {{--<li><a href="javascript:void(0)">item 1.3.4</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="javascript:void(0)">item 1.4</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-10"></div>
            <div class="col-md-2 float-right">
                <a href="#" class="buy-now">Buy Now</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 pt-5">
            @if($property->count() > 0)
               <div class="row">
                        <div class="col-12">
                            <!-- Table -->
                            <div class="card">
                                <div class="card-body" style="overflow:auto">
                                
                                    <table class="table table-striped table-bordered" id="editable-datatables">
                                    <thead>
                                        <tr>
                                        	<th data-field="sl" ></th>
                                            <th data-field="country">Country Name</th>
                                            <th data-field="zipcode">Country Zip Code</th>
                                            <th data-field="propertytype">Property Type</th>
                                            <th data-field="numberofproperty">Number of Property</th>
                                            <th data-field="own_or_rent">Property Own/Rent</th>
                                            <th data-field="single_apartment_mobile">Single/Apartment/Mobile Home</th>
                                            <th data-field="detached_attached">If Single Detached/Attached</th>
                                            <th data-field="4_unit_or_more">If Apartment 4 Unit/More Building</th>
                                            <th data-field="year_build">Year Build</th>
                                            <th data-field="square_footage">Square Footage</th>
                                            <th data-field="serviceyear">Service Year</th>
                                            <th data-field="appliances_elec">Appliances/ Electricity</th>
                                            <th data-field="appliances_naturalgas">Appliances/ Natural Gas</th>
                                            <th data-field="appliances_fuelkerosene" >Appliances/ Fuel oil or Kerosene</th>
                                            <th data-field="appliances_wood">Appliances/ Wood</th>
                                            <th data-field="appliances_propane">Appliances/ Propane</th>
                                            <th data-field="appliances_wind">Appliances/ Wind</th>
                                            <th data-field="appliances_hydro">Appliances/ Hydro</th>
                                            
                                            <th data-field="appliances_wind">Appliances/ Biomas</th>
                                            <th data-field="appliances_hydro">Appliances/ Tidal</th>
                                            <th data-field="appliances_hydro">Appliances/ Nuclear</th>
                                            
                                            <th data-field="electronics_elec">Electronics/ Electricity</th>
                                            <th data-field="electronics_naturalgas">Electronics/ Natural Gas</th>
                                            <th data-field="electronics_fuelkerosene" >Electronics/ Fuel oil or Kerosene</th>
                                            <th data-field="electronics_wood">Electronics / Wood</th>
                                            <th data-field="electronics_propane">Electronics/ Propane</th>
                                            <th data-field="electronics_wind">Electronics/ Wind</th>
                                            <th data-field="electronics_hydro">Electronics/ Hydro</th>
                                            <th data-field="appliances_wind">Electronics/ Biomas</th>
                                            <th data-field="appliances_hydro">Electronics/ Tidal</th>
                                            <th data-field="appliances_hydro">Electronics/ Nuclear</th>
                                            
                                            <th data-field="lighting_elec">Lighting / Electricity</th>
                                            <th data-field="lighting_naturalgas">Lighting / Natural Gas</th>
                                            <th data-field="lighting_fuelkerosene" >Lighting / Fuel oil or Kerosene</th>
                                            <th data-field="lighting_wood">Lighting / Wood</th>
                                            <th data-field="lighting_propane">Lighting / Propane</th>
                                            <th data-field="lighting_wind">Lighting / Wind</th>
                                            <th data-field="lighting_hydro">Lighting / Hydro</th>
                                            <th data-field="appliances_wind">Lighting/ Biomas</th>
                                            <th data-field="appliances_hydro">Lighting/ Tidal</th>
                                            <th data-field="appliances_hydro">Lighting/ Nuclear</th>
                                            
                                            <th data-field="spaceheating_elec">Space Heating / Electricity</th>
                                            <th data-field="spaceheating_naturalgas">Space Heating / Natural Gas</th>
                                            <th data-field="spaceheating_fuelkerosene" >Space Heating / Fuel oil or Kerosene</th>
                                            <th data-field="spaceheating_wood">Space Heating / Wood</th>
                                            <th data-field="spaceheating_propane">Space Heating / Propane</th>
                                            <th data-field="spaceheating_wind">Space Heating / Wind</th>
                                            <th data-field="spaceheating_hydro">Space Heating / Hydro</th>
                                            <th data-field="appliances_wind">Space Heating/ Biomas</th>
                                            <th data-field="appliances_hydro">Space Heating/ Tidal</th>
                                            <th data-field="appliances_hydro">Space Heating/ Nuclear</th>
                                            
                                            <th data-field="airconditioning_elec">Air Conditioning / Electricity</th>
                                            <th data-field="airconditioning_naturalgas">Air Conditioning / Natural Gas</th>
                                            <th data-field="airconditioning_fuelkerosene" >Air Conditioning / Fuel oil or Kerosene</th>
                                            <th data-field="airconditioning_wood">Air Conditioning / Wood</th>
                                            <th data-field="airconditioning_propane">Air Conditioning / Propane</th>
                                            <th data-field="airconditioning_wind">Air Conditioning / Wind</th>
                                            <th data-field="airconditioning_hydro">Air Conditioning / Hydro</th>
                                            <th data-field="appliances_wind">Air Conditioning / Biomas</th>
                                            <th data-field="appliances_hydro">Air Conditioning / Tidal</th>
                                            <th data-field="appliances_hydro">Air Conditioning / Nuclear</th>
                                            
                                            <th data-field="waterheating_elec">Water Heating / Electricity</th>
                                            <th data-field="waterheating_naturalgas">Water Heating / Natural Gas</th>
                                            <th data-field="waterheating_fuelkerosene" >Water Heating / Fuel oil or Kerosene</th>
                                            <th data-field="waterheating_wood">Water Heating / Wood</th>
                                            <th data-field="waterheating_propane">Water Heating / Propane</th>
                                            <th data-field="waterheating_wind">Water Heating / Wind</th>
                                            <th data-field="waterheating_hydro">Water Heating / Hydro</th>
                                             <th data-field="appliances_wind">Water Heating / Biomas</th>
                                            <th data-field="appliances_hydro">Water Heating / Tidal</th>
                                            <th data-field="appliances_hydro">Water Heating / Nuclear</th>
                                            <th data-field="eidt"></th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        		@foreach($property as $property)
                                                <tr id="{{ $property->id }}">
                                                    <td>{{ $property->id }}</td>
                                                    <td>{{ $property->country }}</td>
                                                    <td>
                                                    @if($property->zipcode == null)
                                                		N/A
                                                    @else
                                                    {{ $property->zipcode }} 
                                                    @endif
                                                   
                                                    </td>
                                                    <td>{{ $property->powertype }}</td>
                                                    <td>{{ $property->numberindividusalhousehold }}</td>
                                                    <td>
                                                    @if($property->own_or_rent == null)
                                                		N/A
                                                    @else
                                                    {{$property->own_or_rent }} 
                                                    @endif
                                                   
                                                    
                                                    </td>
                                                    <td>
                                                    @if($property->single_or_apartment_or_mobilehome == null)
                                                		N/A
                                                    @else
                                                    {{$property->single_or_apartment_or_mobilehome }} 
                                                    @endif
                                                    
                                                    </td> 
                                                    <td>
                                                    @if($property->single_detached_or_attached == null)
                                                		N/A
                                                    @else
                                                    {{$property->single_detached_or_attached }} 
                                                    @endif
                                                   
                                                    
                                                    </td>
                                                    <td>
                                                    @if($property->apartment_4_unit_or_5_building == null)
                                                		N/A
                                                    @else
                                                    {{$property->apartment_4_unit_or_5_building }} 
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->year_build == null)
                                                		N/A
                                                    @else
                                                    {{$property->year_build }} 
                                                    @endif
                                                    </td> 
                                                    <td>
                                                    @if($property->square_footage == null)
                                                		N/A
                                                    @else
                                                    {{$property->square_footage }} 
                                                    @endif
                                                   </td>
                                                    <td>
                                                     @if($property->serviceyear == null)
                                                		N/A
                                                    @else
                                                    {{$property->serviceyear }} 
                                                    @endif
                                                    
                                                    </td>
                                                    <td>
                                                    @if($property->appliances_elec == null)
                                                		N/A
                                                    @else
                                                    {{ $property->appliances_elec }} {{$property->powerusedelectricity}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                     @if($property->appliances_naturalgas == null)
                                                   N/A 
                                                     @else
                                                    {{ $property->appliances_naturalgas }} {{$property->powerusednaturalgas}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                     @if($property->appliances_fuelkarosane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->appliances_fuelkarosane }} {{$property->powerusedpoeloilkarosane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->appliances_wood == null)
                                                    N/A
                                                     @else
                                                    {{ $property->appliances_wood }} {{$property->powerusedwood}}
                                                    @endif
                                                    
                                                    </td>
                                                    <td>
                                                    @if($property->appliances_propane == null)
                                                   N/A 
                                                     @else
                                                    {{ $property->appliances_propane }} {{$property->powerusedpropane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->appliances_wind == null)
                                                     N/A
                                                     @else
                                                   {{ $property->appliances_wind }} {{$property->powerusedwind}}
                                                    @endif
                                                    
                                                   </td>
                                                    <td>
                                                    @if($property->appliances_hydro == null)
                                                   N/A
                                                     @else
                                                     {{ $property->appliances_hydro }} {{$property->powerusedhydro}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->appliances_biomass == null)
                                                    N/A
                                                     @else
                                                    {{ $property->appliances_biomass }} {{$property->powerusedbiomass}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->appliances_tidal == null)
                                                    N/A
                                                     @else
                                                    {{ $property->appliances_tidal }} {{$property->powerusedtidal}}
                                                    @endif
                                                    
                                                    </td>
                                                    <td>
                                                    @if($property->appliances_nuclear == null)
                                                    N/A
                                                     @else
                                                    {{ $property->appliances_nuclear }} {{$property->powerusednuclear}}
                                                    @endif
                                                    </td>
                                                    
                                                    
                                                    
                                                    <td>
                                                    @if($property->electronics_elec == null)
                                                   N/A 
                                                     @else
                                                    {{ $property->electronics_elec }} {{$property->powerusedelectricity}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_naturalgas == null)
                                                    N/A
                                                     @else
                                                    {{ $property->electronics_naturalgas }} {{$property->powerusednaturalgas}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_fuelkarosane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->electronics_fuelkarosane }} {{$property->powerusedpoeloilkarosane}}
                                                    @endif
                                                    
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_wood == null)
                                                     N/A
                                                     @else
                                                   {{ $property->electronics_wood }} {{$property->powerusedwood}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_propane == null)
                                                     N/A
                                                     @else
                                                   {{ $property->electronics_propane }} {{$property->powerusedpropane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_wind == null)
                                                    N/A
                                                     @else
                                                    {{ $property->electronics_wind }} {{$property->powerusedwind}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_hydro == null)
                                                    N/A
                                                     @else
                                                    {{ $property->electronics_hydro }} {{$property->powerusedhydro}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_biomass == null)
                                                    N/A
                                                     @else
                                                    {{ $property->electronics_biomass }} {{$property->powerusedbiomass}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_tidal == null)
                                                    N/A
                                                     @else
                                                    {{ $property->electronics_tidal }} {{$property->powerusedtidal}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->electronics_nuclear == null)
                                                    N/A
                                                     @else
                                                    {{ $property->electronics_nuclear }} {{$property->powerusednuclear}}
                                                    @endif
                                                    </td>
                                                    
                                                    <td>
                                                    @if($property->lighting_elec == null)
                                                    N/A
                                                     @else
                                                    {{ $property->lighting_elec }} {{$property->powerusedelectricity}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->lighting_naturalgas == null)
                                                    N/A
                                                     @else
                                                    {{ $property->lighting_naturalgas }} {{$property->powerusednaturalgas}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->lighting_fuelkarosane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->lighting_fuelkarosane }} {{$property->powerusedpoeloilkarosane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->lighting_wood == null)
                                                    N/A
                                                     @else
                                                    {{ $property->lighting_wood }} {{$property->powerusedwood}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->lighting_propane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->lighting_propane }} {{$property->powerusedpropane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->lighting_wind == null)
                                                    N/A
                                                     @else
                                                    {{ $property->lighting_wind }} {{$property->powerusedwind}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->lighting_hydro == null)
                                                     N/A
                                                     @else
                                                   {{ $property->lighting_hydro }} {{$property->powerusedhydro}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                     @if($property->lighting_biomass == null)
                                                     N/A
                                                     @else
                                                   {{ $property->lighting_biomass }} {{$property->powerusedbiomass}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->lighting_tidal == null)
                                                    N/A
                                                     @else
                                                    {{ $property->lighting_tidal }} {{$property->powerusedtidal}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->lighting_nuclear == null)
                                                    N/A
                                                     @else
                                                    {{ $property->lighting_nuclear }} {{$property->powerusednuclear}}
                                                    @endif
                                                    </td>
                                                    
                                                    <td>
                                                    @if($property->spaceheating_elec == null)
                                                    N/A
                                                     @else
                                                    {{ $property->spaceheating_elec }} {{$property->powerusedelectricity}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->spaceheating_naturalgas == null)
                                                    N/A
                                                     @else
                                                    {{ $property->spaceheating_naturalgas }} {{$property->powerusednaturalgas}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->spaceheating_fuelkarosane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->spaceheating_fuelkarosane }} {{$property->powerusedpoeloilkarosane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->spaceheating_wood == null)
                                                     N/A
                                                     @else
                                                   {{ $property->spaceheating_wood }} {{$property->powerusedwood}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->spaceheating_propane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->spaceheating_propane}} {{$property->powerusedpropane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->spaceheating_wind == null)
                                                    N/A
                                                     @else
                                                    {{ $property->spaceheating_wind}} {{$property->powerusedwind}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                     @if($property->spaceheating_hydro == null)
                                                    N/A
                                                     @else
                                                    {{ $property->spaceheating_hydro}} {{$property->powerusedhydro}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->spaceheating_biomass == null)
                                                   N/A
                                                     @else
                                                     {{ $property->spaceheating_biomass}} {{$property->powerusedbiomass}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->spaceheating_tidal == null)
                                                   N/A
                                                     @else
                                                     {{ $property->spaceheating_tidal}} {{$property->powerusedtidal}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->spaceheating_nuclear == null)
                                                    N/A
                                                     @else
                                                    {{ $property->spaceheating_nuclear}} {{$property->powerusednuclear}}
                                                    @endif
                                                    </td>
                                                    
                                                    <td>
                                                    @if($property->airconditioning_elec == null)
                                                   N/A
                                                     @else
                                                     {{ $property->airconditioning_elec}} {{$property->powerusedelectricity}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_naturalgas == null)
                                                   N/A
                                                     @else
                                                     {{ $property->airconditioning_naturalgas}} {{$property->powerusednaturalgas}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_fuelkarosane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->airconditioning_fuelkarosane}} {{$property->powerusedpoeloilkarosane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_wood == null)
                                                    N/A
                                                     @else
                                                    {{ $property->airconditioning_wood}} {{$property->powerusedwood}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_propane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->airconditioning_propane}} {{$property->powerusedpropane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_wind == null)
                                                    N/A
                                                     @else
                                                    {{ $property->airconditioning_wind}} {{$property->powerusedwind}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_hydro == null)
                                                    N/A
                                                     @else
                                                    {{ $property->airconditioning_hydro}} {{$property->powerusedhydro}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_biomass == null)
                                                    N/A
                                                     @else
                                                    {{ $property->airconditioning_biomass}} {{$property->powerusedbiomass}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_tidal == null)
                                                    N/A
                                                     @else
                                                    {{ $property->airconditioning_tidal}} {{$property->powerusedtidal}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->airconditioning_nuclear == null)
                                                    N/A
                                                     @else
                                                    {{ $property->airconditioning_nuclear}} {{$property->powerusednuclear}}
                                                    @endif
                                                    </td>
                                                    
                                                    
                                                    <td>
                                                    @if($property->waterheating_elec == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_elec}} {{$property->powerusedelectricity}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_naturalgas == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_naturalgas }} {{$property->powerusednaturalgas}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_fuelkarosane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_fuelkarosane}} {{$property->powerusedpoeloilkarosane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_wood == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_wood}} {{$property->powerusedwood}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_propane == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_propane}} {{$property->powerusedpropane}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_wind == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_wind}} {{$property->powerusedwind}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_hydro == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_hydro}} {{$property->powerusedhydro}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_biomass == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_biomass}} {{$property->powerusedbiomass}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_tidal == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_tidal}} {{$property->powerusedtidal}}
                                                    @endif
                                                    </td>
                                                    <td>
                                                    @if($property->waterheating_nuclear == null)
                                                    N/A
                                                     @else
                                                    {{ $property->waterheating_nuclear}} {{$property->powerusednuclear}}
                                                    @endif
                                                    </td>
                                                    
                                                    
                                                    
                                                    <td><a id="eidtitem" data-confirm="Are you sure to Edit this item?" href="property/{{ $property->id }}/edit">Eidit</a> <a id="confirmation" data-confirm="Are you sure to delete this item?" href="property/{{ $property->id }}/delet">Delet</a></td>
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
                                <a  href="{{route('enter')}}" class="enter-now"> Enter Another One</a>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
            		@else
                <div class="col-md-3"><h3>No data to show</h3></div>
                <div class="col-md-3">
                <a  href="{{route('enter')}}" class="enter-now"> Enter now</a>
            </div>
                @endif
                
        </div>
    </div>

@endsection
