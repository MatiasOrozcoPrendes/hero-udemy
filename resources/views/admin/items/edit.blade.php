@extends('layouts.app')

@section('content')
<h2>Admin</h2>
<h1>Editando Item {{ $item->name }}</h1>

<form action="{{ route('items.update', ['item' => $item]) }}" method="post" class="mt-4 mb-4">
    @method('PUT')
    @include('admin.items.form')
    <button type="submit" class="btn btn-warning">Editar</button>
</form>

@endsection