<?php

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::prefix('v1')->group(function () {
    Route::post('login', [LoginController::class, 'login']);
    Route::post('register', [LoginController::class, 'register']);

    Route::middleware('auth:api')->group(function () {

    });
});

//Добавить Автора  method strore
//выдача списка авторов  method index
//выдача всех новостей конкретного автора method show
Route::apiResource('authors', AuthorController::class);


//выдача информации о статьях по их идентификаторам method show
//Добавить новости method strore
Route::apiResource('news', NewsController::class);


//Добавить Рубрику method strore
Route::apiResource('rubric', RubricController::class);


//поиск новости по названию
Route::post('search/news', [App\Http\Controllers\NewsController::class, 'searchNews']);
