<x-layout>
    <div class="container mt-3">
        <h1>Detail Fakultas</h1>
        <div class="card p-4 gap-5">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td class="w-1">Nama Fakultas</td>
                        <td>:</td>
                        <td>{{ $fakultas->nama_fakultas }}</td>
                    </tr>
                    <tr>
                        <td class="w-1">Nama Dekan</td>
                        <td>:</td>
                        <td>{{ $fakultas->nama_dekan }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="/fakultas" class="btn btn-secondary mt-3">Back to List</a>
    </div>
</x-layout>
