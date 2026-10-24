
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Layanan - EnyaShoeCare</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 30px;
            background: #f4f7fb;
            color: #1f2937;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 25px;
        }

        h1 {
            margin: 0 0 8px;
        }

        .muted {
            color: #64748b;
        }

        .btn {
            display: inline-block;
            padding: 11px 16px;
            border: none;
            border-radius: 8px;
            background: #0284c7;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn:hover {
            opacity: .85;
        }

        .btn-edit {
            background: #eab308;
            color: #111827;
        }

        .btn-delete {
            background: #dc2626;
        }

        .btn-home {
            background: #334155;
        }

        .alert {
            margin-bottom: 20px;
            padding: 14px;
            border-radius: 8px;
            background: #dcfce7;
            color: #166534;
        }

        .table-wrapper {
            overflow-x: auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .06);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 800px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e5e7eb;
        }

        th {
            background: #111827;
            color: white;
        }

        tbody tr:hover {
            background: #f8fafc;
        }

        .actions {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .actions form {
            margin: 0;
        }

        .actions button {
            font-family: inherit;
        }

        .empty {
            text-align: center;
            padding: 30px;
            color: #64748b;
        }

        @media (max-width: 600px) {
            body {
                padding: 15px;
            }
        }
    </style>
</head>

<body>
    <main class="container">

        <div class="header">
            <div>
                <h1>Admin EnyaShoeCare</h1>
                <p class="muted">Kelola data layanan sepatu kamu.</p>
            </div>

            <div>
                <a href="{{ route('home') }}" class="btn btn-home">
                    Lihat Website
                </a>

                <a href="{{ route('admin.services.create') }}" class="btn">
                    + Tambah Layanan
                </a>
            </div>
        </div>

        @if (session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert" style="background:#fee2e2;color:#991b1b">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Layanan</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Durasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($services as $service)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                            <td>{{ $service->name }}</td>

                            <td>{{ $service->category }}</td>

                            <td>
                                Rp {{ number_format($service->price, 0, ',', '.') }}
                            </td>

                            <td>{{ $service->duration }}</td>

                            <td>{{ $service->status }}</td>

                            <td>
                                <div class="actions">
                                    <a
                                        href="{{ route('admin.services.edit', $service->id) }}"
                                        class="btn btn-edit"
                                    >
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('admin.services.destroy', $service->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus layanan ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-delete">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="empty">
                                Belum ada data layanan.
                                Silakan tambahkan layanan baru.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </main>
</body>
</html>
