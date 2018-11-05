
<header class="topbar">
<nav class="navbar top-navbar navbar-expand-md navbar-dark">
<!-- ============================================================== -->
<!-- Logo -->
<!-- ============================================================== -->
<div class="navbar-header">
    <a class="navbar-brand" href="{{route('/')}}">
        <!-- Logo icon --><b>
            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
            <!-- Dark Logo icon -->
            <img src="{{asset('/')}}/asets/images/logo-icon.png" alt="homepage" class="dark-logo" />
            <!-- Light Logo icon -->
            <img src="{{asset('/')}}/asets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
        </b>
        <!--End Logo icon -->
        <!-- Logo text --><span>
         <!-- dark Logo text -->
         <img src="{{asset('/')}}/asets/images/logo-text.png" alt="homepage" class="dark-logo" />
         <!-- Light Logo text -->    
         <img src="{{asset('/')}}/asets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
</div>
<!-- ============================================================== -->
<!-- End Logo -->
<!-- ============================================================== -->
<div class="navbar-collapse">
    <!-- ============================================================== -->
    <!-- toggle and nav items -->
    <!-- ============================================================== -->
    <ul class="navbar-nav mr-auto">
        <!-- This is  -->
        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
        <li class="nav-item"> <a class="nav-link sidebartoggler d-none waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
        <!-- ============================================================== -->
        <!-- Search -->
        <!-- ============================================================== -->
        <li class="nav-item">
            <form class="app-search d-none d-md-block d-lg-block">
                <input type="text" class="form-control" placeholder="Search & enter">
            </form>
        </li>
    </ul>
    