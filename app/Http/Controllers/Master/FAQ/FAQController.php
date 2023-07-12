<?php

namespace App\Http\Controllers\Master\FAQ;

use App\Http\Controllers\Controller;
use App\Models\MasterFAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index(){
        $data = MasterFAQ::all();
        return view('pages.master.faq.master_faq',compact('data'));
    }

    public function add(Request $request){
        $data = MasterFAQ::find($request->id);
        return view('pages.master.faq.master_add_faq',compact('data'));
    }

    public function delete($id){
        $data = MasterFAQ::find($id)->delete();

        return redirect()->back();
    }

    public function store(Request $request){
        MasterFAQ::updateOrCreate(['id' => $request->id],[
            'nama' => $request->nama,
            'isi' => $request->isi,
        ]);

        return redirect()->route('masterFAQ');
    }

}
