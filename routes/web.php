<?php
use App\Http\controllers\GroupsController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\cobacontroller;

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

/*Route::get('/coba', function () {
    return view('coba');
});

Route::get('/coba', function () {
    return view('coba');
});
Route::get('/coba/{no}', [cobacontroller::class, 'coba')];
Route::get('/test', [cobacontroller::class, 'index']);
Route::get('/test/{ke}', [cobacontroller::class, 'urutan']);

*/

// Route::get('', [cobacontroller::class, 'index']);
// Route::get('/friends', [cobacontroller::class, 'index']);
// Route::get('/friends/create', [cobacontroller::class, 'create']);
// Route::post('/friends', [cobacontroller::class, 'store']);
// Route::get('/friends/{id}', [cobacontroller::class, 'show']);
// Route::get('/friends/{id}edit', [cobacontroller::class, 'edit']);
// Route::put('/friends/{id}', [cobacontroller::class, 'update']);
// Route::delete('/friends/{id}', [cobacontroller::class, 'destroy']);

Route::resources([
    'friends' => cobacontroller::class,
    'groups' => GroupsController::class,
]);