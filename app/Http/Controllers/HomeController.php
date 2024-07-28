<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactoRequest;
use App\Mail\FalaConnosco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\TryCatch;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        try {
            return view('livewire.site.index');
        } catch (\Throwable $th) {

            dd($th->getMessage());
        }
    }

    public function questions()
    {

        return view('livewire.site.questions');
    }

    public function contact()
    {

        return view('livewire.site.contact');
    }

    public function sendMessage(ContactoRequest $request)
    {

        try {
           // Mail::to($request->email)->send(new FalaConnosco($request->message));

            return redirect()->route( 'site.index')->with('sucesso', 'Mensagem enviada com sucesso!');
        } catch (\Throwable $th) {
            
            dd($th->getMessage());
            return redirect()->back()->with('sucesso', 'Erro ao realizar a operação!');
            
            //throw $th;
        }
    }
}
