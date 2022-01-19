
@php 
    $genData = App\generalInfo::get()->first();
    $app_logo = "";
    $app_name = "";
    if ($genData && $genData->logo) {
        $app_logo = $genData->logo;
    }
    if ($genData && $genData->name) {
        $app_name = $genData->name;
    }
@endphp
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>{{$app_name}} - Admin & Dashboard </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

        <!-- DataTables -->
        <link href="{{asset('backend/plugins/datatables/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/plugins/datatables/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('backend/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 

        <!-- jvectormap -->
        <link href="{{asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">

        <!-- dropify -->
        <link href="{{asset('backend/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">

        <!-- App css -->
        <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

        <style>
.form-group img.logo {
    max-width: 120px;
    background: #f1f1f1;
    padding: 10px;
}
.table td img {
    max-width: 100px;
    max-height: 80px;
}
.brand .logo { 
    display: block;
    width: max-content;
    margin: auto;
    margin-top: 10px;
}
.tox.tox-silver-sink.tox-tinymce-aux{
    display: none
}
textarea {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: .8125rem;
    font-weight: 400;
    line-height: 1.5;
    color: #303e67;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e3ebf6;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
}
        </style>

    </head>



    <body class="">
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                @if ($app_logo) 
                    <a href="/admin" class="logo"><img src="{{'/'.$app_logo}}" alt="logo-small" class="d-block"></a>
                @endif
            </div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu">
                    <li class="menu-label mt-0">Main</li> 
                    <li>
                        <a href="javascript: void(0);"> <i data-feather="home" class="align-self-center menu-icon"></i><span>Genaral</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/admin/genaral"><i class="ti-control-record"></i>Genaral</a></li> 
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"> <i class="ti-user"></i><span>About</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/admin/about"><i class="ti-control-record"></i>About</a></li> 
                            <li class="nav-item"><a class="nav-link" href="/admin/mission"><i class="ti-control-record"></i>Mission</a></li> 
                            <li class="nav-item"><a class="nav-link" href="/admin/vision"><i class="ti-control-record"></i>Vision</a></li> 
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"> <i class="ti-crown"></i><span>Brands</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/admin/brands"><i class="ti-control-record"></i>Brands</a></li> 
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"> <i class="ti-rss"></i><span>Blogs</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/admin/blogs"><i class="ti-control-record"></i>Blogs</a></li> 
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"> <i class="ti-write"></i><span>We help</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/admin/tutorial"><i class="ti-control-record"></i>We help</a></li> 
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"> <i class="ti-ruler-pencil"></i><span>Projects</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/admin/project"><i class="ti-control-record"></i>Project</a></li> 
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"> <i class="ti-id-badge"></i><span>Testimonials</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/admin/testimonial"><i class="ti-control-record"></i>Testimonial</a></li> 
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"> <i class="ti-receipt"></i><span>Team reviews</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/admin/team-review"><i class="ti-control-record"></i>Team review</a></li> 
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"> <i class="ti-info-alt"></i><span>What we do</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/admin/what-we-do"><i class="ti-control-record"></i>What we do</a></li> 
                            <li class="nav-item"><a class="nav-link" href="/admin/services"><i class="ti-control-record"></i>Services</a></li> 
                            <li class="nav-item"><a class="nav-link" href="/admin/more-info"><i class="ti-control-record"></i>More info</a></li> 
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"> <i class="ti-support"></i><span>Careers</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/admin/career"><i class="ti-control-record"></i>Career</a></li> 
                            <li class="nav-item"><a class="nav-link" href="/admin/core-values"><i class="ti-control-record"></i>Core Values</a></li> 
                        </ul>
                    </li>
                    <li>
                        <a href="javascript: void(0);"> <i class="ti-comments-smiley"></i><span>Subscribed</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/admin/subscribed"><i class="ti-control-record"></i>Subscribed</a></li>  
                        </ul>
                    </li> 
                    <li>
                        <a href="javascript: void(0);"> <i class="ti-gallery"></i><span>Other Medias</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="/admin/other-medias"><i class="ti-control-record"></i>Other Medias</a></li>  
                        </ul>
                    </li> 
                </ul> 
            </div>
        </div>
        <!-- end left-sidenav-->
        

        <div class="page-wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">            
                <!-- Navbar -->
                <nav class="navbar-custom">    
                    <ul class="list-unstyled topbar-nav float-end mb-0">    
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <span class="ms-1 nav-user-name hidden-sm">Welcome {{ Auth::user()->name }} </span>                               
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="/admin"><i data-feather="user" class="align-self-center icon-xs icon-dual me-1"></i> Profile</a> 
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> Logout
                                </a>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul><!--end topbar-nav-->
        
                    <ul class="list-unstyled topbar-nav mb-0">                        
                        <li>
                            <button class="nav-link button-menu-mobile">
                                <i data-feather="menu" class="align-self-center topbar-icon"></i>
                            </button>
                        </li> 
                        <li class="creat-btn">
                            <div class="nav-link">
                                <a class=" btn btn-sm btn-soft-primary" target="_blank" href="/" role="button"><i class="far fa-eye"></i> View site</a>
                            </div>                                
                        </li>                           
                    </ul>
                </nav>
                <!-- end navbar-->
            </div>
            <!-- Top Bar End -->

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-fluid"> 
                    <br>
                    @yield('backend_content');
                     
                </div><!-- container -->
 
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->
 
        <!-- jQuery  -->
        <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/metismenu.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/waves.js')}}"></script>
        <script src="{{asset('backend/assets/js/feather.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/simplebar.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/moment.js')}}"></script>
        <script src="{{asset('backend/plugins/daterangepicker/daterangepicker.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/dataTables.bootstrap5.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('backend/plugins/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/buttons.colVis.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{asset('backend/plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('backend/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{asset('backend/assets/pages/jquery.datatable.init.js')}}"></script>
        <!-- Upload file -->
        <script src="{{asset('backend/plugins/dropify/js/dropify.min.js')}}"></script>
        <script src="{{asset('backend/assets/pages/jquery.form-upload.init.js')}}"></script>

        <script src="{{asset('backend/plugins/apex-charts/apexcharts.min.js')}}"></script>
        <script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('backend/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
        <script src="{{asset('backend/assets/pages/jquery.analytics_dashboard.init.js')}}"></script>

        <!--Wysiwig js-->
        <script src="{{asset('backend/plugins/tinymce/tinymce.min.js')}}"></script>
        <script src="{{asset('backend/assets/pages/jquery.form-editor.init.js')}}"></script>
        
        <!-- App js -->
        <script src="{{asset('backend/assets/js/app.js')}}"></script>
        
    </body>

</html>