<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNavbar">
    <div class="container">
        <a class="navbar-brand brand-logo" href="#">
            {{ $siteName ?? 'Juragan Snack' }}
        </a>

        <button class="navbar-toggler border-0" type="button"
                data-bs-toggle="collapse" data-bs-target="#navMenu"
                aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav mx-auto gap-lg-2">
                @foreach($navLinks as $link)
                    <li class="nav-item">
                        <a class="nav-link {{ $loop->first ? 'active' : '' }}"
                           href="{{ $link['url'] }}">
                            {{ $link['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <div class="d-flex align-items-center gap-3">
                <a href="#" class="nav-icon"><i class="bi bi-house-door"></i></a>
                <a href="#" class="btn btn-cta">
                    Pesan 
                </a>
            </div>
        </div>

    </div>
</nav>
</body>
</html>