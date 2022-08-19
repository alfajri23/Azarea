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
    <h1 class="fw-bolder mb-4">Member</h1>

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
                    <th>Tanggal masuk</th>
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
            <h5 class="modal-title" id="exampleModalLabel">Detail member</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body py-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-4">
                                <p>Nama</p>
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

    
    $(function (){
        let tabel = $('.tableTransaksi');

        tabel.DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url : "{{ route('memberAdmin')}}",
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
                {data: 'updated_at', name: 'updated_at',visible: false},
                {data: 'aksi', name: 'aksi',width: "15%"},
            ],
            dom: 'Bfrtlip',
            buttons: [
                {
                    extend: 'copyHtml5',
                    title: 'Data member',
                },
                {
                    extend: 'excelHtml5',
                    title: 'Data member',
                   
                },
                {
                    extend: 'csvHtml5',
                    title: 'Data member',
                    
                },
                
            ]
        })
    })

    function detail(id){
        $.ajax({
            type : 'GET',
            url  : "{{ route('memberDetailAdmin') }}",
            data : {
                id : id
            },
            dataType: 'json',
            success : (data)=>{
                let datas = data.data;
                let modalBody = $('#modalBody');
                let bukti,file_tambahan;
                let asset,konfirmasi;


                let element = ` 
                    <p>:  ${datas.nama}</p>
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
                `;
                modalBody[0].innerHTML = element;

                $('#modalDetail').modal('show');
                
            }
        });

    }

</script>

@endsection