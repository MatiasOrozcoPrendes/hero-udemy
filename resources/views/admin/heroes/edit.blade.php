@extends('layouts.app')

@section('content')
<h2>Admin</h2>
<h1>Editando Heroe {{ $hero->name }}</h1>

<form action="{{ route('heroes.update', ['hero' => $hero]) }}" method="post" class="mt-4 mb-4">
    @method('PUT')
    @include('admin.heroes.form')
    <button type="submit" class="btn btn-warning">Editar</button>

</form>

@endsection