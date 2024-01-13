@extends('layouts.app')

@section('content')
<h2>Admin</h2>
<h1>Listas de Items</h1>

<div class="row">
    <!-- centro el boton -->
    <div class="col-12 text-center mb-2 mt-2">
        <a href="{{route('items.create')}}" class="btn btn-primary">Crear Item</a>
    </div>
</div>

<div class="row">
    <table class="table table-hover mt-3 mb-3">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">HP</th>
                <th scope="col">Ataque</th>
                <th scope="col">Defensa</th>
                <th scope="col">Suerte</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->hp }}</td>
                <td>{{ $item->atq }}</td>
                <td>{{ $item->def }}</td>
                <td>{{ $item->luck }}</td>
                <td>{{ $item->cost }}</td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning">Editar</a>
                        </div>
                        <div class="col-6">
                            <form action="{{ route('items.destroy', ['item' => $item]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $item->id }}">Eliminar</button>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="deleteModalLabel">Eliminar Item</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>¿Estas seguro que deseas eliminar el Item {{ $item->name }}?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection