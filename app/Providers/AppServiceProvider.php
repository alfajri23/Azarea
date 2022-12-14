<?php

namespace App\Providers;

use App\Helpers\Telepon;
use App\Models\Layanan;
use App\Models\MasterKontak;
use App\Models\MasterSettingProgram;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        config(['app.locale'=>'id']);
        Paginator::useBootstrap();


        View()->composer('components.footer.footer_user', function ($view) {
            $data = Cache::remember('footer_data', 7200, function () {
                return $data = MasterKontak::first();
            });

            $logo = Cache::remember('logo', 7200, function () {
                $datas = MasterSettingProgram::find(1);
                return $datas->foto;
            });

            $layanans = Cache::remember('layanan', 14400, function () {
                return Layanan::latest()->get();
            });


            $view->with([
                'data' => $data,
                'logo' => $logo,
                'layanans' => $layanans
            ]);
        });

        View()->composer('layouts.layout_user', function ($view) {
            
            $data = Cache::rememberForever('favicon', function () {
                $data = MasterSettingProgram::find(2);
                return $data->foto;
            });

            $view->with('favicon', $data);
        });


        View()->composer('components.navbar.navbar_users_travel', function ($view) {
            $data = Cache::remember('logo', 7200, function () {
                $data = MasterSettingProgram::find(1);
                return $data->foto;
            });

            $layanans = Layanan::latest()->get();
            $view->with([
                'data'=>$data,
                'layanans' => $layanans
            ]);
        });

        View()->composer('components.floating_button.floating_button', function ($view) {
            $data = MasterKontak::first();
           
            $data = Telepon::changeTo62($data->telepon_3);
            $view->with('data', $data);
        });

        Schema::defaultStringLength(191);
    }
}
