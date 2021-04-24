<!DOCTYPE html>
<html>

<head>
    <title>Online Web Tutor</title>
</head>

<body>
    <h3>Data Diri</h3>
    <ul>
        <li>Nama : {{ $isi['name'] }}</li>
        <li>Email : {{ $isi['email'] }}</li>
        <li>No.Telepon : {{ $isi['phone'] }}</li>
    </ul>
    <hr>
    <h3>Isi Pesan :</h3>
    <p>{{ $isi['message'] }}</p>
</body>

</html>
