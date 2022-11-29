<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excel - All Users</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>FULLNAME</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>BIRTHDATE</th>
                <th>PHOTO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->birthdate }}</td>
                    <td><img src="{{ public_path().'/'.$user->photo }}" width="40px"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>