<?php

Route::auth();

// ===============================================
// ADMIN SECTION =================================
// ===============================================
Route::group(array('prefix' => 'admin', 'middleware' => 'web'), function()
{
    // main page for the admin section (app/views/admin/dashboard.blade.php)
    Route::get('/', array('uses'=>'Admin\HomeController@Index', 'middleware' => ['auth.user']))->name('admin.home');
    
    Route::group(array('prefix' => 'professores', 'middleware' => ['auth.user']), function()
    {
        Route::get('/', ['uses'=>'Admin\ProfessoresController@Index'])->name('admin.professores');
        Route::get('/visualizar/{id}', ['uses'=>'Admin\ProfessoresController@Visualizar'])->name('admin.professores.visualizar');
        Route::get('/incluir', ['uses'=>'Admin\ProfessoresController@Incluir'])->name('admin.professores.incluir');
        Route::get('/alterar/{id}', ['uses'=>'Admin\ProfessoresController@Alterar'])->name('admin.professores.alterar');
        Route::post('/salvar', ['before' => 'csrf', 'uses'=>'Admin\ProfessoresController@Salvar'])->name('admin.professores.salvar');
        Route::get('/excluir/{id}', ['uses'=>'Admin\ProfessoresController@Excluir'])->name('admin.professores.excluir');
        
    });
    
    Route::group(array('prefix' => 'ritmos', 'middleware' => ['auth.user']), function()
    {
        Route::get('/', ['uses'=>'Admin\RitmosController@Index'])->name('admin.ritmos');
        Route::get('/visualizar/{id}', ['uses'=>'Admin\RitmosController@Visualizar'])->name('admin.ritmos.visualizar');
        Route::get('/incluir', ['uses'=>'Admin\RitmosController@Incluir'])->name('admin.ritmos.incluir');
        Route::get('/alterar/{id}', ['uses'=>'Admin\RitmosController@Alterar'])->name('admin.ritmos.alterar');
        Route::post('/salvar', ['before' => 'csrf', 'uses'=>'Admin\RitmosController@Salvar'])->name('admin.ritmos.salvar');
        Route::get('/excluir/{id}', ['uses'=>'Admin\RitmosController@Excluir'])->name('admin.ritmos.excluir');
        
    });
    
    Route::group(array('prefix' => 'workshops', 'middleware' => ['auth.user']), function()
    {
        Route::get('/', ['uses'=>'Admin\WorkshopsController@Index'])->name('admin.workshops');
        Route::get('/visualizar/{id}', ['uses'=>'Admin\WorkshopsController@Visualizar'])->name('admin.workshops.visualizar');
        Route::get('/incluir', ['uses'=>'Admin\WorkshopsController@Incluir'])->name('admin.workshops.incluir');
        Route::get('/alterar/{id}', ['uses'=>'Admin\WorkshopsController@Alterar'])->name('admin.workshops.alterar');
        Route::post('/salvar', ['before' => 'csrf', 'uses'=>'Admin\WorkshopsController@Salvar'])->name('admin.workshops.salvar');
        Route::get('/excluir/{id}', ['uses'=>'Admin\WorkshopsController@Excluir'])->name('admin.workshops.excluir');
        
    });
    
    Route::group(array('prefix' => 'banners', 'middleware' => ['auth.user']), function()
    {
        Route::get('/', ['uses'=>'Admin\BannersController@Index'])->name('admin.banners');
        Route::get('/visualizar/{id}', ['uses'=>'Admin\BannersController@Visualizar'])->name('admin.banners.visualizar');
        Route::get('/alterar/{id}', ['uses'=>'Admin\BannersController@Alterar'])->name('admin.banners.alterar');
        Route::post('/salvar', ['before' => 'csrf', 'uses'=>'Admin\BannersController@Salvar'])->name('admin.banners.salvar');
        
    });
    
    Route::group(array('prefix' => 'aulas', 'middleware' => ['auth.user']), function()
    {
        Route::get('/', ['uses'=>'Admin\AulasController@Index'])->name('admin.aulas');
        Route::get('/incluir', ['uses'=>'Admin\AulasController@Incluir'])->name('admin.aulas.incluir');
        Route::get('/alterar/{id}', ['uses'=>'Admin\AulasController@Alterar'])->name('admin.aulas.alterar');
        Route::post('/salvar', ['before' => 'csrf', 'uses'=>'Admin\AulasController@Salvar'])->name('admin.aulas.salvar');
        Route::get('/excluir/{id}', ['uses'=>'Admin\AulasController@Excluir'])->name('admin.aulas.excluir');
        
    });
    
    Route::group(array('prefix' => 'galerias', 'middleware' => ['auth.user']), function()
    {
        Route::get('/', ['uses'=>'Admin\GaleriasController@Index'])->name('admin.galerias');
        Route::get('/incluir', ['uses'=>'Admin\GaleriasController@Incluir'])->name('admin.galerias.incluir');
        Route::get('/visualizar/{id}', ['uses'=>'Admin\GaleriasController@Visualizar'])->name('admin.galerias.visualizar');
        Route::get('/alterar/{id}', ['uses'=>'Admin\GaleriasController@Alterar'])->name('admin.galerias.alterar');
        Route::post('/salvar', ['before' => 'csrf', 'uses'=>'Admin\GaleriasController@Salvar'])->name('admin.galerias.salvar');
        Route::get('/excluir/{id}', ['uses'=>'Admin\GaleriasController@Excluir'])->name('admin.galerias.excluir');
        
    });
    
    Route::group(array('prefix' => 'fotosgalerias', 'middleware' => ['auth.user']), function()
    {
        Route::get('/lista/{id}', ['uses'=>'Admin\FotosGaleriasController@Index'])->name('admin.fotosgalerias');
        Route::get('/incluir/{id}', ['uses'=>'Admin\FotosGaleriasController@Incluir'])->name('admin.fotosgalerias.incluir');
        Route::get('/alterar/{id}', ['uses'=>'Admin\FotosGaleriasController@Alterar'])->name('admin.fotosgalerias.alterar');
        Route::post('/salvar', ['before' => 'csrf', 'uses'=>'Admin\FotosGaleriasController@Salvar'])->name('admin.fotosgalerias.salvar');
        Route::get('/excluir/{id}', ['uses'=>'Admin\FotosGaleriasController@Excluir'])->name('admin.fotosgalerias.excluir');
        
    });
    
    Route::group(array('prefix' => 'videosgalerias', 'middleware' => ['auth.user']), function()
    {
        Route::get('/lista/{id}', ['uses'=>'Admin\VideosGaleriasController@Index'])->name('admin.videosgalerias');
        Route::get('/incluir/{id}', ['uses'=>'Admin\VideosGaleriasController@Incluir'])->name('admin.videosgalerias.incluir');
        Route::get('/alterar/{id}', ['uses'=>'Admin\VideosGaleriasController@Alterar'])->name('admin.videosgalerias.alterar');
        Route::post('/salvar', ['before' => 'csrf', 'uses'=>'Admin\VideosGaleriasController@Salvar'])->name('admin.videosgalerias.salvar');
        Route::get('/excluir/{id}', ['uses'=>'Admin\VideosGaleriasController@Excluir'])->name('admin.videosgalerias.excluir');
        
    });
    
});

// ===============================================
// ============== WEBPAGE SECTION ================
// ===============================================
Route::get('/', ['uses'=>'DefaultController@Index'])->name('inicio.default');
Route::get('album/{id}', ['uses'=>'DefaultController@Album'])->name('inicio.album');
Route::get('bolsistas', ['uses'=>'DefaultController@Bolsistas'])->name('bolsistas');
Route::resource('email', 'EnvioEmailController');

// ===============================================
// =============== LOGIN SECTION =================
// ===============================================

Route::get('admin/login', ['uses'=>'Admin\LoginController@Index', 'middleware' => ['web']])->name('login');
Route::post('admin/login', ['uses'=>'Admin\LoginController@Entrar', 'middleware' => ['web']])->name('entrar');
Route::get('admin/logout', ['uses'=>'Admin\LoginController@Logout', 'middleware' => ['web']])->name('logout');