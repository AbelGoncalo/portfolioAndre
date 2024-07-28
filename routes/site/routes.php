<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Livewire\home\{ HomeComponent,ContactComponent,AboutComponent};


Route::get('/',HomeComponent::class)->name('site.index');
Route::get('/contact',ContactComponent::class)->name('site.contact');
Route::get('/sobre',AboutComponent::class)->name('site.about');

/*
Route::get('/', [HomeController::class, 'index'])->name('site.index');
Route::get('/about', [HomeController::class, 'questions'])->name('site.questions');
route::post('/enviar.mensagem',[HomeController::class,'sendMessage'])->name('sendMessage');*/



