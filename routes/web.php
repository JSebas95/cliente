<?php
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
/*
Las rutas son lo primero que pasa en laravel, todas las peticiones llegan al archivo routes.php y de alli sucede algo

Estan dentro de la carpeta:

app/ 						Aplicacion(Toda la logica)
	Http/					Todo lo que tiene que ver con mis peticiones web
		routes.php
resources/					Dentro de resources estan las vistas
	view/					Las vistas estan afuera de app porque no hacen parte de la logica

La ruta mas basica de laravel simplemente acepta una URL y un Closure, lo cual provee un simple y expresivo metodo de definir rutas:

Route::get('/' function (){
	return view('welcome');
});

Por ejemplo si quiero una ruta diferente que me llame una vista que se llame Hola, en el navegador deberiamos abrir:

localhost::8080/Hola

Esto lo obtenemos duplicando la ruta anterior, encontrando la siguiente ruta para lanzar la siguiente vista que queramos: 

Route::get('/Hola' function (){
	return view('Hola');
});

Tambien podemos obtener una ruta Test que devuelva una cadena, como por ejemplo:

Route::get('/test' function (){
	return view'test';
});

Si hago una peticion a una url diferente como por ejemplo

localhost:8080/algo 

Nos va a aparecer una serie de errores, APP_DEBUG=false

Añadir parametros a las rutas

La siguiente funcion me retorna la salida que yo quiera, como por ejemplo:

Route::get('/hola/{nombre}', function($nombre){
	echo 'Hola que mas' . $nombre;
});

Los tipos de rutas son: 

Route::post()		Actualizar

Route::post('foo/bar', function()
{
    return '¡Hola mundo!';
});
			
Route::get()		Leer

Route::get('/', function()
{
    return '¡Hola mundo!';
});


Route::put()		Crear

Route::put('foo/bar', function () {
    //
});

Route::delete()		Borrar

Route::delete('foo/bar', function () {
    //
});


Route::match para que una ruta se defina a la vez para varios verbos añadiendo un array

Route::match(array('GET', 'POST'), '/', function()
{
    return '¡Hola mundo!';
});


Route::any para cualquier peticion de tipo HTTP
Route::any('foo', function()
{
    return '¡Hola mundo!';
});


*/
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

Route::get('/', function () {
    return view('auth/login');
});



Route::resource('inicio/distrivan','DistrivanController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/facebook', ['as' => 'auth/facebook', 'uses' => 'Auth\LoginController@redirectToProvider']);
Route::get('auth/facebook/callback', ['as' => 'auth/facebook/callback', 'uses' => 'Auth\LoginController@handleProviderCallback']);
