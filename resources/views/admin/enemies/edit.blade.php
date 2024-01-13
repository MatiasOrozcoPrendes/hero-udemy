@extends('layouts.app')

@section('content')
<h2>Admin</h2>
<h1>Editando Enemigo {{ $enemy->name }}</h1>

<form action="{{ route('enemies.update', ['enemy' => $enemy]) }}" method="post" class="mt-4 mb-4">
    @method('PUT')
    @include('admin.enemies.form')
    <button type="submit" class="btn btn-warning">Editar</button>

</form>

@endsection