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
        // dd($data);
        $tipeKamar = $request->tipe_kamar;

        if ($tipeKamar == '1') {
            $selectionData = Kamar::where('tipe_kamar', 'LIKE', '%Classic 1%')->get();

            $countPrice = $selectionData[0]->harga_kamar * $request->jumlah_kamar;
            $data['id_kamar'] = 1;
            $data['harga_kamar'] = $countPrice;
        } else if ($tipeKamar == '2') {
            // dd('The Premiere');
            $selectionData = Kamar::where('tipe_kamar', 'LIKE', '%Classic 2%')->get();

            $countPrice = $selectionData[0]->harga_kamar * $request->jumlah_kamar;
            $data['id_kamar'] = 2;
            $data['harga_kamar'] = $countPrice;
        } else if ($tipeKamar == '3') {
            $selectionData = Kamar::where('tipe_kamar', 'LIKE', '%Superior%')->get();

            $countPrice = $selectionData[0]->harga_kamar * $request->jumlah_kamar;
            $data['id_kamar'] = 3;
            $data['harga_kamar'] = $countPrice;
        } else if ($tipeKamar == '4') {
            $selectionData = Kamar::where('tipe_kamar', 'LIKE', '%Deluxe%')->get();

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

}