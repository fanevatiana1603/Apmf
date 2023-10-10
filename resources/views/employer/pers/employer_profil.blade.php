@extends('layouts.dash')

@section('content')

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Profil</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Liste des employés</li>
                <li class="breadcrumb-item active">Profil</li>
            </ol>
        </div>
    </div>

   

    <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="/image/{{$employe->img}}"  width="150">
                                    <h2 class="card-title m-t-10">{{$employe->nom}}</h2>
                                    <h4 class="card-subtitle">{{$employe->prenom}}</h4>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#profile" role="tab" aria-selected="true">Profile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Modifier</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active show" id="profile" role="tabpanel">
                                    <div class="card-body">
                                            <form class="form-horizontal" role="form">
                                                <div class="form-body">
                                                    <h3 class="box-title">Informations sur la personne</h3>
                                                    <hr class="m-t-0 m-b-40">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-4">Nom:</label>
                                                                
                                                                    <p class="form-control-static"> {{$employe->nom}} </p>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-4">Prenom:</label>
                                                                    <p class="form-control-static"> {{$employe->prenom}} </p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-4">Matricule:</label>
                                                                    <p class="form-control-static"> {{$employe->matriculation}} </p>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-4">Email:</label>
                                                                    <p class="form-control-static"> {{$employe->email}} </p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-4">Poste:</label>
                                                                    <p class="form-control-static"> {{$employe->nom_poste}} </p>
                                                            </div>
                                                        </div>
                                                        <!--/span-->
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-4">Direction:</label>
                                                                    <p class="form-control-static"> {{$employe->nom_direction}} </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-body">
                                                    <h3 class="box-title">Flotte</h3>
                                                    <hr class="m-t-0 m-b-40">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-4">Contact :</label>
                                                                    <p class="form-control-static"> {{$employe->contact}} </p>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group row">
                                                                <label class="control-label text-right col-md-4">Status :</label>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                    </div>
                                </div>
                                <!--second tab-->
                                
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form action=" " method="POST"  class="form-horizontal form-material">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group pt-2">
                                              <label for="img" class="btn btn-primary">
                                                  <i class="mdi mdi-camera"></i> Sélectionner un fichier
                                              </label>
                                              <input type="file" class="form-control" id="img" name="img" value="{{old('img') ?? $employe->img}}" style="display: none;">
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Nom</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="nom" value="{{old('nom') ?? $employe->nom}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Prenom</label>
                                                <div class="col-md-12">
                                                    <input type="text"  class="form-control form-control-line" name="prenom" value="{{old('prenom') ?? $employe->prenom}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Matricule</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="matriculation" class="form-control form-control-line" value="{{old('matriculation') ?? $employe->matriculation}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" name="email" class="form-control form-control-line" value="{{old('email') ?? $employe->email}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Contact</label>
                                                <div class="col-md-12">
                                                    <input type="text"  class="form-control form-control-line" name="contact" value="{{old('contact') ?? $employe->contact}}"></input>
                                                </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>


@endsection
               