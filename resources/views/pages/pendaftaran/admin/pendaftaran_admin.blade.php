@extends('layouts.layout_admin')

@section('content')

<style>
    p{
        color: black;
    }

    .btn-group, .btn-group-vertical {
        position: absolute;
        display: inline-flex;
        vertical-align: middle;
        z-index: 5;
    }
</style>

<div class="card">
    <div class="card-body">
    <h1 class="fw-bolder mb-4">Pendaftaran</h1>

    <div class="table-responsive">

        <table class="table table-bordered display tableTransaksi" width="100%" cellspacing="0">
            <thead>
                <tr>
                    {{-- <th>v</th> --}}
                    <th>No</th>
                    <th>Nama</th>
                    <th>No. KTP</th>
                    <th>TTL</th>
                    <th>JK</th>
                    <th>Alamat</th>
                    <th>Pekerjaan</th>
                    <th>Ibu</th>
                    <th>Telepon</th>
                    <th>Jml keluarga</th>
                    <th>Agama</th>
                    <th>Pendidikan</th>
                    <th>Hobi</th>
                    <th>Penghasilan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    </div>

</div>

{{-- Modal Detail --}}
<div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail pendaftaran</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body py-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-4">
                                <p>Nama</p>
                                <p>Status</p>
                                <p>No. KTP</p>
                                <p>TTL</p>
                                <p>JK</p>
                                <p>Alamat</p>
                                <p>Pekerjaan</p>
                                <p>Ibu</p>
                                <p>Telepon</p>
                                <p>Jml keluarga</p>
                                <p>Agama</p>
                                <p>Pendidikan</p>
                                <p>Hobi</p>
                                <p>Penghasilan</p>
                                <p>Bukti KTP</p>
                                <p>Bukti Daftar</p>
                            </div>
                            <div class="col-8" id="modalBody">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="mt-3 row">
                    <div id="konfirmasiSection">
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Authorization': `Bearer {{Session::get('token')}}`
        }
	});

    // const queryString = window.location.search;
    // const urlParams = new URLSearchParams(queryString);
    // let ajax = urlParams.get('tipe');

    
    $(function (){
        let tabel = $('.tableTransaksi');

        tabel.DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url : "{{ route('pendaftaranAdmin')}}",
            },
            columns: [
                {
                    data: 'DT_RowIndex', 
                    name: 'DT_RowIndex', 
                    nameorderable: true, 
                    searchable: true,
                    width: "5%"
                },
                {data: 'nama', tipe: 'nama'},
                {data: 'KTP', name: 'KTP',visible: false},
                {data: 'ttl', name: 'ttl',visible: false},
                {data: 'jk', name: 'jk',visible: false},
                {data: 'alamat', name: 'alamat',width: "40%"},
                {data: 'pekerjaan', name: 'pekerjaan',visible: false},
                {data: 'ibu_kandung', name: 'ibu_kandung',visible: false},
                {data: 'telepon', name: 'telepon',visible: false},
                {data: 'jml_keluarga', name: 'jml_keluarga',visible: false},
                {data: 'agama', name: 'agama',visible: false},
                {data: 'pendidikan', name: 'pendidikan',visible: false},
                {data: 'hobi', name: 'hobi',visible: false},
                {data: 'penghasilan', name: 'penghasilan',width: "10%"},
                {data: 'status', name: 'status',width: "10%"},
                {data: 'aksi', name: 'aksi',width: "15%"},
            ],
            dom: 'Bfrtlip',
        })
    })

    function detail(id){
        $.ajax({
            type : 'GET',
            url  : "{{ route('pendaftaranDetailAdmin') }}",
            data : {
                id : id
            },
            dataType: 'json',
            success : (data)=>{
                let datas = data.data;
                let modalBody = $('#modalBody');
                let bukti,file_tambahan;
                let asset,konfirmasi;

                asset = window.location.origin + '/public';
                asset = window.location.origin;
        
                //Bukti KTP
                ktp = `<a class="btn btn-info btn-sm" target="_blank" href="${asset}/${datas.fotoKTP}">Lihat KTP</a>`;

                //Bukti Bayar
                bukti = `<a class="btn btn-info btn-sm" target="_blank" href="${asset}/${datas.buktiBayar}">Lihat bukti</a>`;


                if(datas.status != 'diterima'){
                    konfirmasi = `
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button onclick="tolak(${datas.id})" class="btn btn-danger btn-sm">Tolak</button>
                        <button onclick="terima(${datas.id})" class="btn btn-success text-white">Konfirmasi</button>
                    </div>
                    `;    
                }else{
                    konfirmasi = `
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button onclick="tolak(${datas.id})" class="btn btn-danger btn-sm">Tolak</button>
                    </div>
                    `; 
                }


                let element = ` 
                    <p>:  ${datas.nama}</p>
                    <p>:  ${datas.status}</p>
                    <p>:  ${datas.KTP}</p>
                    <p>:  ${datas.ttl}</p>
                    <p>:  ${datas.jk}</p>
                    <p>:  ${datas.RT},${datas.RW},${datas.dusun},${datas.desa},${datas.kecamatan},${datas.kabupaten},</p>
                    <p>:  ${datas.pekerjaan}</p>
                    <p>:  ${datas.ibu_kandung}</p>
                    <p>:  ${datas.telepon}</p>
                    <p>:  ${datas.jml_anggota}</p>
                    <p>:  ${datas.agama}</p>
                    <p>:  ${datas.pendidikan}</p>
                    <p>:  ${datas.hobi}</p>
                    <p>:  ${datas.penghasilan}</p>
                    <p>:  ${ktp}</p>
                    <p>:  ${bukti}</p>
                `;
            
                modalBody[0].innerHTML = element;
                $('#konfirmasiSection')[0].innerHTML = konfirmasi;


                $('#modalDetail').modal('show');
                
            }
        });

    }

    function tolak(id){
        $.ajax({
            type : 'GET',
            url  : "{{ route('pendaftaranTolakAdmin') }}",
            data : {
                id : id
            },
            dataType: 'json',
            success : (data)=>{
                let datas = data.data;
                swal(datas, "Pendaftaran telah ditolak", "success");
                $('#modalDetail').modal('hide');
                $('.tableTransaksi').DataTable().ajax.reload();
            }
        });
    }

    function terima(id){
        $.ajax({
            type : 'GET',
            url  : "{{ route('pendaftaranTerimaAdmin') }}",
            data : {
                id : id
            },
            dataType: 'json',
            success : (data)=>{
                let datas = data.data;
                swal(datas, "Pendaftaran telah diterima", "success");
                $('#modalDetail').modal('hide');
                $('.tableTransaksi').DataTable().ajax.reload();
            }
        });
    }

    function deletes(id){
        const route = "{{ route('pendaftaranDeleteAdmin') }}";
        const tabel = $('.tableTransaksi');
        const pesan_hapus = "Jika dihapus data akan hilang";

        swalAction(route,tabel,id,pesan_hapus);
    }



    function check_all(){
        $('input[type="checkbox"]').prop("checked", true);
    }




</script>

@endsection