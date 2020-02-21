# laravel-init-2020
Iniciando proyectos con laravel


$ laravel new name_project                                   >>> Create your project 
$ php artisan serve                                          >>> Run Your Project 
$ php artisan make:controller NameController                 >>> Create your Controller
-------------------------------------------------------------------------------------------------------------------
-----------------
web.php
Route::get('/nueva_ruta', 'FrontController@nuevaRuta');
-----------------
NameController.php
public function nuevaRuta(){
        return view('nueva_vista',['msg' => 'Hola Mundo Chamacos']);
    }
----------------
newVista.blade.php
<h1>Rodnal, Cabello: <?php echo $msg; ?></h1>
--------------------------------------------------------------------------------------------------------------------
