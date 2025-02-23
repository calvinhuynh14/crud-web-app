<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Inventory Management System</title>
</head>

<body>
    <header>
        <h1 class="bg-primary text-white p-4">Inventory Management System</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="/manage" class="nav-link {{ request()->is('manage') ? 'active' : '' }}">Manage</a>
                </li>
                <li class="nav-item">
                    <a href="/search" class="nav-link {{ request()->is('search') ? 'active' : '' }}">Search</a>
                </li>
                <li class="nav-item">
                    <a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container" style="padding-bottom: 80px;">
            @yield('content')
        </div>
    </main>
    <footer class="bg-primary text-white text-center fixed-bottom">
        <p>&copy; Student Management System 2025</p>
    </footer>
</body>
</html>