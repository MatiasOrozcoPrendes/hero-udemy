@csrf
<div class="form-group mt-2 mb-2">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" class="form-control" @isset($item) value="{{ $item->name }}" @endisset placeholder="Ingrese un Nombre" required>
</div>

<div class="form-group mt-2 mb-2">
    <label for="hp">HP</label>
    <input type="number" name="hp" id="hp" class="form-control" @isset($item) value="{{ $item->hp }}" @endisset placeholder="Ingrese los puntos de vida" required>
</div>

<div class="form-group mt-2 mb-2">
    <label for="atq">Ataque</label>
    <input type="number" name="atq" id="atq" class="form-control" @isset($item) value="{{ $item->atq }}" @endisset placeholder="Ingrese los puntos de ataque" required>
</div>

<div class="form-group mt-2 mb-2">
    <label for="def">Defensa</label>
    <input type="number" name="def" id="def" class="form-control" @isset($item) value="{{ $item->def }}" @endisset placeholder="Ingrese los puntos de defensa" required>
</div>

<div class="form-group mt-2 mb-2">
    <label for="luck">Suerte</label>
    <input type="number" name="luck" id="luck" class="form-control" @isset($item) value="{{ $item->luck }}" @endisset placeholder="Ingrese los puntos de suerte" required>
</div>

<div class="form-group mt-2 mb-2">
    <label for="cost">Precio</label>
    <input type="number" name="cost" id="cost" class="form-control" @isset($item) value="{{ $item->cost }}" @endisset placeholder="Ingrese la cantidad de monedas" required>
</div>