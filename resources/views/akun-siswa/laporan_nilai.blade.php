<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        table {
            width: 100%; 
            max-width: 800px; 
            margin: auto; 
            border-collapse: collapse;
            table-layout: fixed; 
        }

        td, th {
            border: 1px solid black;
            padding: 8px; 
            text-align: left; 
        }

        th {
            background-color: #f2f2f2; 
            font-weight: bold; 
        }

        h1 {
            text-align: center; 
        }
    </style>
</head>
<body>
    <h1>Detail Siswa</h1>
    <table>
        <tr>
            <th>Nama</th>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <th>Email Orangtua</th>
            <td>{{$user->email}}</td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td>{{$user->gender}}</td>
        </tr>
        <tr>
            <th>Total Pre-Test</th>
            <td>{{$user->total_pretest}}</td>
        </tr>
        <tr>
            <th>Total Post-Test</th>
            <td>{{$user->total_score}}</td>
        </tr>
    </table>
</body>
</html>
