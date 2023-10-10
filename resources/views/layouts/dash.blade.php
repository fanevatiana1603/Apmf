<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/img/logo.png')}}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{asset('css/colors/default.css')}}" id="theme" rel="stylesheet">

    <link href="{{asset('\assets\plugins\datatables\css\dataTables.bootstrap.min.css')}}" id="theme" rel="stylesheet">

    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}
    </style>
</head>

<body class="fix-header fix-sidebar card-no-border logo-center">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <img src="/img/logo.png" style="
                                            max-width: 65px;
                                            height: auto;
                                        ">
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-loupe"></i> Ajouter</a>
                            
                            <div class="dropdown-menu scale-up-left">
                                <form action="{{route('employer.employer.store')}}" method="POST">
                                        @csrf
                                <ul class="mega-dropdown-menu row">
                                    
                                        <li class="col-lg-2  m-b-30">
                                        <h4 class="m-b-20">PROFILE</h4>
                                        <!-- CAROUSEL -->
                                        <div class="">
                                            <div class=" " role="listbox">
                                                <label for="photo" class="btn btn-primary">
                                                    <i class="mdi mdi-camera"></i> 
                                                    Image
                                                </label>
                                                <input type="file" class="form-control" id="photo" name="photo"  style="display: none;">
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-5  m-b-30">
                                        <h4 class="m-b-20">A PROPOS</h4>
                                        <!-- Contact -->
                                        <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Matricule"> </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Nom "> </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Prenom"> </div>
                                            <div class="form-group">
                                                
                                             </div>
                                            
                                    </li>
                                    <li class="col-lg-5  m-b-30">
                                        <h4 class="m-b-20">CONTACT</h4>
                                        <!-- Contact -->
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Contact"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email"> </div>
                                            
                                    </li>
                                    
                                </ul>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info"><i class="mdi mdi-check"></i> Enregistrer</button>
                                </div>
                                </form>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>

                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notification</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <a href="#">
                                                <div class="user-img"> <img src="/assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#">
                                                <div class="user-img"> <img src="/assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/image/{{ Auth::user()->image }}" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="/image/{{ Auth::user()->image }}" alt="user"></div>
                                            <div class="u-text text-center">
                                                <h4>{{ Auth::user()->name }}</h4>
                                                <p class="text-muted">{{ Auth::user()->email }}</p> </div>
                                        </div>
                                    </li>
                                    
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{url('/home/profil')}}"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                   
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-power-off"></i>

                                                {{ __('Logout') }}
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                            </form>
                                        </a>


                                </ul>
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar text-center">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li>
                            <a class="has-arrow" href="{{url('/')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Tableau de bord </span></a>
                        </li>
                        <li>
                            <a class="has-arrow " href="{{route('admin.users.index')}}" aria-expanded="false"><i class="mdi mdi-account-multiple-outline"></i><span class="hide-menu">Liste des utilisateurs</span></a>
                        </li>
                        <li>
                            <a class="has-arrow " href="{{route('employer.poste.index')}}" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Direction & Poste</span></a>
                        </li>
                        <li class="two-column">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Liste des employes</span></a>
                            <ul aria-expanded="false" class="collapse">
                                 <li><a href="form-basic.html">AC</a></li>
                                <li><a href="form-layout.html">BIES</a></li>
                                <li><a href="form-addons.html">DAF</a></li>
                                <li><a href="form-material.html">DAGC</a></li>
                                <li><a href="form-float-input.html">DAIJE</a></li>
                                <li><a href="form-pickers.html">DAM</a></li>
                                <li><a href="form-upload.html">DAP</a></li>
                                <li><a href="form-mask.html">DG</a></li>
                                <li><a href="form-validation.html">DGA</a></li>
                                <li><a href="form-dropzone.html">DIGC</a></li>
                                <li><a href="form-icheck.html">DOM</a></li>
                                <li><a href="form-img-cropper.html">DPRF</a></li>
                                <li><a href="form-bootstrapwysihtml5.html">Representants APMF</a></li>
                                <li><a href="form-typehead.html">DR APMF</a></li>
                                <li><a href="form-wizard.html">Num. Vert APMF</a></li>
                                <li><a href="form-xeditable.html">IE</a></li>
                                <li><a href="{{route('employer.employer.index')}}">ALL IN ONE</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-headset"></i><span class="hide-menu">Lignes flottes</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="table-basic.html">Activee</a></li>
                                <li><a href="table-layout.html">Desactivee</a></li>
                                <li><a href="{{route('employer.flotte.index')}}">ALL IN ONE</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
       <div class="page-wrapper" style="min-height: 580px;">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
               @yield('content')
              
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer">
                    © Agence Portuaire, Maritime et Fluviale 
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
      <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/plugins/popper/popper.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="/assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="/assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="/assets/plugins/d3/d3.min.js"></script>
    <script src="/assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="/js/dashboard1.js"></script>

    <script src="\assets\plugins\datatables\js\jquery.dataTables.min.js"></script>
    <script src="\assets\plugins\datatables\js\dataTables.bootstrap.min.js"></script>

 <script>
        $(document).ready(function() {
            $('#table_id').DataTable({
                "lengthChange": false,
                "info":false,
                "pageLength": 4,
                "language": {
                    "emptyTable": "Aucun enregistrement trouvé",
                    "zeroRecords": "Aucun enregistrement correspondant trouvé", 
                    "search": 'Rechercher :',
                    "paginate":{
                        "first": 'Premier',
                        "previous": 'Précédent',
                        "next": 'Suivant',
                        "last": 'Dernier',
                    },
                },
                
            });
        });
 </script>       
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

        

    </script>
</body>

</html>