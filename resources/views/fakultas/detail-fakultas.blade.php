<x-layout>
    <div class="container mt-3">
        <h1>Detail Fakultas</h1>
        <div class="card">
            <div class="card-body">

                <p class="card-text text-lg text-gray-700 mb-4">Nama Fakultas: {{ $fakultas->nama_fakultas }}</p>
                <p class="card-text text-lg text-gray-700 mb-4">Nama Dekan: {{ $fakultas->nama_dekan }}</p>
                <a href="/fakultas" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</x-layout>
