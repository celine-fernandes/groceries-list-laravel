<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .card-icon {
            font-size: 2rem;
            color: #007bff;
        }
        .dashboard-card {
            margin-bottom: 1.5rem;
        }
        .dashboard-header {
            margin-bottom: 2rem;
        }
        .stats-card {
            background: #f8f9fa;
            border-radius: .375rem;
            padding: 1.5rem;
        }
        .stats-card .card-title {
            font-size: 1.25rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="dashboard-header">
            <h1 class="my-4">Food E-Commerce Dashboard</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card dashboard-card text-center">
                        <div class="card-body">
                            <i class="card-icon fas fa-cake"></i>
                            <h3 class="card-title">Categories</h3>
                            <a href="{{ route('categories.index') }}" class="btn btn-primary">Manage Categories</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card dashboard-card text-center">
                        <div class="card-body">
                            <i class="card-icon fas fa-apple-alt"></i>
                            <h3 class="card-title">Products</h3>
                            <a href="{{ route('products.index') }}" class="btn btn-primary">Manage Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card dashboard-card text-center">
                        <div class="card-body">
                            <i class="card-icon fas fa-dollar-sign"></i>
                            <h3 class="card-title">Revenue</h3>
                            <p class="card-text">${{ number_format($revenue, 2) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="stats-card mb-4">
            <h3 class="card-title">Recent Products</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recentProducts as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>${{ number_format($product->price, 2) }}</td>
                            <td>{{ $product->created_at->format('d M Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
