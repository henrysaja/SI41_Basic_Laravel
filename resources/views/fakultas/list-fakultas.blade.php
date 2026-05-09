<x-layout>

    <div class="container mt-3">
        <h1>List Fakultas</h1>
        <div class="row mb-3">
            <div class="col-md-6">
                <a href="/fakultas/create" class="btn btn-primary mb-3">Add Fakultas</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Daftar Fakultas</h2>
            </div>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Fakultas</th>
                        <th>Nama Dekan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fakultas as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_fakultas }}</td>
                            <td>{{ $item->nama_dekan }}</td>
                            <td>
                                
                                <a href="/fakultas/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                                <a href="/fakultas/{{ $item->id }}" class="btn btn-info">Detail</a>
                                <form action="/fakultas/{{ $item->id }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</x-layout>
