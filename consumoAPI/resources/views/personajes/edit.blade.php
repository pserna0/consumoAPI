@extends('layouts.app')

<div>
    <h1>Editar {{ $personajes -> name }}</h1>

    <form action="{{ route('personajes.update', $personajes->id) }}" method="POST">
        @method('PUT')

        <div>
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" value="{{ $personajes->name }}">
        </div>

        <div>
            <label for="status">Estado</label>
            <input type="text" id="status" name="status" value="{{ $personajes->status }}">
        </div>

        <div>
            <label for="species">Especie</label>
            <input type="text" id="species" name="species" value="{{ $personajes->species }}">
        </div>

        <div>
            <label for="type">Tipo</label>
            <input type="text" id="type" name="type" value="{{ $personajes->type }}">
        </div>

        <div>
            <label for="gender">Genero</label>
            <input type="text" id="gender" name="gender" value="{{ $personajes->gender }}">
        </div>

        <button type="submit">Guardar</button>
    </form>

</div>