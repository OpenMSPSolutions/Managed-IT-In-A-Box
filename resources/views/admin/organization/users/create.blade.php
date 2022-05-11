<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form class="py-4 px-4" action="{{ route('organization.users.store') }}" method="post">
                    @csrf
                    <h2 class="py-2">General Info</h2>
                    <div class="flex flex-row w-full">
                        <div class="w-1/2 p-2">
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <x-jet-input id="name" class="block mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div class="w-1/2 p-2">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1" type="email" name="email" :value="old('email')" required />
                        </div>
                    </div>
                    <div class="flex flex-row w-full">
                        <div class="w-1/2 p-2">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        </div>
                        <div class="w-1/2 p-2">
                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
                    </div>

                    <hr>

                    <h2 class="py-2">User Roles</h2>
                    @livewire('admin.organization.select-org-user-roles')
                    <div class="justify-content jusitfy-end">
                        <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
