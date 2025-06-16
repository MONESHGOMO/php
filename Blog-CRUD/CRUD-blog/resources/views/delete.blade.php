<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Delete User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">
  <h2 class="text-danger mb-4">Confirm Deletion</h2>

  <div class="alert alert-warning">
    Are you sure you want to delete <strong>{{ $userData->name }}</strong> ({{ $userData->email }})?
  </div>

  <form action="{{ route('user.destroy', $userData->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Yes, Delete</button>
    <a href="{{ url('/') }}" class="btn btn-secondary">Cancel</a>
  </form>
</div>

</body>
</html>
