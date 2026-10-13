<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><title>Daftar Anggota</title>
    <style>body{font-family:sans-serif;margin:40px}table{border-collapse:collapse;width:100%;margin-top:16px}th,td{border:1px solid #ccc;padding:8px 12px;text-align:left}.success{background:#d1fae5;color:#065f46;padding:10px;margin-top:16px}.btn{padding:6px 14px;background:#2563eb;color:#fff;text-decoration:none;border-radius:4px}</style>
</head>
<body>
    <h1>Daftar Anggota</h1>
    @if(session('success')) <div class="success">{{ session('success') }}</div> @endif
    <p><a href="{{ route('members.create') }}" class="btn">+ Tambah Anggota</a></p>
    <table>
        <thead><tr><th>ID</th><th>NIM</th><th>Nama</th><th>Email</th><th>No HP</th><th>Status</th></tr></thead>
        <tbody>
            @foreach ($members as $m)
            <tr><td>{{ $m['id'] }}</td><td>{{ $m['nim'] }}</td><td>{{ $m['nama'] }}</td><td>{{ $m['email'] }}</td><td>{{ $m['nomor_telepon'] }}</td><td>{{ $m['status'] }}</td></tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>