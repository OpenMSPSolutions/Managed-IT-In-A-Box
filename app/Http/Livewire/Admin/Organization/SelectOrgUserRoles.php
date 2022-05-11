<?php

namespace App\Http\Livewire\Admin\Organization;

use Livewire\Component;

class SelectOrgUserRoles extends Component
{
    public $ottPlatform = "";
    public $webseries = [
        'Wanda Vision',
        'Money Heist'.
        'Lucifer',
        'Stanger Things'
    ];

    public function render()
    {
        return view('livewire.admin.organization.select-org-user-roles');
    }
}
