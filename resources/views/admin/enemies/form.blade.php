@csrf
<div class="form-group mt-2 mb-2">
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" class="form-control" @isset($enemy) value="{{ $enemy->name }}" @endisset placeholder="Ingrese un Nombre" required>
</div>

<div class="form-group mt-2 mb-2">
    <label for="hp">HP</label>
    <input type="number" name="hp" id="hp" class="form-control" @isset($enemy) value="{{ $enemy->hp }}" @endisset placeholder="Ingrese los puntos de vida" required>
</div>

<div class="form-group mt-2 mb-2">
    <label for="atq">Ataque</label>
    <input type="number" name="atq" id="atq" class="form-control" @isset($enemy) value="{{ $enemy->atq }}" @endisset placeholder="Ingrese los puntos de ataque" required>
</div>

<div class="form-group mt-2 mb-2">
    <label for="def">Defensa</label>
    <input type="number" name="def" id="def" class="form-control" @isset($enemy) value="{{ $enemy->def }}" @endisset placeholder="Ingrese los puntos de defensa" required>
</div>

<div class="form-group mt-2 mb-2">
    <label for="coins">Monedas</label>
    <input type="number" name="coins" id="coins" class="form-control" @isset($enemy) value="{{ $enemy->coins }}" @endisset placeholder="Ingrese las monedas que da" required>
</div>

<div class="form-group mt-2 mb-2">
    <label for="xp">Experiencia</label>
    <input type="number" name="xp" id="xp" class="form-control" @isset($enemy) value="{{ $enemy->xp }}" @endisset placeholder="Ingrese la experiencia que da" required>
</div>