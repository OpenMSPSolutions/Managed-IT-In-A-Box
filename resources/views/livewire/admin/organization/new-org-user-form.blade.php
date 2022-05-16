<form class="py-4 px-4" wire:submit.prevent="submit" method="post">
    @csrf
    <h2 class="py-2">General Info</h2>
    <div class="flex flex-row w-full">
        <div class="w-1/2 p-2">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" wire:model="name" class="block mt-1 w-full" type="text" :value="old('name')" required autofocus autocomplete="name" />
            @error('name') <span ...>{{ $message }}</span> @enderror
        </div>
        <div class="w-1/2 p-2">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" wire:model="email" class="block mt-1 w-full" type="email" :value="old('email')" required />
            @error('email') <span ...>{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="flex flex-row w-full">
        <div class="w-1/2 p-2">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" wire:model="password" class="block mt-1 w-full" type="password" required autocomplete="new-password" />
            @error('password') <span ...>{{ $message }}</span> @enderror
        </div>
        <div class="w-1/2 p-2">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="password_confirmation" wire:model="password_confirmation" class="block mt-1 w-full" type="password" required autocomplete="new-password" />
            @error('password_confirmation') <span ...>{{ $message }}</span> @enderror
        </div>
    </div>

    <hr>

    <h2 class="py-2">User Roles</h2>
    <div class="p-2">
        <div class="w-full">
            <div wire:ignore>
                <select class="w-full form-control" id="user_roles" wire:model="user_roles" multiple>
                    @foreach($orgRoles as $item)
                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('user_roles') <span ...>{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="p-2 justify-content jusitfy-end">
        <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
            Save
        </button>
    </div>
</form>

@push('scripts')
<script>
    $(document).ready(function () {
        $('#user_roles').select2();
        $('#user_roles').on('select2:select', function (e) {
            console.log(e)
        });

        // $('#user_roles').select2();
        // $('#user_roles').on('change', function (e) {
        //     let data = $(this).val();
        //     @this.set('user_roles', data);
        //     console.log(data)
        // });
        // window.livewire.on('productStore', () => {
        //     $('#user_roles').select2();
        // });
    });
</script>
@endpush
