<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 85px; /* Jarak agar konten tidak tertutup navbar */
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm py-3">
        <div class="container">

            <a class="navbar-brand fw-bold text-dark fs-4" href="/">
                Welcome<span class="text-primary">.</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarButtons" aria-controls="navbarButtons" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarButtons">
                <div class="d-flex flex-column flex-lg-row gap-2 ms-auto mt-3 mt-lg-0 w-100 w-lg-auto justify-content-end">

                    <a href="/fakultas" class="btn btn-light text-secondary fw-semibold px-4 py-2 border-0">
                        List Fakultas
                    </a>

                    <a href="/fakultas/create" class="btn btn-primary fw-semibold px-4 py-2 shadow-sm">
                        Add Fakultas
                    </a>

                </div>
            </div>

        </div>
    </nav>

    <main class="container">
        {{ $slot }}
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
