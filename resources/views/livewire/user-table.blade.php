<div>
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
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.details', $user->id) }}" class="badge bg-primary">Detail</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="badge bg-warning">Edit</a>
                        <button wire:click="delete({{ $user->id }})" href=""
                            class="badge bg-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
