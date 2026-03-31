<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  

<footer id="footer" class="site-footer">
    <div class="container">
        <div class="row gy-4">

            <div class="col-lg-4">
                <h3 class="footer-brand">{{ $siteName ?? 'Frem' }}</h3>
                <p class="footer-desc">
                    {{ $footerDesc ?? 'Menghadirkan cita rasa terbaik dalam setiap gigitan. Dibuat dengan cinta, disajikan dengan hati.' }}
                </p>
                <div class="footer-socials d-flex gap-3 mt-3">
                    @foreach($socialLinks as $social)
                        <a href="{{ $social['url'] }}" class="social-icon" title="{{ $social['label'] }}">
                            <i class="bi bi-{{ $social['icon'] }}"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            @foreach($footerMenus as $menu)
                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">{{ $menu['title'] }}</h6>
                    <ul class="footer-links list-unstyled">
                        @foreach($menu['links'] as $link)
                            <li><a href="{{ $link['url'] }}">{{ $link['label'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

            <div class="col-lg-3">
                <h6 class="footer-heading">Newsletter</h6>
                <p class="footer-desc small">Dapatkan info promo & menu terbaru.</p>
                <div class="footer-newsletter d-flex gap-2">
                    <input type="email" class="form-control form-control-sm" placeholder="Email kamu...">
                    <button class="btn btn-cta btn-sm px-3">
                        <i class="bi bi-send-fill"></i>
                    </button>
                </div>
            </div>

        </div>

        <hr class="footer-divider">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center footer-bottom">
            <p class="mb-0 small">
                &copy; {{ date('Y') }} <strong>{{ $siteName ?? 'Frem Bakery' }}</strong>. All rights reserved.
            </p>
            <p class="mb-0 small text-muted">
                Sistem Informasi Pemesanan Kue — Tugas Praktikum Web
            </p>
        </div>
    </div>
</footer>
    
</body>
</html>