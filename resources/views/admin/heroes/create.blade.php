@extends('layouts.app')

@section('content')
<h2>Admin</h2>
<h1>Crear nuevo Heroe</h1>

<form action="{{ route('heroes.store') }}" method="post" class="mt-4 mb-4">
    @include('admin.heroes.form')
    <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection