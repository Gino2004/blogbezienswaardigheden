<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\MenuController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MenuController::class, 'getMenu'])->name('getMenu'); 


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/post/{post}', [PostController::class, 'getpost'])->name('getpost');

Route::get('/posts/create', [PostController::class, 'getCreate'])->name('post.create');
Route::post('/posts/create', [PostController::class, 'postCreate'])->name('post.create.post');
Route::get('/post/edit/{post}', [PostController::class, 'getEdit'])->name('post.edit');
Route::put('/post/edit/{post}', [PostController::class, 'putEdit'])->name('post.edit.put');
Route::get('/posts/list', [PostController::class, 'getList'])->name('post.list');
Route::post('/post/{reaction}', [ReactionController::class, 'comments'])->name('comments');
Route::get('/post/delete/{post}', [PostController::class, 'getDelete'])->name('post.delete');
Route::delete('/post/delete/{post}', [PostController::class, 'deleteDelete'])->name('post.delete.delete');
