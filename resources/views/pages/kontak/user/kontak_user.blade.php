@extends('layouts.layout_user')
@section('content')

<style>
    .header-transparent{
        background-color: #219EBC !important;
        /* background-color: #ffffff !important; */
        color: black !important;
        position: relative;
    }
</style>

<div class="bg-white vh-100">
    <!-- content start -->
    <div class="section-full bg-white content-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sort-title clearfix text-center">
                        <h4>Kontak Kami</h4>
                    </div>
                    <div class="section-content box-sort-in button-example p-b0">
                        <div class="row">

                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box-ho">
                                    <div class="icon-sm m-b20"> 
                                        <a href="javascript:void(0);" class="icon-cell">
                                            <i class="ti-map-alt"></i>
                                        </a> 
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="dlab-tilte">Alamat</h5>
                                        <p>{{$data->alamat}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box-ho">
                                    <div class="icon-sm m-b20"> 
                                        <a href="javascript:void(0);" class="icon-cell">
                                            <i class="ti-email"></i>
                                        </a> 
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="dlab-tilte">Email</h5>
                                        <p>{{$data->email}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 m-b30">
                                <div class="icon-bx-wraper bx-style-1 p-a30 center fly-box-ho">
                                    <div class="icon-sm m-b20"> 
                                        <a href="javascript:void(0);" class="icon-cell">
                                            <i class="ti-headphone-alt"></i>
                                        </a> 
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="dlab-tilte">Telepon</h5>
                                        {{-- <small>Telepon 1</small> --}}
                                        <p>{{$data->telepon_1}}</p>
                                        {{-- <small>Telepon 1</small>
                                        <p>{{$data->telepon_2}}</p>
                                        <small>Telepon 1</small>
                                        <p>{{$data->telepon_3}}</p> --}}
                                    </div>
                                </div>
                            </div>
                           

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection