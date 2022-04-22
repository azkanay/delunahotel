<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();

        return view('resepsionis', compact('bookings'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $tipeKamar = $request->tipe_kamar;

        if ($tipeKamar == 'Deluxe') {
            $selectionData = Kamar::where('tipe_kamar', 'LIKE', '%' . $request->tipe_kamar . '%')->get();

            $countPrice = $selectionData[0]->harga_kamar * $request->jumlah_kamar;
            $data['id_kamar'] = 1;
            $data['harga_kamar'] = $countPrice;
        } else if ($tipeKamar == 'Superior') {
            // dd('The Premiere');
            $selectionData = Kamar::where('tipe_kamar', 'LIKE', '%' . $request->tipe_kamar . '%')->get();

            $countPrice = $selectionData[0]->harga_kamar * $request->jumlah_kamar;
            $data['id_kamar'] = 2;
            $data['harga_kamar'] = $countPrice;
        } else if ($tipeKamar == 'Classic 2') {
            $selectionData = Kamar::where('tipe_kamar', 'LIKE', '%' . $request->tipe_kamar . '%')->get();

            $countPrice = $selectionData[0]->harga_kamar * $request->jumlah_kamar;
            $data['id_kamar'] = 3;
            $data['harga_kamar'] = $countPrice;
        } else if ($tipeKamar == 'Classic 1') {
            $selectionData = Kamar::where('tipe_kamar', 'LIKE', '%' . $request->tipe_kamar . '%')->get();

            $countPrice = $selectionData[0]->harga_kamar * $request->jumlah_kamar;
            $data['id_kamar'] = 3;
            $data['harga_kamar'] = $countPrice;
        }

        $storeData = Booking::create($data);
        // dd($storeData);
        return redirect()->route('booking.detail');
    }

    public function detail(){
        $item = Booking::latest()->first();
        // dd($item);
        return view('booking', compact('item'));
    }

    public function search(Request $request)
    {
        $keywords = $request->keywords;
        $bookings = Booking::where('nama_tamu', 'LIKE', '%' . $keywords . '%')->get();

        return view('resepsionis', compact('bookings'));
    }
}