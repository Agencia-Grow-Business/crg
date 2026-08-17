<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/sobre', 'pages.sobre')->name('sobre');
Route::view('/portfolio', 'pages.portfolio')->name('portfolio');
Route::view('/contato', 'pages.contato')->name('contato');

Route::post('/contato', function (Request $request) {
    $request->validate([
        'nome' => ['required', 'string', 'max:120'],
        'email' => ['required', 'email', 'max:120'],
        'telefone' => ['nullable', 'string', 'max:30'],
        'tipo_evento' => ['required', 'string', 'max:60'],
        'data_evento' => ['nullable', 'string', 'max:30'],
        'mensagem' => ['required', 'string', 'max:3000'],
    ], [], [
        'nome' => 'nome',
        'email' => 'e-mail',
        'tipo_evento' => 'tipo de evento',
        'mensagem' => 'mensagem',
    ]);

    // TODO: integrar com e-mail/CRM da equipe (Mail::to(...)->send(...))

    return back()->with('sucesso', 'Recebemos sua mensagem. Nossa equipe entrará em contato em breve.');
})->name('contato.enviar');
