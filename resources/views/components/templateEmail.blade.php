<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Kontak Form | maurindo.co.id</title>
</head>
<body>
    <p>Halo Admin, nama saya <b>{{$details['nama']}}</b> ingin mendiskusikan kebutuhan saya.</p>
    <table>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{$details['email']}}</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{$details['nama']}}</td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td>:</td>
            <td>{{$details['pesan']}}</td>
        </tr>
    </table>
    <p>Terimakasih atas perhatiannya Maurindo.</p>
</body>
</html>