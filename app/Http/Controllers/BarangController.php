<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $barangs = Barang::where('nama_barang','LIKE','%' .$request->cari. '%')->paginate(5);
        }else{
            $barangs = Barang::latest()->paginate(5);
        }
        return view('dashboard.barang', compact('barangs'))->with('i', ($request->input('page', 1) - 1));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request,[
            'gambar' => 'required|image',
            'barcode' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required'
        ]);

        //upload gambar
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/toko', $gambar->hashName());

        //tambah barang
        Barang::create([
            'gambar' => $gambar->hashName(),
            'barcode' => $request->barcode,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga
            ]);

        //redirect to index barang
        return view('dashboard.barangs.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mengambil data berdasarkan id
        $barang = Barang::findOrFail($id);

        //mengembalikan hasil dan menampilkan ke view
        return view('dashboard.barangs.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //mengambil data berdasarkan id
        $barang = Barang::findOrFail($id);

        //mengembalikan hasil dan menampilkan ke view
        return view('dashboard.barangs.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi form
        $this->validate($request, [
            'gambar' => 'image',
            'barcode' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required'
        ]);

        //mengambil data berdasarkan id
        $barang = Barang::findOrFail($id);

        if($request->hasFile('gambar')){
            //upload gambar baru
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/toko/', $gambar->hashName());

            //delete gambar lawas
            Storage::delete('public/toko/'.$barang->gambar);

            //update barang dengan gambar baru
            $barang->update([
                'gambar' => $gambar->hashName(),
                'barcode' => $request->barcode,
                'nama_barang' => $request->nama_barang,
                'harga' => $request->harga
            ]);

        }else{
            //update barang tanpa gambar
            $barang->update([
                'barcode' => $request->barcode,
                'nama_barang' => $request->nama_barang,
                'harga' => $request->harga
            ]);
        }
        //redirect to index
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //search data
    public function cari(Request $request)
    {
        if($request->has('cari')){
            $data = Barang::where('nama_barang','LIKE','%' .$request->cari. '%')->paginate(18);
        }else{
            $data = Barang::latest()->paginate(18);
        }
        return view('landingpage', compact('data'));
    }
}
