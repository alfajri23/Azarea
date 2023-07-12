<?php

namespace App\Http\Controllers\Galeri\User;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriUserController extends Controller
{
    public function index(){
        $galeris = Galeri::all();

        return view('pages.galeri.user.galeri_user',compact('galeris'));
    }
}
