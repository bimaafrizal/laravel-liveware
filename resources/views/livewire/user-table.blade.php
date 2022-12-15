<div>
    <table class="table">
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
                        <a href="" class="badge bg-warning">Edit</a>
                        <a href="" class="badge bg-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
