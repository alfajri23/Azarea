<?php

namespace App\Http\Controllers\Kontak\User;

use App\Http\Controllers\Controller;
use App\Models\MasterKontak;
use Illuminate\Http\Request;

class KontakUserController extends Controller
{
    public function index(){
        $data = MasterKontak::find(1);
        return view('pages.kontak.user.kontak_user',compact('data'));
    }
}
