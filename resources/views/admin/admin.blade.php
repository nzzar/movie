<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css?v=3.2.0')}}">
    <script nonce="d34e93fa-826c-4920-94aa-93a1c72a3cf3">
        (function (w, d) {
            ! function (bS, bT, bU, bV) {
                bS[bU] = bS[bU] || {};
                bS[bU].executed = [];
                bS.zaraz = {
                    deferred: [],
                    listeners: []
                };
                bS.zaraz.q = [];
                bS.zaraz._f = function (bW) {
                    return async function () {
                        var bX = Array.prototype.slice.call(arguments);
                        bS.zaraz.q.push({
                            m: bW,
                            a: bX
                        })
                    }
                };
                for (const bY of ["track", "set", "debug"]) bS.zaraz[bY] = bS.zaraz._f(bY);
                bS.zaraz.init = () => {
                    var bZ = bT.getElementsByTagName(bV)[0],
                        b$ = bT.createElement(bV),
                        ca = bT.getElementsByTagName("title")[0];
                    ca && (bS[bU].t = bT.getElementsByTagName("title")[0].text);
                    bS[bU].x = Math.random();
                    bS[bU].w = bS.screen.width;
                    bS[bU].h = bS.screen.height;
                    bS[bU].j = bS.innerHeight;
                    bS[bU].e = bS.innerWidth;
                    bS[bU].l = bS.location.href;
                    bS[bU].r = bT.referrer;
                    bS[bU].k = bS.screen.colorDepth;
                    bS[bU].n = bT.characterSet;
                    bS[bU].o = (new Date).getTimezoneOffset();
                    if (bS.dataLayer)
                        for (const ce of Object.entries(Object.entries(dataLayer).reduce(((cf, cg) => ({
                                ...cf[1],
                                ...cg[1]
                            })), {}))) zaraz.set(ce[0], ce[1], {
                            scope: "page"
                        });
                    bS[bU].q = [];
                    for (; bS.zaraz.q.length;) {
                        const ch = bS.zaraz.q.shift();
                        bS[bU].q.push(ch)
                    }
                    b$.defer = !0;
                    for (const ci of [localStorage, sessionStorage]) Object.keys(ci || {}).filter((ck => ck
                        .startsWith("_zaraz_"))).forEach((cj => {
                        try {
                            bS[bU]["z_" + cj.slice(7)] = JSON.parse(ci.getItem(cj))
                        } catch {
                            bS[bU]["z_" + cj.slice(7)] = ci.getItem(cj)
                        }
                    }));
                    b$.referrerPolicy = "origin";
                    b$.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bS[bU])));
                    bZ.parentNode.insertBefore(b$, bZ)
                };
                ["complete", "interactive"].includes(bT.readyState) ? zaraz.init() : bS.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);

    </script>
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="backend/index3.html" class="brand-link">
                <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Nobar21</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="/akun" class="nav-link">
                                <i class="nav-icon fa fa-solid fa-user"></i>
                                <p>
                                    Akun
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Theaters
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/orders" class="nav-link">
                                <i class="nav-icon fa fa-regular fa-tag"></i>
                                <p>
                                    Orders
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('judul_konten')</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                @yield('main')

            </section>

        </div>

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>


    <script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('backend/dist/js/adminlte.min.js?v=3.2.0')}}"></script>

    <script src="{{asset('backend/dist/js/demo.js')}}"></script>
</body>

</html>
