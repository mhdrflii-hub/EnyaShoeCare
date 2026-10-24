<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Layanan - EnyaShoeCare</title>

    @vite(['resources/css/app.css', 'resources/css/services.css'])

</head>

<body>


<div class="container">

    <h1>Edit Layanan</h1>


    <form action="{{ route('admin.services.update', $service->id) }}" 
          method="POST">

        @csrf
        @method('PUT')


        <div>
            <label>Nama Layanan</label>

            <input 
                type="text" 
                name="name"
                value="{{ $service->name }}"
                required>
        </div>



        <div>
            <label>Kategori</label>

            <select name="category" required>

                <option value="Cleaning"
                {{ $service->category == 'Cleaning' ? 'selected' : '' }}>
                    Cleaning
                </option>


                <option value="Special Care"
                {{ $service->category == 'Special Care' ? 'selected' : '' }}>
                    Special Care
                </option>


                <option value="Treatment"
                {{ $service->category == 'Treatment' ? 'selected' : '' }}>
                    Treatment
                </option>


                <option value="Repair"
                {{ $service->category == 'Repair' ? 'selected' : '' }}>
                    Repair
                </option>


                <option value="Express"
                {{ $service->category == 'Express' ? 'selected' : '' }}>
                    Express
                </option>

            </select>

        </div>




        <div>

            <label>Harga</label>

            <input 
                type="number"
                name="price"
                value="{{ $service->price }}"
                required>

        </div>




        <div>

            <label>Durasi</label>

            <input 
                type="text"
                name="duration"
                value="{{ $service->duration }}"
                required>

        </div>




        <div>

            <label>Status</label>

            <select name="status">

                <option value="Tersedia"
                {{ $service->status == 'Tersedia' ? 'selected' : '' }}>
                    Tersedia
                </option>


                <option value="Tidak Tersedia"
                {{ $service->status == 'Tidak Tersedia' ? 'selected' : '' }}>
                    Tidak Tersedia
                </option>

            </select>

        </div>




        <div>

            <label>Deskripsi</label>

            <textarea name="description" required>{{ $service->description }}</textarea>

        </div>



        <button type="submit">
            Simpan Perubahan
        </button>


        <a href="{{ route('admin.services.index') }}">
            Kembali
        </a>


    </form>


</div>


</body>

</html>