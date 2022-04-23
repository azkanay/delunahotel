<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class ResepsionisController extends Controller
{
    public function index()
    {
    	$book = Booking::get();
    	return view('resepsionis', compact('book'));
    }

    public function search(Request $request)
    {
        $keywords = request('nama');
        $book = Booking::where('nama_tamu', 'LIKE', '%' . $keywords . '%')->get();

        return view('resepsionis', compact('book'));
    }
}
