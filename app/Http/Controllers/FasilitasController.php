<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        return view('admin', compact('fasilitas'));
    }

    public function dashboard()
    {
        $fasilitas = Fasilitas::all();
        return view('dashboard', compact('fasilitas'));
    }

    public function edit($id)
    {
        $item = Fasilitas::where('id', $id)->first();
        return view('fasilities.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Fasilitas::findOrFail($id);
        $item->update($request->all());

        return redirect('/admin');
    }

    public function destroy($id)
    {
        $item = Fasilitas::findOrFail($id);
        $item->delete();

        return redirect('/admin');
    }
}
