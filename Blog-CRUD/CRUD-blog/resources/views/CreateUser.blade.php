<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow rounded">
        <div class="card-header bg-primary text-white">
            <h4>Add New User</h4>
        </div>
        <div class="card-body">

            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Form -->
            <form method="POST" action="{{ route('user.add') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea name="address" class="form-control" rows="2"></textarea>
                </div>

                <button type="submit" class="btn btn-success w-100">Add User</button>
                <a href="/" class="btn btn-primary btn-lg">Home</a>

            </form>
        </div>
    </div>
</div>

</body>
</html>
