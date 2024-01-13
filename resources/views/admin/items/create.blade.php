@extends('layouts.app')

@section('content')
<h2>Admin</h2>
<h1>Crear nuevo Item</h1>

<form action="{{ route('items.store') }}" method="post" class="mt-4 mb-4">
    @include('admin.items.form')
    <button type="submit" class="btn btn-primary">Crear</button>
</form>

@endsection