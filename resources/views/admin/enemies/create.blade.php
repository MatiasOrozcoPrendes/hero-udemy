@extends('layouts.app')

@section('content')
<h2>Admin</h2>
<h1>Crear nuevo Enemigo</h1>

<form action="{{ route('enemies.store') }}" method="post" class="mt-4 mb-4">
    @include('admin.enemies.form')
    <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection