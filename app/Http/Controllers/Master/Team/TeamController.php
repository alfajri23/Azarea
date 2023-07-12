<?php

namespace App\Http\Controllers\Master\Team;

use App\Helpers\UploadFile;
use App\Http\Controllers\Controller;
use App\Models\MasterTeam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class TeamController extends Controller
{
    public function index(){
        $datas = MasterTeam::all();
        return view('pages.master.team.master_team',compact('datas'));
    }

    public function store(Request $request){

        $this->validate($request, [
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048|required',
        ]);

        $dataLama = MasterTeam::where('urutan',$request->urutan)->first();

        if($dataLama){
            $datas['urutan'] = $dataLama->urutan;
            $dataLama->urutan = $request->urutan;
            $dataLama->save();
        }else{
            $datas['urutan'] = $request->urutan;
        }

        $datas['isi'] = $request->isi;
        $datas['role'] = $request->role;
        $datas['nama'] = $request->nama;
        

        $datas = UploadFile::file($request,'foto','storage/master/team',$datas);

        MasterTeam::create($datas);

        return redirect()->back();
    }

    public function delete($id){
        $data = MasterTeam::find($id);
        File::delete(public_path($data->foto));
        $data->forceDelete();

        return redirect()->back();
    }
}
