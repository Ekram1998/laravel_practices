<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example\FirstController;
use App\Http\Controllers\Example\LearnController;

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
    return view('welcome');
});

Route::get('/home',function (){
    return view('home');
});

//check rand_log information show__//
Route::get('/test2',function (){
    $logfile = file(storage_path().'/logs/contact.log');
    $collection = [];
    foreach ($logfile as $line_number=> $line){
        $collection[]=array('line'=>$line_number, 'content'=>htmlspecialchars($line));
    }
    dd($collection);
});

//Route::get('/country',function (){
//    return view('country');
//})->middleware('country');

// controller use
Route::get('/contact',[FirstController::class, 'index'])->name('contact.us');
Route::get('/reg',[FirstController::class, 'create']);

//__from submit__//
Route::post('student',[FirstController::class,'studentstore'])->name('student.store');

//__invoke controller__//
Route::get('/test',LearnController::class);

//__middleware controller__//
Route::get('/country',[FirstController::class,'country'])->middleware('country');

//__register validation__//
Route::get('/formshow',[FirstController::class,'page'])->name('form.show')->middleware('auth');
Route::post('/show',[FirstController::class,'show'])->name('show.us');






// ignore it
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
