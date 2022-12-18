<div>
    <input type="text" name="" id="" wire:model='hobi' placeholder="hobi">
    <input type="text" name="" id="" wire:model='warna_kesukaan' placeholder="warna kesukaan">
    <div>
        <div>Hobi : {{ $hobi }}</div>
        <div>Warna kesukaan {{ $warna_kesukaan }} </div>
    </div>

    <ul>
        @foreach ($proses as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
    {{-- Because she competes with no one, no one can compete with her. --}}
</div>
