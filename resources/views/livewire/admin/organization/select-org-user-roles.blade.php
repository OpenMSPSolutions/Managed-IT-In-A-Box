<div class="w-full">
    <div wire:ignore>
        <select class="w-full form-control" id="select2-dropdown" name="user_roles" wire:model="ottPlatform" multiple>
            @foreach($orgRoles as $item)
                <option value="{{ $item->name }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function () {
        $('#select2-dropdown').select2();
        $('#select2-dropdown').on('change', function (e) {
            @this.set('ottPlatform', $(this).val());
            console.log('it change');
        });
    });
</script>
@endpush
