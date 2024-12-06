<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    form {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    div {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: #555;
    }

    input[type="text"],
    input[type="email"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #28a745;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button:hover {
        background-color: #218838;
    }
</style>
</head>
<body>
@extends('layouts.app')

@section('content')
<h1>Create Client</h1>

<form action="{{ route('clients.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
    </div>

    <div>
        <label for="telephone">Telephone:</label>
        <input type="text" name="telephone" id="telephone">
    </div>

    <div>
        <label for="adresse">Adresse:</label>
        <input type="text" name="adresse" id="adresse">
    </div>

    <button type="submit">Create</button>
</form>
@endsection

</body>
</html>
