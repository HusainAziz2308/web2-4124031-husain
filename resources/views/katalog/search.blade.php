<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Hasil Pencarian: {{ $keyword }}</title>
</head>

<body>
    <h1>Hasil Pencarian Obat</h1>
    <p>Menampilkan hasil untuk kata kunci: <strong>{{ $keyword }}</strong></p>
    <hr>

    @if(count($products) > 0)
    <ul>
        @foreach($products as $product)
        <li>
            <strong>{{ $product['nama'] }}</strong>
            — Rp {{ number_format($product['harga'], 0, ',', '.') }}
            <a href="{{ route('katalog.show', ['id' => $product['id']]) }}">Lihat</a>
        </li>
        @endforeach
    </ul>
    @else
    <p style="color: red;">Maaf, obat "{{ $keyword }}" tidak ditemukan.</p>
    @endif

    <br>
    <a href="{{ route('katalog.index') }}">⬅ Kembali ke Katalog Lengkap</a>
</body>

</html>