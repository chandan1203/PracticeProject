<?php

use App\Http\Controllers\TestController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [TestController::class, 'index']);
Route::get('/post-comment/{id}', [TestController::class, 'PostComment']);
Route::get('/video-comment/{id}', [TestController::class, 'VideoComment']);

Route::get('/facades', function(){

    class Fish{
        public function swim(){
            return 'swimming';
        }
        public function eat()
        {
            return 'eating';
        }
    }

    class FishFacades{
        public static function __callStatic($name, $arguments)
        {
            return app()->make('fish')->$name();
        }
    }

    // $fish = new Fish;
    // return $fish->swim();

    return FishFacades::swim();
});
