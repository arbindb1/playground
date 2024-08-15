<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post" action="{{ route('user.store') }}">
        @csrf
        @method('post')
        <input type="text" name="name" placeholder="Enter your name"><br>
        <input type="number" name="age" placeholder="Enter your age"><br>
        <input type="text" name="city" placeholder="Enter your city"><br>
        <input type="email" name="email" placeholder="dummy@gmail.com"><br>
        <input type="submit">
    </form>
    <table>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->usr_id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->city }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="{{ route('user.edit', ['userinfo' => $user->usr_id]) }}">Edit</a></td>
                <td>
                    <form action="{{ route('user.delete', ['userinfo' => $user->usr_id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
