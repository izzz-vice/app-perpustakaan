<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><title>Daftar Kategori</title>
    <style>body{font-family:sans-serif;margin:40px}table{border-collapse:collapse;width:100%;margin-top:16px}th,td{border:1px solid #ccc;padding:8px 12px;text-align:left}.success{background:#d1fae5;color:#065f46;padding:10px;margin-top:16px}.btn{padding:6px 14px;background:#2563eb;color:#fff;text-decoration:none;border-radius:4px}</style>
</head>
<body>
    <h1>Daftar Kategori</h1>
    @if(session('success')) <div class="success">{{ session('success') }}</div> @endif
    <p><a href="{{ route('categories.create') }}" class="btn">+ Tambah Kategori</a></p>
    <table>
        <thead><tr><th>ID</th><th>Nama Kategori</th><th>Deskripsi</th></tr></thead>
        <tbody>
            @foreach ($categories as $cat)
            <tr><td>{{ $cat['id'] }}</td><td>{{ $cat['nama_kategori'] }}</td><td>{{ $cat['deskripsi'] }}</td></tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>