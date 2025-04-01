<div>
    <h1>Personajes Api</h1>

    <div>
        <table>
            <thead>
                <tr>
                <th>ID</th>
                    <th>Nombre</th>
                    <th>Estado</th>
                    <th>Especie</th>
                    <th>><</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personajes as $personaje)
                <tr>
                    <td>{{ $personaje['id'] }}</td>
                    <td>{{ $personaje['name'] }}</td>
                    <td>{{ $personaje['status'] }}</td>
                    <td>{{ $personaje['species'] }}</td>
                    <td><a href="{{ route('personajes.show', $personaje['id']) }}"></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <form action="{{ route('personajes.store') }}" method="POST">
            <button type="submit">Guardar en la base de datos</button>
        </form>
    </div>
</div>