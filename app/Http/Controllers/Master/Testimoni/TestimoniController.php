<?php

namespace App\Http\Controllers\Master\Testimoni;

use App\Helpers\UploadFile;
use App\Http\Controllers\Controller;
use App\Models\MasterTestimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimoniController extends Controller
{
    public function index(){
        $datas = MasterTestimoni::all();
        return view('pages.master.testimoni.master_testimoni',compact('datas'));
    }

    public function store(Request $request){

        $this->validate($request, [
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048|required',
        ]);

        $datas['isi'] = $request->isi;
        $datas['role'] = $request->role;
        $datas['nama'] = $request->nama;

        $datas = UploadFile::file($request,'foto','storage/master/testimoni',$datas);

        MasterTestimoni::create($datas);

        return redirect()->back();
    }

    public function delete($id){
        $data = MasterTestimoni::find($id);
        File::delete(public_path($data->foto));
        $data->forceDelete();

        return redirect()->back();
    }
}
