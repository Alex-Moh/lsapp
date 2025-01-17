 <?php
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
// use Illuminate\Support\Facades\Route;

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

// Route::get('/hello', function () {
//     return '<h1>Hello World</h1>';
// });

// Route::get('/users/{id}/{name}', function($id, $name) {
//     return 'This is user '.$name.' with an id of '.$id;
// });
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);
Route::get('/create', [PostsController::class, 'create']);

Route::resource('posts', 'App\Http\Controllers\PostsController');

Auth::routes();
Route::get('/home', [HomeController::class, 'index']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


