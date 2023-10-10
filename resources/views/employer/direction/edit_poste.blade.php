@extends('layouts.dash')

@section('content')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Nouveau Poste</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Nouveau Poste</li>

        </ol>
    </div>
</div>
<div class="card shadow-lg col-md-8 ">
    <div class="card-body">
        <h4 class="card-title">Basic Material inputs</h4>
        <form action="{{route('employer.poste.update',$poste)}}" method="POST">
            @csrf
            @method('PATCH')
            <label>Direction</label>
                <input type="text" value="{{ old('id_direction')?? $poste->id_direction}}">
            <div class="form-group">
                <label>Poste</label>
                <input type="text" class="form-control" name="nom_poste" value="{{ old('nom_poste')?? $poste->nom_poste}}">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary"><i class="mdi mdi-check"> Enregistrer la modification</i></button>
            </div>
            
        </form>
    </div>
</div>



@endsection