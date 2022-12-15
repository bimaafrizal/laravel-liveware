<div>
    <div>
        <div class="card">
            <div class="card-header">Form</div>
            <div class="card-body">
                <form wire:submit.prevent="edit">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid
                    @enderror"
                            wire:model="name">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text"
                            class="form-control @error('email') is-invalid
                        @enderror"
                            wire:model="email">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
                {{-- <button wire:click='store' class="btn btn-primary">Submit</button> --}}
            </div>
        </div>
    </div>

</div>
