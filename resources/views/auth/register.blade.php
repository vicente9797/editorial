@extends('layouts.app')

@section('content')
    <section class="vh-100 d-flex align-items-center" style="height: 100vh">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                         class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Registrate</p>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus
                                   placeholder="Ingresa tu nombre" />
                            <label class="form-label" for="email">Nombre</label>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus
                                   placeholder="Ingresa un correo valido" />
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <label class="form-label" for="email">Correo electronico</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" name="password" required placeholder="Ingresa tu contraseña" >
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <label class="form-label" for="password">Contraseña</label>
                        </div>

                        <div class="form-outline mb-3">
                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password_confirmation" name="password_confirmation" required placeholder="Reingresa tu contraseña" >
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <label class="form-label" for="password">Confirma tu Contraseña</label>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Registrar</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Ya tienes una cuenta? <a href="login"
                                                                                             class="link-danger">Ingresar</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
