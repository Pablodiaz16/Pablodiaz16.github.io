<div class="mt-3">
    <h1>PERSONAJES RICK Y MORTY</h1>
</div>
<form action="{{ route('getCharacter') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nombre">Nombre de los personajes a buscar: </label>
        <input type="text" class="form-control" name="nombre" id="nombre">
    </div>
    <br>
    <input type="submit" name="enviar" value="Enviar" class="btn btn-dark btn-block">
</form>
