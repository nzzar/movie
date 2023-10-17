<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <h3>Nobar 21</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="lg-collap collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "home") ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "upcoming") ? 'active' : ''}}" aria-current="page" href="/upcoming">Upcoming</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "theaters") ? 'active' : ''}}" aria-current="page" href="/theater">Theaters</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "order") ? 'active' : ''}}" aria-current="page" href="/order">Buy Tiket</a>
                </li>
            </ul>
        </ul>
        <form action="/search" class="d-flex" method="get">
            <input id="searchnav" class="keyword form-control me-2" type="text" placeholder="search movie, theater ..." name="keyword" aria-label="Search" size="20" autocomplete="off">
            <button class="tombol-cari btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
        </form>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-lg-50">
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/dashboard"> <i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
            @else 
            <li class="nav-item">
                <a class="nav-link {{ ($active === "login") ? 'active' : ''}} fs-5" aria-current="page" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>   
            @endauth
        </ul>
        </div>
    </div>
</nav>