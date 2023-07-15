<?php

namespace App\Http\Controllers\Galeri\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleriAdminController extends Controller
{
    public function index(){
        $datas = Galeri::all();

        return view('pages.galeri.admin.galeri_admin',compact('datas'));
    }

    public function add() {
        return view('pages.galeri.admin.galeri_add');
    }

    public function delete($id){
        $data = Galeri::find($id);
        File::delete(public_path($data->foto));
        $data->forceDelete();
        return redirect()->back();
    }

    public function store(Request $request){

        $messages = [
            'required' => ':attribute harus diisi.',
            'mimes' => ':attribute tipe yang diterima: :values',
            'max' => 'Ukuran maksimal file 2 Mb'
        ];

        if(!empty($request->docs)){ 
            for($i=0;$i<count($request->docs);$i++){
                $rules['docs.' . $i] = 'file|mimes:jpeg,png,jpg,pdf|max:2048';
                $customAttributes['docs.' . $i] = 'File';
            }
        }

        $docs = [];

        if(!empty($request->docs)){    
            foreach($request->docs as $file){
                $nama_file = time()."_".$file->getClientOriginalName();
                $tujuan_upload_server = public_path('storage/galeri');
                $tujuan_upload = 'storage/galeri';
                $files = $tujuan_upload . '/'. $nama_file;
                $file->move($tujuan_upload_server,$nama_file);
                $docs['foto'] = $files;
                $doc = Galeri::create($docs);
            }

        }

        return redirect()->route('galeriAdmin');



    }
}
