<?php

namespace App\Http\Controllers\Master\Sosmed;

use App\Helpers\UploadFile;
use App\Helpers\Validator;
use App\Http\Controllers\Controller;
use App\Models\MasterSosmed;
use Illuminate\Http\Request;

class SosmedController extends Controller
{
    public function index(){
        $data = MasterSosmed::all();
        return view('pages.master.sosmed.master_sosmed',compact('data'));
    }

    public function add(Request $request){
        $data = MasterSosmed::find($request->id);
        return view('pages.master.sosmed.master_add_sosmed',compact('data'));
    }

    public function delete($id){
        $data = MasterSosmed::find($id)->delete();

        return redirect()->back();
    }

    public function store(Request $request){
        
        $message = Validator::message();
        $this->validate($request, [
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:200|required',
        ],$message);

        $datas = [
            'nama' => $request->nama,
            'link' => $request->link,
        ];

        $datas = UploadFile::file($request,'foto','storage/master/sosmed',$datas);

        MasterSosmed::updateOrCreate(['id' => $request->id],$datas);

        return redirect()->route('masterSosmed');
    }

}
