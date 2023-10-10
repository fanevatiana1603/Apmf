@extends('layouts.dash')

@section('content')
 <div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Liste des Utilisateurs</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Liste des utilisateurs</li>
            <li class="breadcrumb-item active">Modificatier:  <strong>{{$user->name}}</strong></li>
        </ol>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header text-center"><h3>Modifier:<strong>{{$user->name}}</strong></h3></div> 

                <div class="card-body ">
                    <form action="{{route('admin.users.update',$user)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>
                                        <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name')?? $user->name}}"
                                            >

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Address Email') }}</label>
                                        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email }}" required autocomplete="email"
                                            >

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                    </div>

                                    <div class="pt-2">
                                      <label for="image" class="btn btn-primary">
                                          <i class="mdi mdi-camera"></i> Sélectionner un fichier
                                      </label>
                                      <input type="file" class="form-control" id="image" name="image" value="{{old('image') ?? $user->image}}" style="display: none;">
                                    </div>

                                    <hr class="sidebar-divider my-0">
                        @foreach($roles as $role)

                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" name="roles[]" value="{{$role->id}}" id="{{$role->id}}" @if ($user->roles->pluck('id')->contains ($role->id)) checked @endif >
                                <label for="{{$role->id}}" class="form-check-label">{{$role->name}}</label>
                            </div>
                        @endforeach
                        <div class="text-center">
                        <button type="submit" class="btn btn-primary"><i class="mdi mdi-check"> Enregistrer la modification</i></button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
