<?php
use App\Http\Controllers\CitaController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\HistoriaclinicaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProcesoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TipodocumentoController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::resource('citas',CitaController::class);
Route::resource('detalles',DetalleController::class);
Route::resource('tipodocumentos',TipodocumentoController::class);
Route::resource('rols',RolController::class);
Route::resource('estados',EstadoController::class);
Route::resource('generos',GeneroController::class);
Route::resource('usuarios',UsuarioController::class);
Route::resource('pacientes',PacienteController::class);
Route::resource('doctors',DoctorController::class);
Route::resource('especialidads',EspecialidadController::class);
Route::resource('historiaclinicas',HistoriaclinicaController::class);
Route::resource('procesos',ProcesoController::class);
Route::resource('usuarios', UserController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
