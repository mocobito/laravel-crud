<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>List users</h2>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td><button onclick="document.location.href='/users/create'">Create </button></td>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><button onclick="window.location.href='/users/update/{{ $user->id }}'">Update</button></td>
            <td><button onclick="window.location.href='/users/delete/{{ $user->id }}'">Delete</button></td>
        </tr>
    @endforeach
</table>
</body>
</html>
