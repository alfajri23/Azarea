<?php

namespace App\Http\Controllers\Layanan\User;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use App\Models\Layanan;
use App\Models\LayananProgram;
use Illuminate\Http\Request;

class LayananUserController extends Controller
{
    public function detail_layanan($link){
        $data = Layanan::where('link',$link)->first();
        $subs = LayananProgram::where('id_layanan',$data->id)->get();

        return view('pages.layanan.user.layanan_detail_user',compact('data','subs'));
    }

    public function detail_sub_layanan($link){
        $data = LayananProgram::where('link',$link)->first();
        $galeris = Galeri::where('id_layanan',$data->id)->get();
        return view('pages.layanan.user.sub.sub_layanan_detail_user',compact('data','galeris'));
    }
}
