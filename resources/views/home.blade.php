@extends('layouts.app')
@include('layouts.navbar')

<table class="table">
    <thead>
    <tr>
        <th><abbr title="Position">ID</abbr></th>
        <th>Nombre</th>
        <th><abbr title="Played">Precio</abbr></th>
        <th><abbr title="Won">Acciones</abbr></th>
    </tr>
    </thead>
    <tbody>
    @foreach($libros as $libro)
        <tr>
            <th scope="row">{{$libro['id']}}</th>
            <td>{{$libro['nombre']}}</td>
            <td>{{$libro['price']}}</td>
            <td>
                <button class="button is-primary">Comprar</button>
                <button class="button is-danger">Detalle</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
