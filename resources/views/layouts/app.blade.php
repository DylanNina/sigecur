<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>SIGECUR</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-custom">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>

            <li class="nav-item d-flex align-items-center">
                <img src="{{ asset('images/logo_alcaldia.webp') }}" alt="Logo" style="height:30px; margin-left:10px;">
            </li>

            <ul class="navbar-nav ml-auto">

                <!-- Botón búsqueda -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search">
                        <i class="fas fa-search"></i>
                    </a>

                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Buscar">

                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>

                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </li>

                <!-- Botón pantalla completa -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-custom">

            <a href="#" class="brand-link text-center">
                <span class="brand-text font-weight-light">SIGECUR</span>
            </a>

            <div class="sidebar">
                <nav class="mt-2">

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <!-- Dashboard -->
                        <li class="nav-item">
                            <a href="{{ url('dashboard') }}" class="nav-link">
                                <i class="nav-icon fas fa-chart-line"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <!-- Cursos -->
                        <li class="nav-item">
                            <a href="{{ url('cursos') }}" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Cursos</p>
                            </a>
                        </li>

                        <!-- Participantes -->
                        <li class="nav-item has-treeview">

                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Participantes
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ url('participantes/crear') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Registrar Participante</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('participantes') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listar Participantes</p>
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <!-- Certificados -->
                        <li class="nav-item">
                            <a href="{{ url('certificados') }}" class="nav-link">
                                <i class="nav-icon fas fa-certificate"></i>
                                <p>Certificados</p>
                            </a>
                        </li>

                        <!-- Usuarios -->
                        <li class="nav-item">
                            <a href="{{ url('usuarios') }}" class="nav-link">
                                <i class="nav-icon fas fa-user-shield"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>

                        <!-- Verificar -->
                        <li class="nav-item">
                            <a href="{{ url('verify') }}" class="nav-link">
                                <i class="nav-icon fas fa-search"></i>
                                <p>Verificar Certificado</p>
                            </a>
                        </li>

                    </ul>

                </nav>
            </div>

        </aside>

        <!-- Contenido -->
        <div class="content-wrapper">
            <section class="content pt-3">
                <div class="container-fluid">

                    @yield('content')

                </div>
            </section>
        </div>

    </div>

    <!-- Scripts necesarios -->
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>

</html>
