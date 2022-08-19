@extends('layouts.layout_user')
@section('content')

<style>
    .form-control {
        background-color: white !important;
        border: 1px solid #b3b3b3;
        border-radius: 10px;
    }
</style>

<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="dlab-bnr-inr overlay-black-middle bg-primary">
        <div class="container">
            <div class="dlab-bnr-inr-entry">
                <h1 class="text-white">Pendaftaran</h1>
                <p class="text-white">Member KSP Amanah</p>
            </div>
        </div>
    </div>
    <!-- inner page banner END -->
    <!-- contact area -->
    <div class="content-area">
        <div class="container">
            @include('components.error.error_message')
            <div class="col-sm-8 col-12 mx-auto">
                <form action="{{route('pendaftaranStore')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label text-dark fw-normal">Nama lengkap</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark fw-normal">Nomor KTP</label>
                    <input type="text" name="KTP" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark fw-normal">Tempat tanggal lahir</label>
                    <input type="text" name="ttl" class="form-control">
                </div>

                <fieldset class="row mb-3">
                    <label class="form-label text-dark fw-normal">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <div class="form-check ps-0">
                        <input class="form-check-input" type="radio" name="jk" id="jk1" value="laki-laki">
                        <label class="form-check-label fw-normal" for="jk1">
                          Laki-laki
                        </label>
                      </div>
                      <div class="form-check ps-0">
                        <input class="form-check-input" type="radio" name="jk" id="jk2" value="perempuan">
                        <label class="form-check-label fw-normal" for="jk2">
                          Perempuan
                        </label>
                      </div>
                    </div>
                </fieldset>

                <div class="row g-3 mb-3">
                    <div class="col-sm-7">
                        <label class="form-label text-dark fw-normal">Dusun</label>
                        <input type="text" class="form-control" placeholder="Dusun" name="dusun">
                    </div>
                    <div class="col-sm">
                        <label class="form-label text-dark fw-normal">RT</label>
                        <input type="text" class="form-control" placeholder="RT" name="RT">
                    </div>
                    <div class="col-sm">
                        <label class="form-label text-dark fw-normal">RW</label>
                        <input type="text" class="form-control" placeholder="RW" name="RW">
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-sm-4">
                        <label class="form-label text-dark fw-normal">Desa</label>
                        <input type="text" class="form-control" placeholder="Desa" name="desa">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label text-dark fw-normal">Kecamatan</label>
                        <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan">
                    </div>
                    <div class="col-sm-4">
                        <label class="form-label text-dark fw-normal">Kabupaten</label>
                        <input type="text" class="form-control" placeholder="Kabupaten" name="kabupaten">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label text-dark fw-normal">Pekerjaan</label>
                    <input type="text" class="form-control" name="pekerjaan">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark fw-normal">Nama ibu kandung</label>
                    <input type="text" class="form-control" name="ibu_kandung">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark fw-normal">Telepon</label>
                    <input type="tel" class="form-control" name="telepon">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark fw-normal">Jumlah Anggota Keluarga</label>
                    <input type="number" class="form-control" name="jml_keluarga">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark fw-normal">Pendidikan</label>
                    <input type="text" class="form-control" name="pendidikan">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark fw-normal">Hobi</label>
                    <input type="text" class="form-control" name="hobi">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark fw-normal">Agama</label>
                    <input type="text" class="form-control" name="agama">
                </div>
                <div class="mb-3">
                    <label class="form-label text-dark fw-normal">Penghasilan</label>
                    <input type="text" onkeyup="currencyFormat(this)" class="form-control" name="penghasilan">
                </div>

                <div class="row mb-3">
                    <div class="">
                        <label class="form-label text-dark fw-normal">Penghasilan</label>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Simpanan pokok Rp. 10.000
                            </label>
                        </div>

                        <div class="form-check mb-5">
                            <input class="form-check-input" type="checkbox" id="gridCheck2">
                            <label class="form-check-label" for="gridCheck2">
                                Simpanan wajib Rp. 1.000,-/bulan
                            </label>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-sm-4">
                                <label for="formFile" class="form-label text-dark fw-normal">Foto KTP</label>
                            <input class="form-control" type="file" name="fotoKTP">
                            </div>
                            <div class="col-sm-8">
                                <label for="formFile" class="form-label text-dark fw-normal">Bukti bayar simpanan</label>
                            <input class="form-control" type="file" name="buktiBayar">
                            </div>
                        </div>
                      
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5">
                            <a class="btn btn-light me-md-1" href="{{ url()->previous() }}">Kembali</a>
                            <button class="btn btn-success" type="submit">Daftar</button>
                        </div>

                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>


@endsection