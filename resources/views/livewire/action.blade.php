<div>
    <div class="mb-3">
        <input type="text" class="form-control" wire:model="angka">
        <div class="mt-2">

            <button class="btn btn-success" wire:click="plus"> + PLUS </button>
            @if ($angka > 0)
                <button class="btn btn-danger" wire:click="minus"> - MINUS </button>
            @endif
        </div>
    </div>
</div>
