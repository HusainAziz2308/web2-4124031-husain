<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Katalog Produk</title>
</head>
<body>
    <h1>Katalog Produk</h1>

    <ul>
        @foreach($products as $product)
            <li>
                <strong>{{ $product['nama'] }}</strong>
                — Rp {{ number_format($product['harga'], 0, ',', '.') }}
                <a href="{{ route('katalog.show', ['id' => $product['id']]) }}">Lihat</a>
            </li>
        @endforeach
    </ul>
</body>
</html>