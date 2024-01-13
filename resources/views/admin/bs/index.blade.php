@extends('layouts.app')

@section('content')

<h1>Sistema de Batalla</h1>

<div class="row text-white text-center mt-5">
    <div class="col-5 bg-primary">
        <h2>Heroe</h2>
    </div>
    <div class="col-2 bg-warning">
        <h2>vs</h2>
    </div>
    <div class="col-5 bg-danger">
        <h2>Enemy</h2>
    </div>
</div>

<div class="row text-white text-center mt-2 bg-info">
    <h2>Eventos de Batalla</h2>
</div>

<div class="mt-5">
    <div class="alert alert-success" role="alert">
        Heroe hace un ataque de 10 de daño sobre el enemigo
    </div>
    <div class="alert alert-danger" role="alert">
        Enemigo hace un ataque de 10 de daño sobre el heroe
    </div>
</div>


@endsection