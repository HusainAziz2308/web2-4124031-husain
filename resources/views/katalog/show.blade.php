<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Detail Produk</title>
</head>

<body>
    <h1>{{ $product['nama'] }}</h1>
    <p><strong>Harga:</strong> Rp {{ number_format($product['harga'], 0, ',', '.') }}</p>
    <p><strong>Deskripsi:</strong> {{ $product['deskripsi'] }}</p>
    <p><a href="{{ route('katalog.index') }}">Kembali ke katalog</a></p>
</body>

</html>