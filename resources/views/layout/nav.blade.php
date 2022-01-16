<div class="container">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                <div class="container-fluid">
                            <a class="navbar-brand" href="/">AzqiBlog</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('/') ? 'active fw-bold' : '' }}" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('about') ? 'active fw-bold' : '' }}" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('blog') ? 'active fw-bold' : '' }}" href="/blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('kategories') ? 'active fw-bold' : '' }}" href="/kategories">Kategory</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                        @auth()
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{ auth()->user()->name }}</a>
        <ul class="dropdown-menu">
        <li><a class="dropdown-item bi bi-layout-text-sidebar-reverse" href="/dashboard"> My Dashboard</a></li>
        <li>
        <form action="/logout" method="post">
            @csrf
            <button class="dropdown-item bi bi-box-arrow-right"> Keluar</button>
        </form>
        </li>
        </ul>
    </li>
    @else
    <li class="nav-item">
        <a href="/login" class="nav-link {{ Request::is('login') ? 'active fw-bold' : '' }} bi bi-box-arrow-in-right"> Login</a>
    </li>
    @endauth
    </ul>
    </div>
        </div>
        </nav>
        </div>
    </div>
</div>
