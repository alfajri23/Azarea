<?php

namespace App\Http\Controllers\Akun\Admin;

use App\Helpers\Telepon;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()) {
            
            $data = User::latest()->get();
            return datatables()->of($data)
                ->addIndexColumn()
                ->addColumn('alamat', function($row){
                    return $nama = ' '.$row['dusun'].','.$row['desa'].','.$row['kecamatan'].' ';
                })
                ->addColumn('aksi', function($row){

                    $tel = $row->telepon;
                    $tel = Telepon::changeTo62($tel);
                   
                    $btnDetail = '<a onclick="detail('.$row['id'].')" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-info"></i></a>';
                    
                    $actionBtn = '
                    <div class="clearfix">
                        <div class="">
                            '.$btnDetail.'
                            <a href="https://wa.me/'.$tel.'" target="_blank" class="btn btn-success text-white my-1 btn-sm"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                    ';
                    return $actionBtn;
                })
                ->rawColumns(['aksi','alamat'])
                ->make(true);
        }

        return view('pages.akun.user.admin_user');
    }

    public function detail(Request $request){
        $data = User::find($request->id);

        return response()->json([
            'data' => $data
        ]);
    }
}
