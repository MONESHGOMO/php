<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Edit User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

<div class="container">
  <h2 class="mb-4">Edit User</h2>

  <form action="{{ route('user.update', $userData->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" name="name" value="{{ $userData->name }}" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" value="{{ $userData->email }}" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ url('/') }}" class="btn btn-secondary">Cancel</a>
  </form>
</div>

</body>
</html>
