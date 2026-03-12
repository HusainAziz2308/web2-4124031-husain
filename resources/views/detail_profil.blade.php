<!DOCTYPE html>
<html>
<head>
    <title>Detail Profil Mahasiswa</title>
</head>
<body>

    <h1>Detail Profil Mahasiswa</h1>

    <p><strong>Nama :</strong> {{ $mahasiswa['nama'] }}</p>
    <p><strong>NIM :</strong> {{ $mahasiswa['nim'] }}</p>
    <p><strong>Program Studi :</strong> {{ $mahasiswa['program_studi'] }}</p>

    <br>

    <a href="/profil">Kembali ke daftar</a>

</body>
</html>