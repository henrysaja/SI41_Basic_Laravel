<x-layout>
    <div class="container mt-3">
        <h1>Edit Fakultas</h1>
        <div class="card">
            <div class="card-body">
                <form action="/fakultas/{{ $fakultas->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="nama_fakultas" class="block text-gray-700 font-bold mb-2">Nama Fakultas:</label>
                        <input type="text" id="nama_fakultas" name="nama_fakultas" value="{{ $fakultas->nama_fakultas }}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label for="nama_dekan" class="block text-gray-700 font-bold mb-2">Nama Dekan:</label>
                        <input type="text" id="nama_dekan" name="nama_dekan" value="{{ $fakultas->nama_dekan }}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <button type="submit" class="bg-primary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                    <a href="/fakultas" class="btn btn-primary">Back to List</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>
