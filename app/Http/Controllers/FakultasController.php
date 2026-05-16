<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Fakultas::orderByDesc('created_at')->get();
        return view('fakultas.list-fakultas')->with('fakultas', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.add-fakultas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_fakultas' => ['required', 'string', 'min:5', 'max:255'],
            'nama_dekan' => ['required', 'string', 'min:5', 'max:255'],

            [
                'nama_fakultas.required' => 'Nama fakultas harus diisi.',
                'nama_fakultas.string' => 'Nama fakultas harus berupa teks.',
                'nama_fakultas.min' => 'Nama fakultas minimal 5 karakter.',
                'nama_fakultas.max' => 'Nama fakultas maksimal 255 karakter.',
                'nama_dekan.required' => 'Nama dekan harus diisi.',
                'nama_dekan.string' => 'Nama dekan harus berupa teks.',
                'nama_dekan.min' => 'Nama dekan minimal 5 karakter.',
                'nama_dekan.max' => 'Nama dekan maksimal 255 karakter.',
            ]
        ]);

        Fakultas::create([
            'nama_fakultas' => $validated['nama_fakultas'],
            'nama_dekan' => $validated['nama_dekan'],
        ]);
        return redirect('/fakultas');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakulta)
    {
        // show fakultas
        Fakultas::find($fakulta->id);
        return view('fakultas.detail-fakultas')->with('fakultas', $fakulta);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakulta)
    {
        // edit fakultas
        return view('fakultas.edit-fakultas', ['fakultas' => $fakulta]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakulta)
    {
        $validated = $request->validate([
            'nama_fakultas' => ['required', 'string', 'min:5', 'max:255'],
            'nama_dekan' => ['required', 'string', 'min:5', 'max:255'],

            [
                'nama_fakultas.required' => 'Nama fakultas harus diisi.',
                'nama_fakultas.string' => 'Nama fakultas harus berupa teks.',
                'nama_fakultas.min' => 'Nama fakultas minimal 5 karakter.',
                'nama_fakultas.max' => 'Nama fakultas maksimal 255 karakter.',
                'nama_dekan.required' => 'Nama dekan harus diisi.',
                'nama_dekan.string' => 'Nama dekan harus berupa teks.',
                'nama_dekan.min' => 'Nama dekan minimal 5 karakter.',
                'nama_dekan.max' => 'Nama dekan maksimal 255 karakter.',
            ]

        ]);

        $fakulta->update([
            'nama_fakultas' => $validated['nama_fakultas'],
            'nama_dekan' => $validated['nama_dekan'],
        ]);

        return redirect('/fakultas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakulta)
    {
        // delete fakultas
        $fakulta->delete();
        return redirect()->back();
    }
}
