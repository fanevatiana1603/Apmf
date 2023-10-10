
@extends('layouts.base')

@section('content')
                            <div class="text-center">
                                <div class="col-lg-6 d-none d-lg-block mx-auto my-auto"> <img src="/img/logo.png"> </div>
                                <h1 class="h4 text-gray-900 mb-4"><marquee> Agence Portuaire, Maritime et Fluviale</marquee>  </h1>

                            </div>
                            <form class="user" method="POST" action="{{ route('register') }}">
                            @csrf
                                
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                                            placeholder="Name">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Email Address">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"
                                         placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password">
                                    </div>
                                </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        {{ __('Register') }}
                                    </button>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                                    </div>
                            </form>
@endsection
