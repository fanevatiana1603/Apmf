@extends('layouts.dash')

@section('content')
 <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Liste des employés</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Liste des employés</li>
                        </ol>
                    </div>
                </div>
<div class="card shadow-lg ">
    <div class="card-body">
        <h2 class="card-title text-center">LISTE DES EMPLOYES</h2>
        <hr class="sidebar-divider">
        <a href="{{route('employer.employer.create')}}" type="submit" class="btn btn-rounded btn-outline-secondary" ><i class="mdi mdi-loupe"></i> Nouveau</a>
        <table class="table text-center" id="table_id" >
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Matricule</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
                    @foreach($employe as $employe)
                <tr>
                    <th scope="row"><img src="/image/{{$employe->img  }}" class="rounded-circle" style="max-width: 40px; height: auto;"></th>
                    <th scope="row">{{$employe->matriculation}}</th>
                    <td>{{$employe->nom}} <br> {{$employe->prenom}}</td>
                    <td>{{$employe->email}}</td>
                    <td>
                        <a href="{{route('employer.status.update',$employe->id)}}" class="btn btn-rounded btn-{{$employe->status ? 'warning' : 'danger'}}">
                            @if ($employe->status)
                                <i class=" mdi mdi-check"></i> <!-- Afficher une icône de coche pour "Active" -->
                            @else
                                <i class="mdi mdi-close"></i> <!-- Afficher une icône de croix pour "Inactive" -->
                            @endif
                        </a>
                    </td>
                    <td>
                        <a href="{{route('employer.employer.show',$employe->id)}}" class=" btn btn-rounded btn-outline-success"><i class="icon-eye"></i></a>
                        <form action="{{ route('employer.employer.destroy',$employe->id)}}" method="POST" class="d-inline">
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
               
                   