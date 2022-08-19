<?php

namespace App\Http\Controllers\Layanan\Admin;

use App\Helpers\UploadFile;
use App\Http\Controllers\Controller;
use App\Models\Dokumentasi;
use App\Models\Galeri;
use App\Models\Layanan;
use App\Models\LayananProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LayananController extends Controller
{
    public function index(){
        $datas = Layanan::all();
        //dd($datas[0]->programs);
        return view('pages.layanan.admin.layanan_admin',compact('datas'));
    }

    public function add_program(){
        return view('pages.layanan.admin.master.layanan_add');
    }

    public function add_sub_layanan($id){
        $data = Layanan::find($id);
        return view('pages.layanan.admin.layanan_add',compact('id','data'));
    }

    public function edit_program($id){
        $data = Layanan::find($id);
        return view('pages.layanan.admin.master.layanan_edit',compact('data'));
    }

    public function edit_sub_program($id){
        $data = LayananProgram::find($id);
        $docs = Galeri::where('id_layanan',$id)->get();
        return view('pages.layanan.admin.layanan_edit',compact('data','docs'));
    }

    public function delete_layanan($id) {
        $layanan = Layanan::find($id);
        File::delete(public_path($layanan->foto));
        $datas = $layanan->programs;

        foreach ($datas as $data){
            $sub = LayananProgram::find($data->id);
           
            $sub->forceDelete();
        }

        $layanan->forceDelete();

        return redirect()->back();
    }

    public function delete($id) {
        $data = LayananProgram::find($id)->forceDelete();

        return redirect()->back();
    }

    public function storeLayananProgram(Request $request){

        $messages = [
            'required' => ':attribute harus diisi.',
            'mimes' => ':attribute tipe yang diterima: :values',
            'max' => ':attribute Ukuran maksimal file :values'
        ];
     
        $this->validate($request, [
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
            'logo' => 'file|image|mimes:jpeg,png,jpg|max:500',
        ],$messages);

        $datas = [
            'nama'=>$request->nama,
            'desc' => $request->desc,
        ];

        if(!empty($request->foto)){
            $datas = UploadFile::file($request,'foto','storage/program',$datas);

            $data = Layanan::find($request->id);
            if(isset($data)){
                File::delete(public_path($data->foto));
            }
        }

        if(!empty($request->logo)){
            $datas = UploadFile::file($request,'logo','storage/program/logo',$datas);

            $data = Layanan::find($request->id);
            if(isset($data)){
                File::delete(public_path($data->logo));
            }
        }

        $data = Layanan::updateOrCreate(['id'=>$request->id],$datas);


        return redirect()->route('layananAdmin');
    }

    public function storeSubLayananProgram(Request $request){

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

        $this->validate($request, [
            'foto' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ],$messages);

        $datas = [
            'nama'=>$request->nama,
            'id_layanan'=>$request->id_layanan,
            'desc' => $request->desc,
        ];


        if(!empty($request->foto)){
            $datas = UploadFile::file($request,'foto','storage/program/sub',$datas);

            $data = LayananProgram::find($request->id);
            if(isset($data)){
                File::delete(public_path($data->foto));
            }
        }

        if(!empty($request->logo)){
            $datas = UploadFile::file($request,'logo','storage/program/sub/logo',$datas);

            $data = Layanan::find($request->id);
            if(isset($data)){
                File::delete(public_path($data->logo));
            }
        }

        $data = LayananProgram::updateOrCreate(['id'=>$request->id],$datas);

        if(!empty($request->docs)){    
            foreach($request->docs as $file){
                $nama_file = time()."_".$file->getClientOriginalName();
                $tujuan_upload_server = public_path('storage/dokumentasi');
                $tujuan_upload = 'storage/dokumentasi';
                $files = $tujuan_upload . '/'. $nama_file;
                $file->move($tujuan_upload_server,$nama_file);
                $docs['id_layanan'] = $data->id;
                $docs['foto'] = $files;
                $doc = Galeri::create($docs);
            }
        }

        

        return redirect()->route('layananAdmin');
    }
}
