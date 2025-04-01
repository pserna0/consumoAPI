@extends('layouts.app')

<div>
    <h1>Estas viendo a {{ $personajes -> name }}</h1>
    <div>
        <p>Estado: {{ $personajes -> status }}</p>
        <p>Especie: {{ $personajes -> species }}</p>
        <p>Tipo: {{ $personajes -> type }}</p>
        <p>Genero: {{ $personajes -> gender }}</p>
        <p>Origen: {{ $personajes -> origin_name }}</p>
        <p>Origen URL: {{ $personajes -> origin_url }}</p>
    </div>

</div>