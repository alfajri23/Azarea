<?php

namespace App\Http\Controllers\Master\Informasi;

use App\Http\Controllers\Controller;
use App\Models\MasterInformasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index(){
        $data = MasterInformasi::all();
        return view('pages.master.informasi.master_informasi',compact('data'));
    }

    public function add(Request $request){
        $data = MasterInformasi::find($request->id);
        return view('pages.master.informasi.master_add_informasi',compact('data'));
    }

    public function delete($id){
        $data = MasterInformasi::find($id)->delete();

        return redirect()->back();
    }

    public function store(Request $request){
        MasterInformasi::updateOrCreate(['id' => $request->id],[
            'nama' => $request->nama,
            'isi' => $request->isi,
            'link' => $request->link,
        ]);

        return redirect()->route('masterInformasi');
    }

    public function about(){
        $title = 'Tentang kami - halobahagia.com';
        $visi = MasterInformasi::where('nama', 'like', '%Visi Misi%')->first();
        $data = MasterInformasi::where('nama', 'like', '%Tentang Kami%')->first();
        $legalitas = MasterInformasi::where('nama', 'like', '%Legalitas%')->first();
        $tujuan = MasterInformasi::where('nama', 'like', '%Tujuan%')->first();
        return view('pages.informasi.term_condition',compact('data','title','visi','legalitas','tujuan'));
    }

}
