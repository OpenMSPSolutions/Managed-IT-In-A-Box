<?php

namespace App\Http\Livewire\Admin\Organization;

use App\Models\Role;
use Livewire\Component;

class SelectOrgUserRoles extends Component
{
    public $ottPlatform = [];

    public $orgRoles;

    public function render()
    {
        return view('livewire.admin.organization.select-org-user-roles');
    }

    public function mount()
    {
        $this->orgRoles = Role::where('role_type', '=', '0')->get();
    }
}
