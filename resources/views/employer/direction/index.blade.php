@extends('layouts.dash')

@section('content')
 <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Liste des directions et Postes</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Liste des directions et Postes</li>
                        </ol>
                    </div>
                </div>
                
 @yield('andrana')


<div class="card shadow-lg ">
    <div class="card-body">
        <h3 class="card-title text-center">LISTE DES POSTES ET DIRECTIONS</h3>
        <hr class="sidebar-divider">
        <a href="{{route('employer.poste.create')}}" type="submit" class="btn btn-rounded btn-outline-secondary" ><i class="mdi mdi-loupe"></i> Nouveau</a>
        <table class="table text-center" id="table_id" >
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Direction</th>
                    <th scope="col">Poste</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
                    @foreach($direction as $direction)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$direction->nom_direction}}</td>
                    <td>{{$direction->nom_poste}}</td>
                    <td>
                        <a href="{{route('employer.poste.edit',$direction->id)}}" class=" btn btn-rounded btn-outline-success"><i class="icon-note"></i></a>
                        <form action="{{route('employer.poste.destroy',$direction->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                            <button type="submit" class="btn btn-rounded btn-outline-danger rounded-pil"><i class="icon-trash"></i></button>
                        </form>
                            
                    </td>    
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
               
                   