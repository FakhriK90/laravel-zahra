<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        p {
            font-size: 1.1em;
            color: #555;
        }
        p strong {
            color: #000;
        }
        a {
            display: inline-block;
            margin: 10px 0;
            padding: 10px 15px;
            background: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background: #0056b3;
        }
        form {
            display: inline-block;
        }
        button {
            padding: 10px 15px;
            background: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #c82333;
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Client Details</h1>

    <p><strong>Nom:</strong> {{ $client->nom }}</p>
    <p><strong>Prénom:</strong> {{ $client->prenom }}</p>
    <p><strong>Email:</strong> {{ $client->email }}</p>
    <p><strong>Téléphone:</strong> {{ $client->telephone ?? 'N/A' }}</p>
    <p><strong>Adresse:</strong> {{ $client->adresse }}</p>

    <a href="{{ route('clients.edit', $client->id) }}">Edit</a>

    <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this client?')">Delete</button>
    </form>

    <a href="{{ route('clients.index') }}">Back to Clients List</a>
</div>
@endsection

</body>
</html>