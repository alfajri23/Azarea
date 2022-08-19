<?php

namespace App\Http\Controllers\Master\Client;

use App\Helpers\UploadFile;
use App\Http\Controllers\Controller;
use App\Models\MasterClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    public function index(){
        $datas = MasterClient::all();
        return view('pages.master.client.master_client',compact('datas'));
    }

    public function store(Request $request){

        $this->validate($request, [
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048|required',
        ]);

        $datas = [];
        $datas = UploadFile::file($request,'foto','storage/master/client',$datas);

        MasterClient::create($datas);

        return redirect()->back();
    }

    public function delete($id){
        $data = MasterClient::find($id);
        File::delete(public_path($data->foto));
        $data->forceDelete();

        return redirect()->back();
    }
}