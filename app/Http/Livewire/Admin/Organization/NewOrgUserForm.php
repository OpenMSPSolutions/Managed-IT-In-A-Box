<?php

namespace App\Http\Livewire\Admin\Organization;

use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Laravel\Jetstream\Events\TeamMemberAdded;
use Laravel\Jetstream\Events\AddingTeamMember;
use App\Http\Controllers\Admin\Organization\OrgUsersControler;

class NewOrgUserForm extends Component
{
    public $user_roles = [];

    public $name;

    public $email;

    public $password;

    public $password_confirmation;

    public $orgRoles;

    protected $rules = [
        'name'  =>  'required|string|max:255',
        'email' =>  'required|email|unique:users',
        'password'  =>  'required|string|max:255',
        'password_confirmation'  =>  'required|string|max:255',
        'user_roles'  =>  'required'
    ];

    public function updated($propertyName)
    {

        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.admin.organization.new-org-user-form');
    }

    public function mount()
    {
        $this->orgRoles = Role::where('role_type', '=', '0')->get();
    }

    public function submit()
    {
        $user = Auth::user();
        $team = Team::find(1);

        Gate::forUser($user)->authorize('addTeamMember', $team);

        $validatedData = $this->validate();

        $newUser = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'user_type' => 0
        ]);

        AddingTeamMember::dispatch($team, $newUser);

        $team->users()->attach(
            $newUser
        );

        TeamMemberAdded::dispatch($team, $newUser);

        // get session team_id for restore it later
        $session_team_id = getPermissionsTeamId();

        // set actual new team_id to package instance
        setPermissionsTeamId(1);

        foreach($validatedData['user_roles'] as $role) {
            $newUser->assignRole($role);
        }

        // restore session team_id to package instance
        setPermissionsTeamId($session_team_id);

        return redirect('/organization/users');
    }
}
