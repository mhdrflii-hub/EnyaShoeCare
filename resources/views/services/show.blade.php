<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $service->name }} - EnyaShoeCare</title>

    @vite(['resources/css/app.css', 'resources/css/services.css', 'resources/js/app.js'])

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        nav {
            background: #111827;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }

        .logo span {
            color: #38bdf8;
        }

        .back {
            color: white;
            text-decoration: none;
        }

        .detail {
            max-width: 1000px;
            margin: 50px auto;
            padding: 30px;
            background: white;
            border-radius: 18px;
            box-shadow: 0 8px 25px rgba(15, 23, 42, .08);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            align-items: center;
        }

        .detail img {
            width: 100%;
            height: 380px;
            object-fit: cover;
            border-radius: 14px;
        }

        .category {
            display: inline-block;
            background: #e0f2fe;
            color: #0369a1;
            padding: 7px 14px;
            border-radius: 20px;
            font-size: 13px;
        }

        h1 {
            font-size: 34px;
            margin: 18px 0;
        }

        .description {
            color: #64748b;
            line-height: 1.8;
        }

        .price {
            color: #0284c7;
            font-size: 28px;
            font-weight: bold;
        }

        .info {
            margin: 12px 0;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 22px;
            background: #0284c7;
            color: white;
            border-radius: 9px;
            text-decoration: none;
        }

        .btn:hover {
            background: #0369a1;
        }

        footer {
            background: #111827;
            color: white;
            text-align: center;
            padding: 22px;
            margin-top: 60px;
        }

        @media (max-width: 700px) {
            .detail {
                grid-template-columns: 1fr;
                margin: 25px 15px;
                padding: 20px;
            }

            .detail img {
                height: 260px;
            }

            h1 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>

    <nav>
        <a href="{{ route('home') }}" class="logo">
            Enya<span>ShoeCare</span>
        </a>

        <a href="{{ route('services.index') }}" class="back">
            ← Kembali ke Layanan
        </a>
    </nav>

    <main class="detail">
        <div>
            <img
                src="{{ asset('images/' . $service->image) }}"
                alt="{{ $service->name }}"
                onerror="this.onerror=null;this.src='{{ asset($service->image) }}';"
            >
        </div>

        <div>
            <span class="category">{{ $service->category }}</span>

            <h1>{{ $service->name }}</h1>

            <p class="description">
                {{ $service->description }}
            </p>

            <p class="price">
                Rp {{ number_format($service->price, 0, ',', '.') }}
            </p>

            <p class="info">
                <strong>Estimasi pengerjaan:</strong>
                {{ $service->duration }}
            </p>

            <p class="info">
                <strong>Status:</strong>
                {{ $service->status }}
            </p>

            <a href="{{ route('services.index') }}" class="btn">
                Lihat Layanan Lain
            </a>
        </div>
    </main>

    <footer>
        © {{ date('Y') }} EnyaShoeCare. Laundry Sepatu Profesional.
    </footer>

</body>
</html>
```