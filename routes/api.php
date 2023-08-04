<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('cidades')->controller(CidadeController::class)->group(function () {
    Route::get('/', 'index')->name('listCidades');
    Route::get('/{id_cidade}/medicos', 'listMedicos')->name('listMedicos')->middleware('jwt.auth');
});

Route::prefix('medicos')->controller(MedicoController::class)->middleware('jwt.auth')->group(function () {
    Route::get('/', 'index')->name('listMedicos')->withoutMiddleware('jwt.auth');
    Route::post('/', 'store')->name('storeMedicos');
    Route::post('/{id_medico}/pacientes', 'attachPacientes')->name('attachPacientes');
    Route::get('/{id_medico}/pacientes', 'findPacientes')->name('findPacientes');
});

Route::prefix('pacientes')->controller(PacienteController::class)->middleware('jwt.auth')->group(function () {
    Route::get('/', 'index')->name('listPacientes');
    Route::post('/{id_paciente}', 'update')->name('updatePacientes');
    Route::post('/', 'store')->name('storePacientes');
});

Route::controller(AuthController::class)->middleware('jwt.auth')->group(function () {
    Route::post('login', 'login')->withoutMiddleware('jwt.auth');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    Route::post('me', 'me');
});
