@extends('layouts.app')

@section('content')
<h2>Admin</h2>
<h1>Listas de Heroes</h1>

<div class="row">
    <!-- centro el boton -->
    <div class="col-12 text-center mb-2 mt-2">
        <a href="{{route('heroes.create')}}" class="btn btn-primary">Crear Heroe</a>
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
                <th scope="col">Monedas</th>
                <th scope="col">Experiencia</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($heroes as $hero)
            <tr>
                <th scope="row">{{ $hero->id }}</th>
                <td>{{ $hero->name }}</td>
                <td>{{ $hero->hp }}</td>
                <td>{{ $hero->atq }}</td>
                <td>{{ $hero->def }}</td>
                <td>{{ $hero->luck }}</td>
                <td>{{ $hero->coins }}</td>
                <td>{{ $hero->xp }}</td>
                <td>
                    <div class="row">
                        <div class="col-6">
                            <a href="{{ route('heroes.edit', $hero->id) }}" class="btn btn-warning">Editar</a>
                        </div>
                        <div class="col-6">
                            <form action="{{ route('heroes.destroy', ['hero' => $hero]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $hero->id }}">Eliminar</button>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal{{ $hero->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $hero->id }}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="deleteModalLabel">Eliminar Heroe</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>¿Estas seguro que deseas eliminar el heroe {{ $hero->name }}?</p>
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