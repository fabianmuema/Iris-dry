<?php

namespace App\Http\Livewire;

use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UpdateName extends Component
{

    public $p, $n;

    public function mount() {
        $this->n = DB::table('payments')->where('id', '=', 1)->value('clientName');
        $this->p = 1000;
    }

    public function render()
    {
        return view('livewire.update-name');
    }
}
