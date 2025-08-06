<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simulasi Kredit Mobil</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Kredit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Selamat Datang di simulasi kredit</h1>
        </div>
    </header>

    <!-- Simulasi Kredit Mobil -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow">
                        <div class="card-header bg-dark text-white">
                            <h4 class="mb-0">Simulasi Kredit Mobil</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('hitung') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="otr" class="form-label">Harga Mobil (OTR)</label>
                                    <input type="number" name="otr" id="otr" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label for="dp" class="form-label">Down Payment (%)</label>
                                    <input type="number" name="dp" id="dp" class="form-control"
                                        value="20" required>
                                </div>

                                <div class="mb-3">
                                    <label for="jangka_waktu" class="form-label">Jangka Waktu (bulan)</label>
                                    <input type="number" name="jangka_waktu" id="jangka_waktu" class="form-control"
                                        required>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Hitung Angsuran</button>
                                </div>
                            </form>

                            @isset($angsuran)
                                <hr class="my-4">
                                <h5 class="text-success">Hasil Perhitungan</h5>
                                <p>Pokok Utang: <strong>Rp {{ number_format($pokok_utang, 0, ',', '.') }}</strong></p>
                                <p>Bunga: <strong>{{ $bunga }}%</strong></p>
                                <p>Angsuran per bulan: <strong>Rp {{ number_format($angsuran, 0, ',', '.') }}</strong></p>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <p class="mb-0">&copy; 2025 MyKredit. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
