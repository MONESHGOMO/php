<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Home - User App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light d-flex flex-column min-vh-100">

  <div class="container my-auto">
    <div class="text-center">
      <h1 class="mb-4">Welcome to User Management</h1>
      <a href="/addUser" class="btn btn-primary btn-lg mb-4">Create User</a>
      
      @if(isset($usersData) && $usersData->count())
        <ul class="list-group w-75 mx-auto">
          @foreach($usersData as $user)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <div>
                <strong>Name:</strong> {{ $user->name }} |
                <strong>Email:</strong> {{ $user->email }}
              </div>
              <div class="d-flex gap-2">
                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>

                <form action="{{ route('user.delete', $user->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure to delete this user?')">Delete</button>
                </form>
              </div>
            </li>
          @endforeach
        </ul>
      @else
        <p>No users found.</p>
      @endif
    </div>
  </div>

  <footer class="text-center py-3 mt-auto bg-white shadow-sm">
    &copy; 2025 dev16
  </footer>

</body>
</html>
