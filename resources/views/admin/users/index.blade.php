@extends('layouts.dash')

@section('content')
 <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Liste des Utilisateurs</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Liste des utilisateurs</li>
                        </ol>
                    </div>
                </div>
<div class="card shadow-lg ">
    <div class="card-body">
        <h3 class="card-title text-center">LISTE DES UTILISATEURS</h3>
        <hr class="sidebar-divider">
        <table class="table" id="table_id" >
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    
                    <th scope="col">Action</th>
                </tr>
            </thead>
                @foreach ($users as $value)
                <tr>
                    <th scope="row"><img src="/image/{{$value->image  }}" class="rounded-circle" style="max-width: 40px; height: auto;"></th>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{ implode(' - ', $value->roles()->pluck('name')->toArray() ) }}</td>
                    <td>
                        @can('edit-users')
                        <a href="{{route('admin.users.edit', $value->id)}}" class=" btn btn-rounded btn-outline-success"><i class="icon-note"></i></a>
                        @endcan
                        <form action="{{route('admin.users.destroy', $value->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    @can('delete-users')
                            <button type="submit" class="btn btn-rounded btn-outline-danger rounded-pil"><i class="icon-trash"></i></button>
                                @endcan
                        </form>
                    
                    </td>
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
               
                   