@extends('layouts.dash')

@section('content')
 <div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Nouveau employé</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active"> Nouveau employé</li>
        </ol>
    </div>
</div>

<div class="card">
                            <div class="card-body">
                                <center >
                                    <h4 class="card-title"></h4>
                                </center>
                                
                                <form action="{{route('employer.employer.store')}}" method="POST" class="form-material m-t-40 row">
                                    @csrf


                                    <div class="form-group col-md-3 m-t-20">
                                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new" name="img">Selectionner une image</span> <span class="fileinput-exists">Change</span>
                                            <input type="hidden" name="img"><input type="file" name="img"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput" name="img">Remove</a> </div>
                                    </div>
                                    <div class="form-group col-md-3 m-t-10">
                                        
                                    </div>
                                    <div class="form-group col-md-3 m-t-10"></div>


                                    <div class="form-group col-md-6 m-t-20">
                                        <input type="text" class="form-control form-control-line" placeholder="Nom : " name="nom"> </div>

                                    <div class="form-group col-md-6 m-t-20">
                                        <input type="text"  name="prenom" class="form-control" placeholder="Prenom : "> </div>

                                    <div class="form-group col-md-6 m-t-20">
                                        <input type="text"  name="matriculation" class="form-control" placeholder="Matricule : "> </div>

                                    <div class="form-group col-md-6 m-t-20">
                                        <select class="form-control" name="id_poste">
                                            <option>Poste employe</option>
                                            @foreach($employe as $employe)
                                            <option value="{{$employe->id}}">{{$employe->nom_poste}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6 m-t-20">
                                        <input type="email" class="form-control form-control-line" placeholder="Email : " name="email"> </div>
                                    <div class="form-group col-md-6 m-t-20">
                                        <input type="text" name="contact" class="form-control" placeholder="Contact : "> </div>

                                        

                                     <div class="col text-center">
                                        <button class="btn btn-md btn-rounded btn-primary">Enregistrer</button>     
                                    </div>
                                </form>
                            </div>
                        </div>
@endsection
               
                   