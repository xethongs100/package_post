<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach($array as $value)
            <tr>
                <td>{{ $value['name'] }}</td>
                <td>{{ $value['age'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>