<?php

namespace App\Http\Livewire\Admin\Clients;

use Livewire\Component;

class ShowClients extends Component
{
    protected $clients;

    public function render()
    {
        return view('livewire.admin.clients.show-clients', [
            'clients' => $this->clients
        ]);
    }

    public function mount($clients)
    {
        $this->clients = $clients;
    }
}
