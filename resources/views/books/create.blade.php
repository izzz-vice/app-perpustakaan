<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><title>Tambah Buku</title>
    <style>body{font-family:sans-serif;margin:40px;max-width:500px}label{display:block;margin-top:12px;font-weight:bold}input,select{width:100%;padding:6px;margin-top:4px;box-sizing:border-box}.error{color:#b91c1c;font-size:14px;margin-top:4px}.btn{margin-top:20px;padding:8px 16px;background:#2563eb;color:#fff;border:none;border-radius:4px;cursor:pointer}</style>
</head>
<body>
    <h1>Tambah Buku</h1>
    <p><a href="{{ route('books.index') }}">&larr; Kembali</a></p>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label>Judul</label>
        <input type="text" name="judul" value="{{ old('judul') }}">
        @error('judul') <div class="error">{{ $message }}</div> @enderror

        <label>Penulis</label>
        <input type="text" name="penulis" value="{{ old('penulis') }}">
        @error('penulis') <div class="error">{{ $message }}</div> @enderror

        <label>Penerbit</label>
        <input type="text" name="penerbit" value="{{ old('penerbit') }}">
        @error('penerbit') <div class="error">{{ $message }}</div> @enderror

        <label>Tahun Terbit</label>
        <input type="number" name="tahun_terbit" value="{{ old('tahun_terbit') }}">
        @error('tahun_terbit') <div class="error">{{ $message }}</div> @enderror

        <label>Stok</label>
        <input type="number" name="stok" value="{{ old('stok', 1) }}">
        @error('stok') <div class="error">{{ $message }}</div> @enderror

        <label>Kategori</label>
        <select name="category_id">
            <option value="">-- Pilih Kategori --</option>
            @foreach ($categories as $category)
                <option value="{{ $category['id'] }}" @selected(old('category_id') == $category['id'])>{{ $category['nama_kategori'] }}</option>
            @endforeach
        </select>
        @error('category_id') <div class="error">{{ $message }}</div> @enderror

        <button type="submit" class="btn">Simpan</button>
    </form>
</body>
</html>