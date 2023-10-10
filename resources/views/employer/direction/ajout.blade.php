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
        <form action="{{route('employer.poste.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Direction</label>
                <select class="form-control" name="id_direction">
                    <option></option>
                    @foreach($direction as $direction)
                    <option value="{{$direction->id_direction}}">{{$direction->nom_direction}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Poste</label>
                <input type="text" class="form-control" name="nom_poste">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary"><i class="mdi mdi-check"> Enregistrer la modification</i></button>
            </div>
        </form>
    </div>
</div>



@endsection