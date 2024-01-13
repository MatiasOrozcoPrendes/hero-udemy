@extends('layouts.app')

@section('content')
<h2>Admin</h2>
<h1>Listas de Enemigos</h1>
<div class="row">
    <!-- centro el boton -->
    <div class="col-12 text-center mb-2 mt-2">
        <a href="{{route('enemies.create')}}" class="btn btn-primary">Crear Enemigo</a>
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
                <th scope="col">Monedas</th>
                <th scope="col">Experiencia</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($enemies as $enemy)
            <tr>
                <th scope="row">{{ $enemy->id }}</th>
                <td>{{ $enemy->name }}</td>
                <td>{{ $enemy->hp }}</td>
                <td>{{ $enemy->atq }}</td>
                <td>{{ $enemy->def }}</td>
                <td>{{ $enemy->coins }}</td>
                <td>{{ $enemy->xp }}</td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <a href="{{ route('enemies.edit', $enemy->id) }}" class="btn btn-warning">Editar</a>
                        </div>
                        <div class="col-6">
                            <form action="{{ route('enemies.destroy', ['enemy' => $enemy]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $enemy->id }}">Eliminar</button>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal{{ $enemy->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $enemy->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="deleteModalLabel">Eliminar Enemigo</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>¿Estas seguro que deseas eliminar el enemy {{ $enemy->name }}?</p>
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