<!DOCTYPE html>
<html>
<head>
    <title>Crear Cartón</title>
</head>
<body>
    <h1>Crear Cartón</h1>
    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        <label for="user_id">Usuario:</label>
        <select id="user_id" name="user_id" required>
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="draw_id">Sorteo:</label>
        <select id="draw_id" name="draw_id" required>
            @foreach ($draws as $draw)
                <option value="{{ $draw->id }}">{{ $draw->name }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Crear Cartón</button>
    </form>
</body>
</html>
