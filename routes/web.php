<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\AllItems;
use App\Http\Livewire\Create;
use App\Http\Livewire\Show;
use App\Http\Livewire\Destroy;
use App\Http\Livewire\Update;

use App\Http\Livewire\FullPages\CategoryList;
use App\Http\Livewire\FullPages\Forms\CategoryCreate;
use App\Http\Livewire\FullPages\Forms\CategoryDestroy;
use App\Http\Livewire\FullPages\Forms\CategoryUpdate;

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

Route::get('/przedmioty/dodaj-przedmiot',Create::class);
Route::get('/przedmioty', AllItems::class);
Route::get('/przedmioty/{id}/usun', Destroy::class);
Route::get('/przedmioty/{id}/edytuj', Update::class);
Route::get('/przedmioty/{id}', Show::class);

Route::get('/kategorie', CategoryList::class);
Route::get('/kategorie/dodaj-kategorie', CategoryCreate::class);
Route::get('/kategorie/{id}/usun', CategoryDestroy::class);
Route::get('/kategorie/{id}/edytuj', CategoryUpdate::class);

/*
Route::get('/przedmioty', function () {
    return view('livewire.all-items');
});
*/
