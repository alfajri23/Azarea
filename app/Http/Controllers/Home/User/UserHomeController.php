<?php

namespace App\Http\Controllers\Home\User;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Galeri;
use App\Models\KonsultasiLayanan;
use App\Models\Layanan;
use App\Models\LayananProgram;
use App\Models\MasterBanner;
use App\Models\MasterSettingProgram;
use App\Models\MasterTestimoni;
use App\Models\ProdukEvent;
use App\Models\ProdukKelas;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UserHomeController extends Controller
{
    public function index(){

        $logo = Cache::remember('logo', 7200, function () {
            $data = MasterSettingProgram::find(1);
            return $data->foto;
        });

        $galeris = Galeri::limit(10)->get();
        $banners = MasterBanner::limit(10)->get();
        $layanans = Layanan::all();
        $blogs = Blog::limit(3)->get(); 
        $testimonis = MasterTestimoni::limit(3)->get(); 
        $destinations = LayananProgram::where('id_layanan',2)->limit(4)->get(); 

        return view('pages.home.user.home_travel',compact('destinations','layanans','blogs','logo','galeris','banners','testimonis'));
    }


}
