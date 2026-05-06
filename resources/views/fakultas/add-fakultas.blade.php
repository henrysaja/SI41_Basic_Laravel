<x-layout>
    <form action="/fakultas" method="post">
        @csrf
        <div class="mb-4">
            <label for="nama_fakultas" class="block text-gray-700 font-bold mb-2">Nama Fakultas:</label>
            <input type="text" id="nama_fakultas" name="nama_fakultas"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="dekan" class="block text-gray-700 font-bold mb-2">Dekan:</label>
            <input type="text" id="dekan" name="dekan"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <button type="submit" class=" btn-primary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Simpan
        </button>
    </form>
</x-layout>
