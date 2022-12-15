@extends('layouts.main')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush
@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Livewire</h1>
        <a href="/livewire-crud"></a>
        <div>
            <div class="row mb-4">
                <div class="col-md-6">
                    @livewire('user-edit', ['user' => $user])
                </div>
            </div>
        </div>
    </div>
@endsection
