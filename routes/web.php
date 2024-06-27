<?php

    use Illuminate\Support\Facades\Route;
    use Illuminate\App\Http\Controllers\FrontController;
    use Illuminate\App\Http\Controllers\SeccionController;
    use Illuminate\App\Http\Controllers\AJAXController;
    use Illuminate\App\Http\Controllers\Auth\LoginController;
    use Illuminate\App\Http\Controllers\SliderPrincipalController;
    use Illuminate\App\Http\Controllers\EmpresaController;
    use Illuminate\App\Http\Controllers\GaleriaController;
    use Illuminate\App\Http\Controllers\ServicioController;
    use Illuminate\App\Http\Controllers\CapacitacionController;
    use Illuminate\App\Http\Controllers\ProxyController;
   


    Route::get('/', 'FrontController@index')->name('front.home');
    Route::get('/nosotros', 'FrontController@nosotros')->name('front.nosotros');
    Route::get('/contacto', 'FrontController@contacto')->name('front.contacto');
    Route::get('/servicios', 'FrontController@servicios')->name('front.servicios');
    Route::get('/servicio_detalle/{id}', 'FrontController@servicio')->name('front.servicio');
    Route::get('/aviso_privacidad', 'FrontController@aviso_privacidad')->name('front.aviso_privacidad');
    Route::get('/metodos_pago', 'FrontController@metodos_pago')->name('front.metodos_pago');
    Route::get('/devoluciones', 'FrontController@devoluciones')->name('front.devoluciones');
    Route::get('/terminos_condiciones', 'FrontController@terminos_condiciones')->name('front.terminos_condiciones');
    Route::get('/garantias', 'FrontController@garantias')->name('front.garantias');
    Route::get('/politicas_envio', 'FrontController@politicas_envio')->name('front.politicas_envio');
    Route::get('/faqs', 'FrontController@faqs')->name('front.faqs');
    Route::post('/formularioContact', 'FrontController@formularioContact')->name('formularioContact');
    Route::get('/mailtest', 'FrontController@mailtest')->name('mailtest');

    Route::post('/proxy', 'ProxyController@proxy')->name('proxy');
 
    Route::get('/admin', 'FrontController@admin')->name('front.admin')->middleware('checkAdminAccess');

    Auth::routes();
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

    Route::group(['middleware' => ['auth', 'isUser']], function() {
        Route::get('home', 'HomeController@index')->name('user.home'); 
    });

    Route::group(['middleware' => ['auth', 'isAdmin']], function() {
        Route::get('homeA', 'SeccionController@index')->name('admin.index');

        Route::prefix('politicas')->name('politicas.')->group(function(){
            Route::get('/','PoliticasController@index')->name('index');
            Route::get('/edit/{id}','PoliticasController@edit')->name('edit');
            Route::put('/update/{id}','PoliticasController@update')->name('update');
        });

        Route::prefix('faqs')->name('faqs.')->group(function(){
            Route::get('/','FAQController@index')->name('index');
            Route::get('/create','FAQController@create')->name('create');
            Route::post('/store','FAQController@store')->name('store');
            Route::get('/show/{id}','FAQController@show')->name('show');
            Route::get('/edit/{id}','FAQController@edit')->name('edit');
            Route::put('/update/{id}','FAQController@update')->name('update');
            Route::delete('/destoy/{id}','FAQController@destroy')->name('destroy');
        });

        Route::prefix('slider')->name('slider.')->group(function(){
            Route::get('/', 'SliderPrincipalController@index')->name('slider.index');
            Route::post('/store', 'SliderPrincipalController@store')->name('slider.store');
            Route::delete('/destroy/{slider}', 'SliderPrincipalController@destroy')->name('slider.destroy');
        });

        Route::prefix('empresa')->name('empresa.')->group(function(){
            Route::get('/', 'EmpresaController@index')->name('empresa.index');
            Route::post('/store', 'EmpresaController@store')->name('empresa.store');
            Route::delete('/destroy/{empresa}', 'EmpresaController@destroy')->name('empresa.destroy');
        });

        Route::prefix('galeria')->name('galeria.')->group(function(){
            Route::get('/', 'GaleriaController@index')->name('galeria.index');
            Route::post('/store', 'GaleriaController@store')->name('galeria.store');
            Route::delete('/destroy/{galeria}', 'GaleriaController@destroy')->name('galeria.destroy');
        });

        Route::prefix('servicio')->name('servicio.')->group(function(){
            Route::get('/', 'ServicioController@index')->name('servicio.index');
            Route::get('/create', 'ServicioController@create')->name('servicio.create');
            Route::post('/store', 'ServicioController@store')->name('servicio.store');
            Route::get('/edit/{servicio}', 'ServicioController@edit')->name('servicio.edit');
            Route::put('/update/{servicio}', 'ServicioController@update')->name('servicio.update');
            Route::delete('/destroy/{servicio}', 'ServicioController@destroy')->name('servicio.destroy');
        });

        Route::prefix('capacitacion')->name('capacitacion.')->group(function(){
            Route::get('/', 'CapacitacionController@index')->name('capacitacion.index');
            Route::post('/store', 'CapacitacionController@store')->name('capacitacion.store');
            Route::put('/update/{capacitacion}', 'CapacitacionController@update')->name('capacitacion.update');
            Route::delete('/destroy/{capacitacion}', 'CapacitacionController@destroy')->name('capacitacion.destroy');
        });

        Route::prefix('secciones')->name('seccion.')->group(function(){
            Route::get('/','SeccionController@index')->name('index');
			Route::get('/{slug}','SeccionController@show')->name('show');
        });
    });

    Route::patch('/editarajax', 'AJAXController@editarajax');
    Route::post('/switch_inicio', 'AJAXController@switch_inicio')->name('ajax.switch_inicio');
    Route::post('/cambiar_imagen', 'AJAXController@cambiar_imagen')->name('ajax.cambiar_imagen');

    
  


