@extends('layouts.app')

<div>
    <h1>Personajes BD</h1>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nonbre</th>
                        <th>Estado</th>
                        <th>Especie</th>
                        <th>><</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personajes as $personaje)
                    <tr>
                        <td>{{ $personaje->api_id }}</td>
                        <td>{{ $personaje->name }}</td>
                        <td>{{ $personaje->status }}</td>
                        <td>{{ $personaje->species }}</td>
                        <td><a href="{{ route('personajes.edit', $personaje->api_id) }}">Editar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>