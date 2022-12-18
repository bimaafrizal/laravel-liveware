<div>
    <div class="mb-3">
        <input type="text" class="form-control" wire:model='search' placeholder="Cari user">
    </div>
    <table class="table">
        @include('component.alert')
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $item)
                <tr>
                    <td>{{ $users->firstItem() + $index }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a href="{{ route('users.details', $item->id) }}" class="badge bg-primary">Detail</a>
                        <a href="{{ route('users.edit', $item->id) }}" class="badge bg-warning">Edit</a>
                        <button wire:click="delete({{ $item->id }})" href=""
                            class="badge bg-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
