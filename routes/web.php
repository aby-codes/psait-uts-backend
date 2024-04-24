<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuliahController;

Route::get('/', function () {
    return view('index');
});

Route::get('/api/grades', [KuliahController::class, 'getAllGrades']);
Route::get('/api/grades/{nim}', [KuliahController::class, 'getGradesByNim']);
Route::get('/api/perkuliahan-grades/{id_perkuliahan}', [KuliahController::class, 'getGradesByIdPerkuliahan']);
Route::post('/api/add-grades', [KuliahController::class, 'addNilai']);
Route::put('/api/update/{nim}/{kode_mk}', [KuliahController::class, 'update']);
Route::delete('/api/delete/{nim}/{kode_mk}', [KuliahController::class, 'deleteNilai']);

