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
                    {{-- <li><a class="dropdown-item" href="/dashboard"> <i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li> --}}
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <a href="{{ url('logout') }}" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</a>
                        </form>
                    </li>
                </ul>
            </li>
            @else 
            <li class="nav-item">
                <a class="nav-link {{ ($active === "login") ? 'active' : ''}} fs-5" aria-current="page" href="{{ url('login') }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>  
            <li class="nav-item">
                <a class="nav-link {{ ($active === "register") ? 'active' : ''}} fs-5" aria-current="page" href="{{ url('register') }}"><i class="bi bi-box-arrow-in-right"></i> Register</a>
            </li> 
            @endauth
        </ul>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function(){
        $('#searchnav').keyup(function() {
            var value = $(this).val().toLowerCase();
            var currUrl = window.location.pathname;
            $.ajax({
                type: "POST",
                url: "{route('search')}",
                data: { data: value, url: currUrl, _token: '{{csrf_token()}}' },
                success: function (data) {
                    if(currUrl == '/') {
                        $('.cardindex').empty()
                        $.each(data, function(index, value){
                            $('.cardindex').append("<div class='col col-sm-2 col-md-4 col-lg-3 mb-4 mt-4'><a href='/movie/"+value.id+"' class='text-decoration-none text-black'><div class='card mx-auto' style='height: 95%'><img src='"+value.bannerUrl+"' alt=''><div class='card-body'><h6 class='card-title text-center'>"+value.title+"</h6></div></div></a></div>");
                        });
                    } else if( currUrl == '/upcoming' ) {
                        $('.cardindex').empty()
                        $.each(data, function(index, value){
                            $('.cardindex').append("<div class='col col-sm-2 col-md-4 col-lg-3 mb-4 mt-4'><a href='#' class='text-decoration-none text-black'><div class='card mx-auto' style='height: 95%'><img src='"+value.bannerUrl+"' alt=''><div class='card-body'><h6 class='card-title text-center'>"+value.title+"</h6></div></div></a></div>")
                        });
                    }
                },
                error: function (data, textStatus, errorThrown) {
                    console.log(data);
                },
            });
        })
    })
</script>