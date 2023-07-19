<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Pasien;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelurahan = Kelurahan::all();
        return view('Pasien.create', compact('kelurahan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'nama' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'kelurahan' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'rt' => 'required',
            'rw' => 'required',
        ]);

        $data = new Pasien();
        $data->nama = $request->nama;
        $data->no_telp = $request->no_telp;
        $data->alamat = $request->alamat;
        $data->rt = $request->rt;
        $data->rw = $request->rw;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tgl_lahir = $request->tgl_lahir;
        //format id
        $latest_id = Pasien::latest()->first('id');
        if ($latest_id == null) {
            $new_number = $latest_id + 1;
        } else {
            $latest_id_new = Pasien::latest()->first()->id;
            $new_number = $latest_id_new + 1;
        }
        $format = str_pad($new_number, 6, '0', STR_PAD_LEFT);
        $id = date('y') . date('m') . $format;
        $data->id_pasien = $id;
        // dd($id);

        $data->save();
        $data->kelurahan()->attach($request->kelurahan);

        return redirect()->route('operator.home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    // Find the Pasien record by the given ID
    $data = Pasien::find($id);

    // Detach the related Kelurahan records from the Pasien model
    $data->kelurahan()->detach();

    // Delete the Pasien record
    $data->delete();

    return redirect()->route('operator.home');

    }

    public function kartu_pasien($id)
    {
        $pasien = Pasien::where('id_pasien', $id)->first();

        $pdf = Pdf::loadview('Pasien.kartu_pasien', ['data' => $pasien])->setpaper('A5', 'landscape');
        return $pdf->stream('Kartu-' . $pasien->id_pasien . '.pdf', array("Attachment" => false));
        exit(0);
    }
}
