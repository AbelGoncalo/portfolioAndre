<?php

namespace App\Livewire\Site;

use Livewire\Component;

class QuestionsComponents extends Component
{
    public function render()
    {
        return view('livewire.site.questions-components')->layout('layouts.site.app');
    }
}
