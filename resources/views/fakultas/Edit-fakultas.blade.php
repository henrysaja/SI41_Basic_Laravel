<x-layout>
    <div class="container mt-5 mb-5">

        <!-- Header & Tombol Kembali -->
        <div class="d-flex justify-content-between align-items-end mb-4">
            <div>
                <h2 class="fw-bold text-dark mb-1">Edit Fakultas</h2>
                <p class="text-muted mb-0">Perbarui informasi data fakultas di bawah ini.</p>
            </div>
            <a href="/fakultas" class="btn btn-outline-secondary shadow-sm px-4">
                <i class="bi bi-arrow-left me-1"></i> Kembali
            </a>
        </div>

        <!-- Card Form Edit -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                    <!-- Card Header (Aksen Kuning/Warning untuk Edit) -->
                    <div class="card-header bg-warning p-4 border-0">
                        <h5 class="mb-0 fw-semibold text-dark">
                            <i class="bi bi-pencil-square me-2"></i> Form Edit Fakultas
                        </h5>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body p-4 p-md-5">
                        <form action="/fakultas/{{ $fakultas->id }}" method="POST">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @csrf
                            @method('PUT')

                            <!-- Input Nama Fakultas -->
                            <div class="mb-4">
                                <label for="nama_fakultas" class="form-label fw-bold text-dark">
                                    Nama Fakultas <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="nama_fakultas" name="nama_fakultas"
                                    value="{{ old('nama_fakultas', $fakultas->nama_fakultas) }}"
                                    class="form-control form-control-lg fs-6"
                                    placeholder="Masukkan nama fakultas" >

                            </div>

                            <!-- Input Nama Dekan -->
                            <div class="mb-4">
                                <label for="nama_dekan" class="form-label fw-bold text-dark">
                                    Nama Dekan <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="nama_dekan" name="nama_dekan"
                                    value="{{ old('nama_dekan', $fakultas->nama_dekan) }}"
                                    class="form-control form-control-lg fs-6 "
                                    placeholder="Masukkan nama dekan" >

                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex gap-2 mt-5">
                                <button type="submit" class="btn btn-primary px-4 py-2 fw-semibold shadow-sm">
                                    <i class="bi bi-save me-1"></i> Update Data
                                </button>
                                <a href="/fakultas" class="btn btn-light px-4 py-2 fw-semibold text-secondary border">
                                    Batal
                                </a>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</x-layout>
