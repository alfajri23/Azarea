<?php

namespace App\Http\Controllers\Layanan\User;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\Layanan;
use App\Models\LayananProgram;
use Illuminate\Http\Request;

class LayananUserController extends Controller
{
    public function detail_layanan($id){
        $data = Layanan::find($id);
        $subs = LayananProgram::where('id_layanan',$id)->get();

        return view('pages.layanan.user.layanan_detail_user',compact('data','subs'));
    }

    public function detail_sub_layanan($id){
        $data = LayananProgram::find($id);
        $galeris = Galeri::where('id_layanan',$id)->get();
        return view('pages.layanan.user.sub.sub_layanan_detail_user',compact('data','galeris'));
    }
}
