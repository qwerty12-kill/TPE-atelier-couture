<!DOCTYPE html>
<html>

<head>
    <title>Atelier Couture</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container">

            <a class="navbar-brand" href="/dashboard">Atelier Couture</a>

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="/clients">Clients</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/agents">Agents</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/coutures">Coutures</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/depenses">Dépenses</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Dashboard</a>
                </li>

            </ul>

        </div>
    </nav>

    <div class="container mt-4">

        @yield('content')

    </div>

</body>

</html>