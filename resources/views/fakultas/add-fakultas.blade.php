<x-layout>
    <div class="container">
        <h1 class="text-4xl font-bold mb-4 mt-4">Add Fakultas</h1>
        <div class="row">
            <form action="/fakultas" method="POST">
                @csrf
                <div class="col-8">
                    <div class=" card ">
                        <div class="card-body">
                            <h5 class="card-title text-2xl font-bold mb-4">Form Add Fakultas</h5>

                            <div class="mb-4">
                                <label for="nama_fakultas" class="block text-gray-700 font-bold mb-2">Nama
                                    Fakultas:</label>

                                <input type="text" id="nama_fakultas" name="nama_fakultas"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    required>
                            </div>
                            <div class="mb-4">
                                <label for="nama_dekan" class="block text-gray-700 font-bold mb-2">Nama Dekan:</label>
                                <input type="text" id="nama_dekan" name="nama_dekan"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    required>
                            </div>
                            <button type="submit"
                                class="bg-primary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                        </div>
                    </div>
            </form>
        </div>
        <div class="row mt-4">
            <div class="col-8">
                <a href="/fakultas" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>
</x-layout>
