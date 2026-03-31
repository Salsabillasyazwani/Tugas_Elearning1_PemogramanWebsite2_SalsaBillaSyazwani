<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layout.app')

@section('title', $siteName . ' — ' . $tagline)

@section('content')

{{--beranda--}}
<section class="hero-section">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
        
        <div class="carousel-indicators">
            @foreach($carouselSlides as $index => $slide)
                <button type="button" data-bs-target="#heroCarousel"
                        data-bs-slide-to="{{ $index }}"
                        class="{{ $loop->first ? 'active' : '' }}"
                        aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>

        <div class="carousel-inner">
            @foreach($carouselSlides as $slide)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="hero-slide">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">

                                <div class="col-lg-6 hero-text">
                                    <span class="hero-badge">{{ $slide['badge'] }}</span>
                                    <h1 class="hero-title">{{ $slide['title'] }}</h1>
                                    <p class="hero-subtitle">{{ $slide['subtitle'] }}</p>
                                    <div class="d-flex gap-3 flex-wrap">
                                        <a href="{{ $slide['ctaPrimary']['url'] }}" class="btn btn-cta btn-lg">
                                            {{ $slide['ctaPrimary']['label'] }}
                                        </a>
                                        <a href="{{ $slide['ctaSecondary']['url'] }}" class="btn btn-outline-cta btn-lg">
                                            {{ $slide['ctaSecondary']['label'] }}
                                            <i class="bi bi-arrow-right ms-1"></i>
                                        </a>
                                    </div>

                                    <div class="hero-stats d-flex gap-4 mt-4">
                                        @foreach($heroStats as $stat)
                                            <div class="stat-item">
                                                <i class="bi bi-{{ $stat['icon'] }}"></i>
                                                <span>{{ $stat['label'] }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="col-lg-6 text-center hero-image-col">
                                    <div class="hero-image-wrapper">
                                        <img src="{{ $slide['image'] }}"
                                             alt="{{ $slide['title'] }}"
                                             class="hero-product-img">
                                        <div class="hero-image-glow"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>

{{--produk--}}
<section class="products-section" id="produk">
    <div class="container">

        <div class="section-header text-center">
            <span class="section-badge">Menu Unggulan</span>
            <h2 class="section-title">{{ $productSectionTitle }}</h2>
            <p class="section-subtitle">{{ $productSectionSubtitle }}</p>
        </div>

        <div class="product-tabs d-flex justify-content-center gap-2 flex-wrap mb-5">
            @foreach($productCategories as $cat)
                <button class="tab-btn {{ $loop->first ? 'active' : '' }}"
                        data-filter="{{ $cat['slug'] }}">
                    {{ $cat['label'] }}
                </button>
            @endforeach
        </div>

        <div class="row g-4" id="productGrid">
            @foreach($featuredProducts as $product)
                <div class="col-sm-6 col-lg-4 product-item" data-category="{{ $product['category'] }}">
                    <div class="product-card">

                        @if(isset($product['badge']))
                            <span class="product-badge">{{ $product['badge'] }}</span>
                        @endif

                        <div class="product-img-wrap">
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="product-img">
                            <div class="product-overlay">
                                <a href="#" class="btn btn-cta btn-sm">Lihat Detail</a>
                            </div>
                        </div>

                        <div class="product-info">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h5 class="product-name">{{ $product['name'] }}</h5>
                                    <p class="product-type">{{ $product['type'] }}</p>
                                </div>
                                <span class="product-price">{{ $product['price'] }}</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <div class="product-rating">
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="bi bi-star{{ $i <= $product['rating'] ? '-fill' : '' }}"></i>
                                    @endfor
                                    <small>({{ $product['reviews'] }})</small>
                                </div>
                                <a href="#" class="product-link">
                                    Pesan <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="#" class="btn btn-outline-cta btn-lg px-5">
                Lihat Semua Menu <i class="bi bi-grid ms-2"></i>
            </a>
        </div>

    </div>
</section>

{{--layanan--}}
<section class="service-section" id="layanan">
    <div class="container-fluid px-0">
        <div class="row g-0 align-items-stretch">

            <div class="col-lg-5 service-image-col">
                <div class="service-image-wrap">
                    <img src="{{ $serviceSection['image'] }}"
                         alt="{{ $serviceSection['title'] }}"
                         class="service-img">
                </div>
            </div>

            <div class="col-lg-7 d-flex align-items-center">
                <div class="service-content">
                    <span class="section-badge">{{ $serviceSection['badge'] }}</span>
                    <h2 class="service-title">{{ $serviceSection['title'] }}</h2>
                    <p class="service-desc">{{ $serviceSection['description'] }}</p>

                    <div class="service-features">
                        @foreach($serviceSection['features'] as $feature)
                            <div class="service-feature-item">
                                <div class="feature-icon">
                                    <i class="bi bi-{{ $feature['icon'] }}"></i>
                                </div>
                                <div>
                                    <h6 class="feature-title">{{ $feature['title'] }}</h6>
                                    <p class="feature-desc">{{ $feature['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <a href="{{ $serviceSection['ctaUrl'] }}" class="btn-circle-cta mt-4 d-inline-flex align-items-center gap-3">
                        <span class="circle-btn"><i class="bi bi-arrow-right"></i></span>
                        <span>{{ $serviceSection['ctaLabel'] }}</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

{{--Banner--}}
<section class="cta-banner-section">
    <div class="container">
        <div class="cta-banner-inner text-center">
            <h2 class="cta-banner-title">{{ $ctaBanner['title'] }}</h2>
            <p class="cta-banner-subtitle">{{ $ctaBanner['subtitle'] }}</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap mt-4">
                <a href="{{ $ctaBanner['primaryUrl'] }}" class="btn btn-cta btn-lg px-5">
                    {{ $ctaBanner['primaryLabel'] }}
                </a>
                <a href="{{ $ctaBanner['secondaryUrl'] }}" class="btn btn-outline-light btn-lg px-5">
                    {{ $ctaBanner['secondaryLabel'] }}
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
</body>
</html>