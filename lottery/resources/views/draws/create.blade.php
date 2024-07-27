<!DOCTYPE html>
<html>
<head>
    <title>Crear Sorteo</title>
</head>
<body>
    <h1>Crear Sorteo</h1>
    <form action="{{ route('draws.store') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="scheduled_time">Fecha y Hora del Sorteo:</label>
        <input type="datetime-local" id="scheduled_time" name="scheduled_time" required>
        <br>
        <button type="submit">Crear Sorteo</button>
    </form>
</body>
</html>
