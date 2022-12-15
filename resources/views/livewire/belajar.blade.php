<div>
    <div class="mb-3">
        {{-- <input type="text" class="form-control" wire:model="nama"> --}}
        {{-- <input type="text" class="form-control" wire:model="nama"> --}}
        {{-- <textarea name="" id="" cols="30" rows="10" type="text" class="form-control" wire:model="nama"></textarea> --}}

        {{-- <input type="radio" name="name" value="bima" wire:model="nama"> Bima
        <input type="radio" name="name" value="malna" wire:model="nama"> Malna --}}

        {{-- <select name="" class="form-select" id="" wire:model="nama">
            <option value="">Pilih jenis kelamin</option>
            <option value="laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
        </select> --}}

        <input @if ($show_password == 'show') type="text"    
        @else 
            type="password" @endif
            class="form-control" wire:model="password">
        <label for="">show password</label>
        <input type="checkbox" wire:model="show_password" value="show">
    </div>
    Hallo nama saya {{ $nama }}
</div>
