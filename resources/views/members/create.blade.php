<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><title>Tambah Anggota</title>
    <style>body{font-family:sans-serif;margin:40px;max-width:500px}label{display:block;margin-top:12px;font-weight:bold}input,select{width:100%;padding:6px;margin-top:4px;box-sizing:border-box}.error{color:#b91c1c;font-size:14px;margin-top:4px}.btn{margin-top:20px;padding:8px 16px;background:#2563eb;color:#fff;border:none;border-radius:4px;cursor:pointer}</style>
</head>
<body>
    <h1>Tambah Anggota</h1>
    <p><a href="{{ route('members.index') }}">&larr; Kembali</a></p>
    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <label>Nama</label>
        <input type="text" name="nama" value="{{ old('nama') }}">
        @error('nama') <div class="error">{{ $message }}</div> @enderror

        <label>NIM</label>
        <input type="text" name="nim" value="{{ old('nim') }}">
        @error('nim') <div class="error">{{ $message }}</div> @enderror

        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email') <div class="error">{{ $message }}</div> @enderror

        <label>No HP</label>
        <input type="text" name="nomor_telepon" value="{{ old('nomor_telepon') }}">

        <label>Status</label>
        <select name="status">
            <option value="">-- Pilih Status --</option>
            <option value="aktif" @selected(old('status') == 'aktif')>Aktif</option>
            <option value="nonaktif" @selected(old('status') == 'nonaktif')>Nonaktif</option>
        </select>
        @error('status') <div class="error">{{ $message }}</div> @enderror

        <button type="submit" class="btn">Simpan</button>
    </form>
</body>
</html>