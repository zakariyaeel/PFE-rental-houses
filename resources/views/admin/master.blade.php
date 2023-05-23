<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | @yield('title')</title>
    
    <link rel="icon" href="{{ asset('assets/img/seclg.svg') }}" type="image/x-icon">
    <!-- font awsome -->
    <!-- <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    @section('css')
        <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/glob.css') }}">
    @show
</head>
<body>
        <div class="sidebar position-fixed h-100 bg-light">
            <header class="">
                <div class="logo position-fixed top-0 start-0 p-3 text-center">
                    <img src="{{ asset('assets/img/logo-head.svg') }}" alt="" class="">
                </div>
            </header>
            <hr class="opacity-0 border-secondary">
            <div class="element h-100 ">
                <div class="menu-bar overflow-auto">
                    <ul class="menu-links px-2 fs-5">
                        <li class="nav-link  p-2 rounded">
                            <a href="{{ route('admin') }}" class="link text-decoration-none d-block w-100 rounded {{ request()->is('admin') ? 'active' : null }}">
                                <i class="fa-light fa-chart-tree-map me-2"></i>
                                <span class="nav-txt">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-link  p-2 rounded">
                            <a href="{{ route('posts.index') }}" class="link text-decoration-none d-block w-100 rounded {{ request()->is('admin/posts') ? 'active' : null }}">
                                <i class="fa-light fa-newspaper me-2"></i>
                                <span class="nav-txt">Annonces</span>
                            </a>
                        </li>
                        <li class="nav-link  p-2 rounded">
                            <a href="{{ url('/admin/reservations') }}" class="link text-decoration-none d-block w-100 rounded {{ request()->is('admin/payment') ? 'active' : null }}">
                            <i class="fa-light fa-calendar-circle-user me-2"></i>
                                <span class="nav-txt">Resérvations</span>
                            </a>
                        </li>
                        <li class="nav-link  p-2 rounded">
                            <a href="" class="link text-decoration-none d-block w-100 rounded {{ request()->is('admin/payment') ? 'active' : null }}">
                                <i class="fa-light fa-file-invoice-dollar me-2"></i>
                                <span class="nav-txt">Paiements</span>
                            </a>
                        </li>
                        <li class="nav-link  p-2 rounded">
                            <a href="{{ url('/admin/clients') }}" class="link text-decoration-none d-block w-100 rounded {{ request()->is('admin/clients') ? 'active' : null }}">
                                <i class="fa-light fa-users me-2"></i>
                                <span class="nav-txt">Clients</span>
                            </a>
                        </li>
                        <li class="nav-link  p-2 rounded">
                            <a href="{{ url('/admin/responsables') }}" class="link text-decoration-none d-block w-100 rounded {{ request()->is('admin/responsables') ? 'active' : null }}">
                                <i class="fa-light fa-user-tie me-2"></i>
                                <span class="nav-txt">Responsables</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bottom-menu position-absolute bottom-0 w-100 bg-light">
                    <li class="nav-link  p-2 rounded">
                        <form action="{{ route('logout') }}" method="post" class="">
                            @csrf
                            <button type="submit" class="link p-2 rounded "><span class="nav-txt">
                                <i class="fa-light fa-right-from-bracket me-3"></i>
                                Déconnexion</span>
                            </button>
                        </form>
                    </li>
                </div>
            </div>
        </div>
        <secttion class="content">
            <header class="d-flex justify-content-end w-100 mb-4">
                <div class="me-2">
                    <a href="{{ route('index') }}" class="btn p-1 text-light btn-site">View site</a>
                </div>
                <div class="profile bg-secondary p-1 rounded">
                    <i class="fa-regular fa-user user icon text-light"></i>
                </div>
            </header>
    @yield('content')
</body>
</html>


