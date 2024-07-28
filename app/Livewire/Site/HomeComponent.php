<?php

namespace App\Livewire\Site;

use App\Models\CountClick;
use Livewire\Component;

class HomeComponent extends Component
{
    public $count;

    public function render()
    {
        return view('livewire.site.home-component')->layout('layouts.site.app');
    }

    public function countClick()
    {

        try {

            
           
            $countclick = CountClick::first();

            $this->count = 0;

            $this->count = $countclick->qtdclic;

            $countclick->update([
                'idff' => $this->count + 1
            ]);
            $countclick->save();
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
            dd($th->getMessage());
        }
    }
}
