    <!DOCTYPE html>
    <html lang="en">

    <head>
        <style>
            .product-image {
                width: 60px;
                height: 60px;
                object-fit: cover;
                /* maintain aspect ratio and crop if needed */
                border-radius: 5px;
                /* optional: rounded edges */
                border: 1px solid #ccc;
                /* optional: border */
            }

            td {
                vertical-align: middle;
            }
        </style>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard - Merath</title>

        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap"
            rel="stylesheet">

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="styles.css">
    </head>

    <body class="admin-body">
        <!-- Admin Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="admin-dashboard.html">
                    <span class="brand-text">Merath Admin</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="adminNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="admin-dashboard.html">Dashboard</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">View Site</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" class="nav-link">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-error alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('info'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                {{ session('info') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <nav class="col-md-3 col-lg-2 d-md-block sidebar">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#dashboard" data-bs-toggle="tab">
                                    <i class="bi bi-house-door me-2"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#products" data-bs-toggle="tab">
                                    <i class="bi bi-box me-2"></i>
                                    Products
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#orders" data-bs-toggle="tab">
                                    <i class="bi bi-cart me-2"></i>
                                    Orders
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#customers" data-bs-toggle="tab">
                                    <i class="bi bi-people me-2"></i>
                                    Customers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#categories" data-bs-toggle="tab">
                                    <i class="bi bi-tags me-2"></i>
                                    Categories
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Main Content -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="tab-content">
                        <!-- Dashboard Tab -->
                        <div class="tab-pane fade show active" id="dashboard">
                            <div
                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                <h1 class="h2">Dashboard</h1>
                            </div>

                            <!-- Stats Cards -->
                            <div class="row mb-4">
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Total Products</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                        {{ $totalProducts }}
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="bi bi-box fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        Total Orders</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">156</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="bi bi-cart fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                        Customers</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">89</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="bi bi-people fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div
                                                        class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                        Revenue</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$12,450</div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="bi bi-currency-dollar fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Recent Orders -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Recent Orders</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Customer</th>
                                                    <th>Total</th>
                                                    <th>Status</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#ORD-001</td>
                                                    <td>John Doe</td>
                                                    <td>$89.99</td>
                                                    <td><span class="badge bg-success">Completed</span></td>
                                                    <td>2024-01-15</td>
                                                </tr>
                                                <tr>
                                                    <td>#ORD-002</td>
                                                    <td>Jane Smith</td>
                                                    <td>$156.50</td>
                                                    <td><span class="badge bg-warning">Processing</span></td>
                                                    <td>2024-01-14</td>
                                                </tr>
                                                <tr>
                                                    <td>#ORD-003</td>
                                                    <td>Mike Johnson</td>
                                                    <td>$75.00</td>
                                                    <td><span class="badge bg-info">Shipped</span></td>
                                                    <td>2024-01-13</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Products Tab -->
                        <div class="tab-pane fade" id="products">
                            <div
                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                <h1 class="h2">Products</h1>
                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addProductModal">
                                    <i class="bi bi-plus me-2"></i>Add Product
                                </button>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Featured</th>
                                            <th>Best Seller</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="productsTable">
                                        @if ($products->count() > 0)
                                            @foreach ($products as $product)
                                                <tr>
                                                    <td>
                                                        @if ($product->image)
                                                            <img src="{{ asset('storage/' . $product->image) }}"
                                                                alt="Image" width="70" height="70"
                                                                class="rounded border">
                                                        @else
                                                            <span>No Image</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $product->name }}</td>
                                                    <td>{{ $product->category->name }}</td>
                                                    <td>JD{{ $product->price }}</td>
                                                    <td>{{ $product->stock }}</td>
                                                    <td>
                                                        @if ($product->is_featured)
                                                            ✅
                                                        @else
                                                            ❌
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($product->is_best_seller)
                                                            ✅
                                                        @else
                                                            ❌
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <button
                                                            class="btn btn-sm btn-outline-secondary edit-product-btn"
                                                            data-id="{{ $product->id }}"
                                                            data-name="{{ $product->name }}"
                                                            data-category="{{ $product->category->name }}"
                                                            data-price="{{ $product->price }}"
                                                            data-stock="{{ $product->stock }}" data-bs-toggle="modal"
                                                            data-bs-target="#editProductModal">Edit</button>

                                                        <form method="POST"
                                                            action="{{ route('products.destroy', $product) }}"
                                                            style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm btn-danger">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>


                                </table>
                            </div>
                        </div>

                        <!-- Orders Tab -->
                        <div class="tab-pane fade" id="orders">
                            <div
                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                <h1 class="h2">Orders</h1>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer</th>
                                            <th>Items</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#ORD-001</td>
                                            <td>John Doe</td>
                                            <td>2</td>
                                            <td>$89.99</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>2024-01-15</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                                <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>#ORD-002</td>
                                            <td>Jane Smith</td>
                                            <td>3</td>
                                            <td>$156.50</td>
                                            <td><span class="badge bg-warning">Processing</span></td>
                                            <td>2024-01-14</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                                <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Customers Tab -->
                        <div class="tab-pane fade" id="customers">
                            <div
                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                <h1 class="h2">Customers</h1>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Orders</th>
                                            <th>Total Spent</th>
                                            <th>Joined</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>john@example.com</td>
                                            <td>5</td>
                                            <td>$450.00</td>
                                            <td>2023-12-01</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                                <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jane Smith</td>
                                            <td>jane@example.com</td>
                                            <td>3</td>
                                            <td>$298.50</td>
                                            <td>2023-11-15</td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-primary">View</button>
                                                <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Categories Tab -->
                        <div class="tab-pane fade" id="categories">

                            <div
                                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                <h1 class="h2">Categories</h1>
                                <button class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addCategoryModal">
                                    <i class="bi bi-plus me-2"></i>Add Category
                                </button>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>ID #</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->description ?? 'No description' }}</td>
                                                <td>
                                                    @if ($category->image)
                                                        <img src="{{ asset('storage/' . $category->image) }}"
                                                            alt="Image" width="70" height="70"
                                                            class="rounded border">
                                                    @else
                                                        <span>No Image</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-secondary edit-category-btn"
                                                        data-id="{{ $category->id }}"
                                                        data-name="{{ $category->name }}"
                                                        data-description="{{ $category->description }}"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editCategoryModal">Edit</button>

                                                    <form action="{{ route('categories.destroy', $category->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-sm btn-outline-danger"
                                                            onclick="return confirm('Are you sure?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>




                    </div>
                </main>
            </div>
        </div>

        <!-- Add Product Modal -->

        <div class="modal fade" id="addProductModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Product</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">

                        <form id="addProductForm" method="POST" action="{{ route('admin.products.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="productName" class="form-label">Product Name</label>
                                    <input type="text" name="name" class="form-control" id="productName"
                                        required class="form-control mb-2">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="productCategory" class="form-label">Category</label>
                                    <select name="category_id" class="form-control mb-2" required class="form-select"
                                        id="productCategory" required>
                                        <option value="">Choose Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ isset($product) && $category->id == $product->category_id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="productPrice" class="form-label">Price</label>
                                    <input type="number" step="0.01" name="price" class="form-control mb-2"
                                        id="productPrice" step="0.01" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="productStock" class="form-label">Stock</label>
                                    <input type="number" name="stock" class="form-control" id="productStock"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="productImage" class="form-label">Product Image</label>
                                    <input type="file" name="image" class="form-control mb-2" id="productImage"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <input type="checkbox" name="is_featured" id="is_featured">
                                    <label for="is_featured">Featured Product</label>

                                    <input type="checkbox" name="is_best_seller" id="is_best_seller">
                                    <label for="is_best_seller">Best Seller</label>

                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" form="addProductForm" class="btn btn-primary">Add Product</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Edit Product Modal-->
        <div class="modal fade" id="editProductModal" tabindex="-1">
            <div class="modal-dialog">
                <form method="POST" id="editProductForm" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="_method" value="PUT">

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="editproductName" class="form-label">Product Name</label>
                                    <input type="text" name="name" class="form-control" id="editproductName"
                                        required class="form-control mb-2">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="editproductCategory" class="form-label">Category</label>
                                    <select name="category_id" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ isset($product) && $category->id == $product->category_id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="editproductPrice" class="form-label">Price</label>
                                    <input type="number" step="0.01" name="price" class="form-control mb-2"
                                        id="editproductPrice" step="0.01" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="editproductStock" class="form-label">Stock</label>
                                    <input type="number" name="stock" class="form-control" id="editproductStock"
                                        required>
                                </div>

                                <div class="mb-3">
                                    <label for="editproductImage" class="form-label">Product Image
                                        <span>(Upload only if you want to update or keep it empty)</span>
                                    </label>
                                    <input type="file" name="image" class="form-control mb-2"
                                        id="editproductImage">
                                </div>
                                <div>

                                </div>

                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Edit Product Modal Test-->

        <!-- Add Category Modal -->
        <div class="modal fade" id="addCategoryModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">


                        <form action="{{ route('admin.categories.store') }}" method="POST" class="mb-6"
                            enctype="multipart/form-data" id="addCategoryForm">
                            @csrf
                            <div class="mb-3">
                                <label for="categoryName" class="block text-sm">Category Name <span
                                        class="text-red-500">*</span></label>
                                <input type="text" name="name" id="categoryName" required
                                    class="w-full border border-gray-300 p-2 rounded">
                            </div>

                            <div class="mb-3">
                                <label for="categoryDescription" class="block text-sm">Description</label>
                                <textarea name="description" class="w-full border border-gray-300 p-2 rounded" id="categoryDescription"
                                    rows="3"></textarea>
                            </div>
                            <div>
                                <label>Image:</label>
                                <input type="file" name="image" accept="image/*">
                            </div>

                            <div class="modal-footer">
                                <button type="button">Cancel</button>
                                <button type="submit" form="addCategoryForm" class="btn btn-primary"
                                    data-bs-dismiss="modal"
                                    class="bg-[#C4A35A] hover:bg-[#b3934f] text-white px-4 py-2 rounded">
                                    Add Category
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Edit Category Modal -->
        <div class="modal fade" id="editCategoryModal" tabindex="-1">
            <div class="modal-dialog">
                <form method="POST" id="editCategoryForm">
                    @csrf
                    @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="_method" value="PUT">

                            <div class="mb-3">
                                <label for="editCategoryName" class="form-label">Category Name</label>
                                <input type="text" name="name" id="editCategoryName" class="form-control"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="editCategoryDescription" class="form-label">Description</label>
                                <textarea name="description" id="editCategoryDescription" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <!-- Bootstrap 5 JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Custom JS -->
        <script src="script.js"></script>
        <script src="admin.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const editButtons = document.querySelectorAll('.edit-category-btn');
                const editForm = document.getElementById('editCategoryForm');
                const nameInput = document.getElementById('editCategoryName');
                const descInput = document.getElementById('editCategoryDescription');

                editButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const id = button.getAttribute('data-id');
                        const name = button.getAttribute('data-name');
                        const description = button.getAttribute('data-description');

                        nameInput.value = name;
                        descInput.value = description;

                        editForm.action = `/admin/categories/${id}`;
                    });
                });
            });
        </script>
        <!--Test for Edit Products-->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const editProductButtons = document.querySelectorAll('.edit-product-btn');
                const editProductForm = document.getElementById('editProductForm');

                const nameProductInput = document.getElementById('editproductName');
                const productCategoryInput = document.getElementById('editproductCategory');
                const productPriceInput = document.getElementById('editproductPrice');
                const productStockInput = document.getElementById('editproductStock');


                editProductButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const id = button.getAttribute('data-id');
                        const name = button.getAttribute('data-name');
                        const category = button.getAttribute('data-category');
                        const price = button.getAttribute('data-price');
                        const stock = button.getAttribute('data-stock');

                        nameProductInput.value = name;
                        productCategoryInput.value = category;
                        productPriceInput.value = price;
                        productStockInput.value = stock;

                        editProductForm.action = `/admin/products/${id}`;
                    });
                });
            });
        </script>
        <!--Test for Edit Products-->

    </body>

    </html>
