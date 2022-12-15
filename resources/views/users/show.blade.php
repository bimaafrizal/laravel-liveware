@extends('layouts.main')


@section('content')
    <div class="container">
        <h1 class="mb-4">Belajar CRUD Livewire</h1>
        <div>
            <div class="row mb-4">
                <div class="col-md-6">
                    <p>{{ $user->name }}</p>
                    <p>{{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
