<?php

namespace App\Http\Controllers;

use App\Models\datapengirim;
use App\Http\Requests\StoredatapengirimRequest;
use App\Http\Requests\UpdatedatapengirimRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DatapengirimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datapengirim = datapengirim::all();

        return view('datadarim', [
            'pengiriman' => $datapengirim
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredatapengirimRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $lat = $request->post('lat');
            $long = $request->post('long');
            $point = '{"type": "Point", "coordinates": [' . $long . ', ' . $lat . ']}';
            $data = new datapengirim();
            $data->nama = Auth::user()->name;
            $data->alamat = $request->address;
            $data->no_hp = $request->phone;
            $data->geometry = DB::Raw("ST_GeomFromGeoJSON('" . $point . "')");;
            $data->tgl_pengiriman = date("Y-m-d H:i:s");
            $data->jenis_sampah = $request->jenis;
            $data->berat_sampah = $request->berat;
            $data->konfirmasi = "Belum Dikonfirmasi";
            $data->save();
            return redirect("/customer")->with('success', 'Data Berhasil Ditambahkan');
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\datapengirim  $datapengirim
     * @return \Illuminate\Http\Response
     */
    public function show(datapengirim $datapengirim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\datapengirim  $datapengirim
     * @return \Illuminate\Http\Response
     */
    public function edit(datapengirim $datapengirim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedatapengirimRequest  $request
     * @param  \App\Models\datapengirim  $datapengirim
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedatapengirimRequest $request, datapengirim $datapengirim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\datapengirim  $datapengirim
     * @return \Illuminate\Http\Response
     */
    public function destroy(datapengirim $datapengirim)
    {
        //
    }
}
