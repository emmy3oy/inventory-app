<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Inventory Management')
    </title>

    @vite('resources/css/app.css')
</head>

<body>

    <nav class="navbar">

        <div class="container navbar-content">

            <a href="{{ route('products.index') }}" class="logo">
                Inventory Management
            </a>

            <div class="nav-links">

                <a href="{{ route('products.index') }}">
                    Products
                </a>

                <a href="{{ route('products.create') }}">
                    Add Product
                </a>

            </div>

        </div>

    </nav>


    <main class="container">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-error">

                <strong>
                    Please fix the following errors:
                </strong>

                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif


        @yield('content')

    </main>

</body>
</html>