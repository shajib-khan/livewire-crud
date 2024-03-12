<?php
use App\Livewire\Counter;
use App\Livewire\ShowPosts;
use App\Livewire\Blog;
use App\Livewire\Crud;
use App\Livewire\Update;
use Illuminate\Support\Facades\Route;
use Livewire\Features\SupportConsoleCommands\Commands\DeleteCommand;

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




Route::get('/', ShowPosts::class)->name('ShowPosts');
Route::get('/counter', Counter::class)->name('Counter');
Route::get('/blog', Blog::class)->name('Blog');
Route::get('/crud', Crud::class)->name('Crud');
Route::get('/update/{id}', Update::class)->name('update-crud-name');

//Route::get('/', welcome::class);
