<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>詳細</h1>
<p><a href="{{ route('home')}}">Cloth List</a></p>
<table>
    <tr>
        <th>category</th>
        <th>brand</th>
        <th>memo</th>
        <th>created_at</th>
    </tr>
    <tr>
        <td>{{ $clothes->category }}</td>
        <td>{{ $clothes->brand }}</td>
        <td>{{ $clothes->memo }}</td>
        <td>{{ $clothes->created_at }}</td>
    </tr>
</table>
    
</body>
</html>