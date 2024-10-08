<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <script src="https://kit.fontawesome.com/de52212229.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('admin.dashboard')}}"><i class="fa-solid fa-house"></i></a>
                    </li>
                
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.manage_books')}}"><i class='fas fa-book-open'></i>
                        </i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-bell"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.add_books')}}"><i class="fa-solid fa-plus"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.reserved_books')}}"><i class="fa-solid fa-users"></i></a>
                    </li>
                </ul> -->

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <div class="dropdown ms-5">
                    <a type="button" href="{{route('login')}}" class="btn btn-danger">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>
    </body>
</html>