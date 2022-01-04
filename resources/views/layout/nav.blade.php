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
                                <a class="nav-link {{ ($judul=='Home')? 'active' : ''}}" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ ($judul=="About")? 'active' : ''}}" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ ($judul=='Blog')? 'active' : ''}}" href="/blog">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ ($judul=='Kategory Post')? 'active' : ''}}" href="/kategories">Kategory</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>