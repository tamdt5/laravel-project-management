<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('request_register')}}" method="post">
        @csrf
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id=""></td>
        </tr>
        <tr>
            <td><input type="submit" value="Register" name="submit"></td>
        </tr>
    </form>
</body>
</html>