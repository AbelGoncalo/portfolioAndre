<?php

namespace App\Livewire\Site;

use App\Http\Requests\ContactoRequest;
use App\Mail\FalaConnosco;
use App\Models\Messagem;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

use Livewire\Features\SupportFileUploads\WithFileUploads;

class ContactComponent extends Component
{

    use LivewireAlert, WithFileUploads;

    public $name, $email, $mensagem;
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'mensagem' => 'required'
    ];



    protected $messages = [
        'name.required' => 'Campo obrigatório',
        'email.required' => 'Campo obrigatório',
        'email.email' => 'email inválido',
        'mensagem.required' => 'O campo obrigátorio'
    ];

    public function render()
    {
        return view('livewire.site.contact-component')->layout('layouts.site.app');
    }

    public function sendMessage()
    {

        //$this->alert('success', 'Basic Alert');


        $this->validate($this->rules, $this->messages);

        try {

           

            Mail::to($this->email)->send(new FalaConnosco($this->mensagem, $this->name));

            Messagem::create([
                'name'=>$this->name,
                'email'=>$this->email,
                'mensagem'=>$this->mensagem
            ]);

            $this->alert('success', 'SUCESSO', [
                'toast' => false,
                'position' => 'center',
                'showConfirmButton' => true,
                'confirmButtonText' => 'OK',
                'text' => 'Operação Realizada Com Sucesso.'
            ]);

            $this->clear();

            return redirect()->route('site.index');
        } catch (\Throwable $th) {

            $this->alert('error', 'ERRO', [
                'toast'=>false,
                'position'=>'center',
                'showConfirmButton' => true,
                'confirmButtonText' => 'OK',
                'text'=>'Falha ao realizar operação'
            ]);

            //dd($th->getMessage());
            return redirect()->back();

            //throw $th;
        }
    }

    public function clear(){
        $this->name ='';
        $this->email = '';
        $this->mensagem = '';
    }
}
