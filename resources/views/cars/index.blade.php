<!-- resources/views/cars/index.blade.php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carros</title>
</head>
<body>
    <h1>Lista de Carros</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Placa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->marca }}</td>
                    <td>{{ $car->modelo }}</td>
                    <td>{{ $car->placa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>