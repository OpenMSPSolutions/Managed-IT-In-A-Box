<?php

namespace App\Http\Livewire\Admin\Organization;

use App\Models\User;
use Livewire\Component;

class ShowOrgUsers extends Component
{
    protected $orgUsers;

    public function render()
    {
        return view('livewire.admin.organization.show-org-users', [
            'orgUsers' => $this->orgUsers
        ]);
    }

    public function mount($orgUsers)
    {
        $this->orgUsers = $orgUsers;
    }
}
