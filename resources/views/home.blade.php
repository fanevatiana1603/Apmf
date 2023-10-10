@extends('layouts.dash')

@section('content')
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Tableau de bord</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Tableau de bord</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <div class="d-flex m-t-10 justify-content-end">
                            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                                    <h3 class="text-themecolor">{{Auth::user()->name}}</h3>
                                    <hr>
                                    <i class="mdi mdi-account-settings-variant"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">{{$users}}</h2>
                                    <h6 class="text-muted">Total Utilisateur</h6></div>
                                <!-- Column -->
                                <div class="col text-right align-self-center">
                                    <div  class="css-bar m-b-0 css-bar-success css-bar-20">
                                        <i class="mdi mdi-account-settings-variant text-success mdi-36px"></i>
                                    </div>
                                </div>                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">{{$employe}}</h2>
                                    <h6 class="text-muted">Total Employes</h6></div>
                                <!-- Column -->
                                <div class="col text-right align-self-center">
                                    <div  class="css-bar m-b-0 css-bar-success css-bar-20">
                                        <i class="mdi mdi-account-settings-variant text-primary mdi-36px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">{{$actif}}</h2>
                                    <h6 class="text-muted">Flotte activées</h6></div>
                                <!-- Column -->
                                <div class="col text-right align-self-center">
                                    <div  class="css-bar m-b-0 css-bar-success css-bar-20">
                                        <i class="mdi mdi-headset text-warning mdi-36px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                            <!-- Row -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">{{$desactif}}</h2>
                                    <h6 class="text-muted">Flotte desactivées</h6></div>
                                <!-- Column -->
                                <div class="col text-right align-self-center">
                                    <div  class="css-bar m-b-0 css-bar-success css-bar-20">
                                        <i class="mdi mdi-headset text-danger mdi-36px"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
