<?php

use Illuminate\Support\Facades\Route;
use Psy\VersionUpdater\Downloader;
use App\Http\Controllers\FormController;

// use App\Models\Form;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/download', function() {
    $file = public_path(). "/CV.pdf";

    $headers = array(
        'Content-Type: application/pdf',
    );
    
    return Response::download($file, "CV.pdf", $headers);
});

Route::post('insert-data', [App\Http\Controllers\FormController::class, 'insert']);