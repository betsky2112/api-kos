<?php

namespace App\Http\Controllers;

use App\Models\Kos;
use Illuminate\Http\Request;

class KosController extends Controller
{
    public function index(Request $request)
    {
        $kos = Kos::query();

        // Filter berdasarkan lokasi
        if ($request->has('lokasi')) {
            $kos->where('lokasi', 'like', '%' . $request->lokasi . '%');
        }

        // Filter berdasarkan harga
        if ($request->has('harga_min') && $request->has('harga_max')) {
            $fasilitas = explode(',', $request->fasilitas);
            foreach ($fasilitas as $fasilitasItem) {
                $kos->whereJsonContains('fasilitas', $fasilitasItem);
            }
        }

        // Filter berdasarkan status
        if ($request->has('status')) {
            $kos->where('status', $request->status);
        }

        return response()->json($kos->get());
    }

    public function show($id)
    {
        $kos = Kos::find($id);

        if (!$kos) {
            return response()->json(['message' => 'Kos not found'], 404);
        }

        return response()->json($kos);
    }
}
