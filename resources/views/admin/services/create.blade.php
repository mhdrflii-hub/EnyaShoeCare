```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Layanan - EnyaShoeCare</title>

    @vite(['resources/css/app.css', 'resources/css/services.css', 'resources/js/app.js'])
</head>
<body>

    <nav>
        <div class="logo">Enya<span>ShoeCare</span></div>
        <a href="{{ route('admin.services.index') }}"
           style="color:white;text-decoration:none;">
            ← Kembali ke Admin
        </a>
    </nav>

    <main class="container">
        <section class="content-page">

            <h2>Tambah Layanan Baru</h2>
            <p>Isi informasi layanan sepatu yang ingin ditambahkan.</p>

            @if ($errors->any())
                <div style="color:red;text-align:left;margin-bottom:20px;">
                    <strong>Periksa kembali data berikut:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.services.store') }}"
                  method="POST"
                  enctype="multipart/form-data"
                  style="text-align:left;max-width:650px;margin:auto;">

                @csrf

                <label for="name">Nama Layanan</label>
                <input id="name" type="text" name="name"
                       value="{{ old('name') }}" required
                       style="width:100%;padding:12px;margin:8px 0 18px;">

                <label for="category">Kategori</label>
                <select id="category" name="category" required
                        style="width:100%;padding:12px;margin:8px 0 18px;">
                    <option value="">Pilih kategori</option>
                    @foreach (['Cleaning', 'Special Care', 'Treatment', 'Repair', 'Express'] as $category)
                        <option value="{{ $category }}"
                            {{ old('category') == $category ? 'selected' : '' }}>
                            {{ $category }}
                        </option>
                    @endforeach
                </select>

                <label for="description">Deskripsi</label>
                <textarea id="description" name="description" required
                          rows="4"
                          style="width:100%;padding:12px;margin:8px 0 18px;">{{ old('description') }}</textarea>

                <label for="price">Harga (Rupiah)</label>
                <input id="price" type="number" name="price"
                       value="{{ old('price') }}" min="0" required
                       style="width:100%;padding:12px;margin:8px 0 18px;">

                <label for="duration">Estimasi Pengerjaan</label>
                <input id="duration" type="text" name="duration"
                       value="{{ old('duration') }}"
                       placeholder="Contoh: 1-2 Hari" required
                       style="width:100%;padding:12px;margin:8px 0 18px;">

                <label for="image">Foto Layanan</label>
                <input id="image" type="file" name="image"
                       accept="image/*"
                       style="display:block;width:100%;margin:8px 0 18px;">

                <label for="status">Status Layanan</label>
                <select id="status" name="status" required
                        style="width:100%;padding:12px;margin:8px 0 24px;">
                    <option value="Tersedia"
                        {{ old('status', 'Tersedia') == 'Tersedia' ? 'selected' : '' }}>
                        Tersedia
                    </option>
                    <option value="Tidak Tersedia"
                        {{ old('status') == 'Tidak Tersedia' ? 'selected' : '' }}>
                        Tidak Tersedia
                    </option>
                </select>

                <button type="submit" class="btn">
                    Simpan Layanan
                </button>

                <a href="{{ route('admin.services.index') }}"
                   class="btn"
                   style="background:#64748b;">
                    Batal
                </a>

            </form>
        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} EnyaShoeCare. Laundry Sepatu Profesional.</p>
    </footer>

</body>
</html>
```