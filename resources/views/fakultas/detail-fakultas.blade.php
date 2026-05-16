<x-layout>
    <div class="container mt-5 mb-5">

        <!-- Bagian Header & Tombol Kembali -->
        <div class="d-flex justify-content-between align-items-end mb-4">
            <div>
                <h2 class="fw-bold text-dark mb-1">Detail Fakultas</h2>
                <p class="text-muted mb-0">Informasi lengkap mengenai program studi dan fakultas.</p>
            </div>
            <a href="/fakultas" class="btn btn-outline-secondary shadow-sm px-4">
                <i class="bi bi-arrow-left me-1"></i> Kembali ke Daftar
            </a>
        </div>

        <!-- Bagian Card Detail -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                    <!-- Card Header (Aksen Biru) -->
                    <div class="card-header bg-primary text-white p-4 border-0">
                        <h5 class="mb-0 fw-semibold">
                            <i class="bi bi-building me-2"></i> Informasi Fakultas
                        </h5>
                    </div>

                    <!-- Card Body (Tabel Informasi) -->
                    <div class="card-body p-4 p-md-5">
                        <table class="table table-borderless mb-0 fs-5">
                            <tbody>
                                <!-- Baris Nama Fakultas -->
                                <tr>
                                    <th scope="row" class="text-muted fw-normal" style="width: 30%;">
                                        Nama Fakultas
                                    </th>
                                    <td style="width: 5%;">:</td>
                                    <td class="fw-bold text-dark">
                                        {{ $fakultas->nama_fakultas }}
                                    </td>
                                </tr>

                                <!-- Baris Nama Dekan -->
                                <tr>
                                    <th scope="row" class="text-muted fw-normal">
                                        Nama Dekan
                                    </th>
                                    <td>:</td>
                                    <td class="fw-bold text-dark">
                                        {{ $fakultas->nama_dekan }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</x-layout>
