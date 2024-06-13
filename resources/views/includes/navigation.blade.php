<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Laratobi</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        CRUDs
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('products.index')}}">CRUD productos</a></li>
                        <li><a class="dropdown-item" href="{{ route('categories.index') }}">CRUD categorias</a></li>
                        <li><a class="dropdown-item" href="{{ route('brands.index') }}">CRUD marcas</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
