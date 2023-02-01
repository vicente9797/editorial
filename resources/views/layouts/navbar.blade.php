@extends('layouts.app')
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item">
                Inicio
            </a>

            <a class="navbar-item">
                Documentation
            </a>

            <i class="fas fa-search"></i>

        </div>

        @if(auth()->user())
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link is-uppercase">
                    {{auth()->user()->name}}
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        Configuracion
                    </a>
                    <a class="navbar-item has-text-danger" href="{{route('logout')}}">
                        Cerrar Sesion
                    </a>
                </div>
            </div>
        @else
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-primary" href="{{route('register')}}">
                            <strong>Registrarse</strong>
                        </a>
                        <a class="button is-light" href="{{route('login')}}">
                            Ingresar
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>
</nav>
