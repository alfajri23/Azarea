<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\LayananProgram;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/', [Controllers\Home\User\UserHomeController::class, 'index'])->name('homeUser');


//* INFORMASI
Route::get('/tentang-kami', [ Controllers\Master\Informasi\InformasiController::class,'about'])->name('about');

//* Galeri
Route::get('/galeri', [ Controllers\Dokumentasi\User\DokumentasiUserController::class,'index'])->name('galeri');

//* kontak
Route::get('/kontak', [ Controllers\Kontak\User\KontakUserController::class,'index'])->name('kontak');

//* PENDAFTARAN
Route::get('/pendaftaran', [ Controllers\Pendaftaran\User\PendaftaranUserController::class,'index'])->name('pendaftaranUser');
Route::post('/pendaftaran', [ Controllers\Pendaftaran\User\PendaftaranUserController::class,'store'])->name('pendaftaranStore');

//* LAYANAN
Route::get('/layanan/{link}', [ Controllers\Layanan\User\LayananUserController::class,'detail_layanan'])->name('layananDetail');
Route::get('/layanan/sub/{link}', [ Controllers\Layanan\User\LayananUserController::class,'detail_sub_layanan'])->name('layananSubDetail');

Route::prefix('blog')->group(function(){
    Route::get('/', [ Controllers\Blog\User\BlogUserController::class,'index'])->name('blogUser');
    Route::get('/detail/{id}/{link?}', [ Controllers\Blog\User\BlogUserController::class,'detail'])->name('blogDetailUser');
    Route::get('/filter', [ Controllers\Blog\User\BlogUserController::class,'filterByCategory'])->name('filterByCategory');
});





//*Admin 
Route::get('adm/login', [Controllers\Auth\Admin\LoginAdminController::class,'index'])->name('loginAdmin');
Route::post('adm/login', [Controllers\Auth\Admin\LoginAdminController::class,'login'])->name('authAdmin');

Route::middleware(['admin'])->prefix('admin')->group(function () {
    Route::get('/', [ Controllers\Home\Admin\AdminHomeController::class,'index'])->name('homeAdmin');
    
    //Detail Layanan
    Route::get('layanan', [ Controllers\Layanan\Admin\LayananController::class,'index'])->name('layananAdmin');
    Route::get('layanan/add', [ Controllers\Layanan\Admin\LayananController::class,'add_program'])->name('layananAddAdmin');
    Route::get('layanan/edit/{id}', [ Controllers\Layanan\Admin\LayananController::class,'edit_program'])->name('layananEditAdmin');
    Route::post('layanan/store', [ Controllers\Layanan\Admin\LayananController::class,'storeLayananProgram'])->name('layananProgramStoreAdmin');
    Route::get('layanan/delete/{id}', [ Controllers\Layanan\Admin\LayananController::class,'delete_layanan'])->name('layananDeleteAdmin');

    Route::post('sub-layanan/store', [ Controllers\Layanan\Admin\LayananController::class,'storeSubLayananProgram'])->name('layananSubProgramStoreAdmin');
    Route::get('sub-layanan/add/{id}', [ Controllers\Layanan\Admin\LayananController::class,'add_sub_layanan'])->name('layananAddSubAdmin');
    Route::get('sub-layanan/edit/{id}', [ Controllers\Layanan\Admin\LayananController::class,'edit_sub_program'])->name('layananSubEditAdmin');
    Route::get('sub-layanan/delete/{id}', [ Controllers\Layanan\Admin\LayananController::class,'delete'])->name('layananSubDeleteAdmin');

    //Detail Program
    Route::prefix('galeri')->group(function(){
        Route::get('/', [ Controllers\Galeri\Admin\GaleriAdminController::class,'index'])->name('galeriAdmin');
        Route::post('/', [ Controllers\Galeri\Admin\GaleriAdminController::class,'store'])->name('galeriStoreAdmin');
        Route::get('add', [ Controllers\Galeri\Admin\GaleriAdminController::class,'add'])->name('galeriAddAdmin');
        Route::get('delete/{id}', [ Controllers\Galeri\Admin\GaleriAdminController::class,'delete'])->name('galeriDeleteAdmin');
    });

    Route::prefix('blog')->group(function(){
        Route::get('/', [ Controllers\Blog\Admin\BlogAdminController::class,'index'])->name('blogAdmin');
        Route::get('/unpublishs', [ Controllers\Blog\Admin\BlogAdminController::class,'blogUnpublish'])->name('blogAdminUnpublish');
        Route::get('/create', [ Controllers\Blog\Admin\BlogAdminController::class,'add'])->name('blogAdd');
        Route::post('/store', [ Controllers\Blog\Admin\BlogAdminController::class,'store'])->name('blogStoreAdmin');
        Route::get('/edit/{id}', [ Controllers\Blog\Admin\BlogAdminController::class,'edit'])->name('blogEditAdmin');
        Route::get('/preview/{id}', [ Controllers\Blog\Admin\BlogAdminController::class,'preview'])->name('blogPreviewAdmin');

        //action
        Route::get('unpublish', [Controllers\Blog\Admin\BlogAdminController::class,'unpublish'])->name('blogUnpublish');
        Route::get('publish', [Controllers\Blog\Admin\BlogAdminController::class,'publish'])->name('blogPublish');
        Route::get('delete', [Controllers\Blog\Admin\BlogAdminController::class,'delete'])->name('blogDelete');
    
        //kategories
        Route::get('/kategori', [Controllers\Blog\Admin\BlogAdminController::class,'blogKategori'])->name('blogKategori');
        Route::post('/kategori/store', [Controllers\Blog\Admin\BlogAdminController::class,'storeBlogKategori'])->name('storeBlogKategori');
        Route::get('/kategori/delete/{id}', [Controllers\Blog\Admin\BlogAdminController::class,'deleteBlogKategori'])->name('deleteBlogKategori');
    });

    Route::prefix('pendaftaran')->group(function(){
        Route::get('/', [ Controllers\Pendaftaran\Admin\PendaftaranAdminController::class,'index'])->name('pendaftaranAdmin');
        Route::get('/detail', [ Controllers\Pendaftaran\Admin\PendaftaranAdminController::class,'detail'])->name('pendaftaranDetailAdmin');
        Route::get('/tolak', [ Controllers\Pendaftaran\Admin\PendaftaranAdminController::class,'tolak'])->name('pendaftaranTolakAdmin');
        Route::get('/terima', [ Controllers\Pendaftaran\Admin\PendaftaranAdminController::class,'terima'])->name('pendaftaranTerimaAdmin');
        Route::get('/delete', [ Controllers\Pendaftaran\Admin\PendaftaranAdminController::class,'delete'])->name('pendaftaranDeleteAdmin');
    });

    Route::prefix('member')->group(function(){
        Route::get('/', [ Controllers\Akun\Admin\AdminUserController::class,'index'])->name('memberAdmin');
        Route::get('/detail', [ Controllers\Akun\Admin\AdminUserController::class,'detail'])->name('memberDetailAdmin');
    });

    Route::prefix('master')->group(function(){
        Route::get('/kontak', [ Controllers\Master\Kontak\KontakController::class,'index'])->name('masterKontak');
        Route::post('/kontak', [ Controllers\Master\Kontak\KontakController::class,'store'])->name('masterStoreKontak');
    
        Route::get('/informasi', [ Controllers\Master\Informasi\InformasiController::class,'index'])->name('masterInformasi');
        Route::get('/informasi/edit', [ Controllers\Master\Informasi\InformasiController::class,'add'])->name('masterAddInformasi');
        Route::get('/informasi/delete/{id}', [ Controllers\Master\Informasi\InformasiController::class,'delete'])->name('masterDeleteInformasi');
        Route::post('/informasi/store', [ Controllers\Master\Informasi\InformasiController::class,'store'])->name('masterStoreInformasi');
    
        Route::get('/program', [ Controllers\Master\Program\MasterProgramController::class,'index'])->name('masterProgram');
        Route::get('/program/edit', [ Controllers\Master\Program\MasterProgramController::class,'add'])->name('masterAddProgram');
        Route::get('/program/delete/{id}', [ Controllers\Master\Program\MasterProgramController::class,'delete'])->name('masterDeleteProgram');
        Route::post('/program/store', [ Controllers\Master\Program\MasterProgramController::class,'store'])->name('masterStoreProgram');
    
        Route::prefix('banner')->group(function(){
            Route::get('/', [ Controllers\Master\Banner\BannerController::class,'index'])->name('masterBanner');
            Route::post('/', [ Controllers\Master\Banner\BannerController::class,'store'])->name('masterBannerStore');
            Route::get('/delete/{id}', [ Controllers\Master\Banner\BannerController::class,'delete'])->name('masterBannerDelete');
        });

        Route::prefix('client')->group(function(){
            Route::get('/', [ Controllers\Master\Client\ClientController::class,'index'])->name('masterClient');
            Route::post('/', [ Controllers\Master\Client\ClientController::class,'store'])->name('masterClientStore');
            Route::get('/delete/{id}', [ Controllers\Master\Client\ClientController::class,'delete'])->name('masterClientDelete');
        });

        Route::prefix('testimoni')->group(function(){
            Route::get('/', [ Controllers\Master\Testimoni\TestimoniController::class,'index'])->name('masterTestimoni');
            Route::post('/', [ Controllers\Master\Testimoni\TestimoniController::class,'store'])->name('masterTestimoniStore');
            Route::get('/delete/{id}', [ Controllers\Master\Testimoni\TestimoniController::class,'delete'])->name('masterTestimoniDelete');
        });

        Route::prefix('team')->group(function(){
            Route::get('/', [ Controllers\Master\Team\TeamController::class,'index'])->name('masterTeam');
            Route::post('/', [ Controllers\Master\Team\TeamController::class,'store'])->name('masterTeamStore');
            Route::get('/delete/{id}', [ Controllers\Master\Team\TeamController::class,'delete'])->name('masterTeamDelete');
        });

        Route::prefix('sosmed')->group(function(){
            Route::get('/', [ Controllers\Master\Sosmed\SosmedController::class,'index'])->name('masterSosmed');
            Route::get('/edit', [ Controllers\Master\Sosmed\SosmedController::class,'add'])->name('masterAddSosmed');
            Route::get('/delete/{id}', [ Controllers\Master\Sosmed\SosmedController::class,'delete'])->name('masterDeleteSosmed');
            Route::post('/store', [ Controllers\Master\Sosmed\SosmedController::class,'store'])->name('masterStoreSosmed');
        });

        Route::prefix('faq')->group(function(){
            Route::get('/', [ Controllers\Master\FAQ\FAQController::class,'index'])->name('masterFAQ');
            Route::get('/edit', [ Controllers\Master\FAQ\FAQController::class,'add'])->name('masterAddFAQ');
            Route::get('/delete/{id}', [ Controllers\Master\FAQ\FAQController::class,'delete'])->name('masterDeleteFAQ');
            Route::post('/store', [ Controllers\Master\FAQ\FAQController::class,'store'])->name('masterStoreFAQ');
        });
    });
    

});


Route::get('/ganti-telepon', function(){
    $datas = LayananProgram::all();

    foreach ($datas as $data){
        $data->link_tombol = 'https://wa.me/+6282137438888';
        $data->save();
    }

});
