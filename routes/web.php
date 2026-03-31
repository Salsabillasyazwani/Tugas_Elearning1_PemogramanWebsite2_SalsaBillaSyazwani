<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $data = [
        'siteName' => 'Juragan Snack',
        'tagline'  => 'Snack Crispy & Gurih',

        'navLinks' => [
            ['label' => 'Beranda',   'url' => '/'],
            ['label' => 'Produk',      'url' => '#produk'],
            ['label' => 'Layanan',   'url' => '#layanan'],
            ['label' => 'Kontak',    'url' => '#footer'],
        ],

        'footerDesc' => 'Menghadirkan snack gurih dan renyah yang bikin ketagihan. Dibuat dengan bahan pilihan, disajikan dengan cinta.',

        'socialLinks' => [
            ['label' => 'Instagram', 'icon' => 'instagram', 'url' => '#'],
            ['label' => 'Facebook',  'icon' => 'facebook',  'url' => '#'],
            ['label' => 'TikTok',    'icon' => 'tiktok',    'url' => '#'],
            ['label' => 'WhatsApp',  'icon' => 'whatsapp',  'url' => '#'],
        ],

        'footerMenus' => [
            [
                'title' => 'produk',
                'links' => [
                    ['label' => 'Usus Crispy',       'url' => '#'],
                    ['label' => 'Kulit Ayam Crispy', 'url' => '#'],
                    ['label' => 'Basreng',           'url' => '#'],
                    ['label' => 'Seblak Kering',     'url' => '#'],
                    ['label' => 'Makaroni',          'url' => '#'],
                    ['label' => 'Kripik Singkong',   'url' => '#'],
                ],
            ],
            [
                'title' => 'Layanan',
                'links' => [
                    ['label' => 'Delivery', 'url' => '#'],
                    ['label' => 'Pre-Order','url' => '#'],
                    ['label' => 'Catering', 'url' => '#'],
                ],
            ],
        ],

        'heroStats' => [
            ['icon' => 'calendar3',  'label' => 'Buka Setiap Hari'],
            ['icon' => 'envelope',   'label' => 'Pesan Online'],
            ['icon' => 'heart',      'label' => '500+ Pelanggan'],
        ],

        'carouselSlides' => [
            [
                'badge'       => '✦ Snack Baru & Segar',
                'title'       => 'Usus',
                'subtitle'    => 'Camilan renyah yang bikin ketagihan, dibuat dengan bahan pilihan.',
                'image'       => asset('assets/images/usus.jpg'),
                'ctaPrimary'  => ['label' => 'Lihat Menu', 'url' => '#menu'],
                'ctaSecondary'=> ['label' => 'Pesan Sekarang', 'url' => '#layanan'],
            ],
              [
                'badge'       => '✦ Favorit Pelanggan',
                'title'       => 'Kulit ayam crispy',
                'subtitle'    => 'Snack pedas dan gurih yang cocok untuk teman nonton atau kumpul keluarga.',
                'image'       => asset('assets/images/kulit.jpg'),
                'ctaPrimary'  => ['label' => 'Lihat Menu', 'url' => '#menu'],
                'ctaSecondary'=> ['label' => 'Pesan Sekarang', 'url' => '#layanan'],
            ],
            [
                'badge'       => '✦ Favorit Pelanggan',
                'title'       => 'Basreng',
                'subtitle'    => 'Snack pedas dan gurih yang cocok untuk teman nonton atau kumpul keluarga.',
                'image'       => asset('assets/images/basreng.jpg'),
                'ctaPrimary'  => ['label' => 'Lihat Menu', 'url' => '#menu'],
                'ctaSecondary'=> ['label' => 'Pesan Sekarang', 'url' => '#layanan'],
            ],
        ],

        'productSectionTitle'    => 'Pilih Snack Favoritmu',
        'productSectionSubtitle' => 'Camilan gurih dan renyah, cocok untuk semua suasana.',

        'productCategories' => [
            ['label' => 'Semua',            'slug' => 'semua'],
            ['label' => 'Usus',             'slug' => 'usus'],
            ['label' => 'Kulit Ayam',       'slug' => 'kulit-ayam'],
            ['label' => 'Basreng',          'slug' => 'basreng'],
            ['label' => 'Seblak Kering',    'slug' => 'seblak-kering'],
            ['label' => 'Makaroni',         'slug' => 'makaroni'],
            ['label' => 'Kripik Singkong',  'slug' => 'kripik-singkong'],
        ],

        'featuredProducts' => [
            [
                'name'     => 'Usus Crispy',
                'type'     => 'Snack Gurih',
                'price'    => 'Rp 15.000',
                'category' => 'usus',
                'rating'   => 5,
                'reviews'  => 120,
                'image'    =>  asset('assets/images/usus.jpg'),
            ],
            [
                'name'     => 'Kulit Ayam Crispy',
                'type'     => 'Snack Gurih',
                'price'    => 'Rp 12.000',
                'category' => 'kulit-ayam',
                'rating'   => 4,
                'reviews'  => 85,
                'image'    =>  asset('assets/images/kulit.jpg'),
            ],
            [
                'name'     => 'Basreng',
                'type'     => 'Pedas & Gurih',
                'price'    => 'Rp 10.000',
                'category' => 'basreng',
                'rating'   => 4,
                'reviews'  => 70,
                'image'    =>  asset('assets/images/basreng.jpg'),
            ],
            [
                'name'     => 'Seblak Kering',
                'type'     => 'Pedas',
                'price'    => 'Rp 8.000',
                'category' => 'seblak-kering',
                'rating'   => 4,
                'reviews'  => 60,
                'image'    =>  asset('assets/images/sebring.jpg'),
            ],
            [
                'name'     => 'Makaroni',
                'type'     => 'Camilan Renyah',
                'price'    => 'Rp 7.000',
                'category' => 'makaroni',
                'rating'   => 5,
                'reviews'  => 50,
                'image'    =>  asset('assets/images/makaroni.jpg'),
            ],
            [
                'name'     => 'Kripik Singkong',
                'type'     => 'Camilan Renyah',
                'price'    => 'Rp 6.000',
                'category' => 'kripik-singkong',
                'rating'   => 5,
                'reviews'  => 40,
                'image'    =>  asset('assets/images/kripik.jpg'),
            ],
        ],

        'serviceSection' => [
            'badge'       => 'Layanan Juragan Snack',
            'title'       => 'Delivery & Pre-Order',
            'description' => 'Nikmati snack favoritmu tanpa ribet, langsung diantar ke rumah!',
            'image'       =>  asset('assets/images/kurir.png'),
            'ctaLabel'    => 'Pesan Sekarang',
            'ctaUrl'      => '#menu',
            'features'    => [
                ['icon' => 'truck', 'title' => 'Delivery Cepat', 'desc' => 'Pesan dan snack akan diantar cepat.'],
                ['icon' => 'cart',  'title' => 'Mudah Dipesan','desc' => 'Pesan melalui website atau WhatsApp.'],
                ['icon' => 'heart', 'title' => 'Rasa Terjamin','desc' => 'Snack renyah dan gurih, bikin ketagihan.'],
            ],
        ],

        'ctaBanner' => [
            'title'         => 'Jangan Lewatkan Snack Favoritmu!',
            'subtitle'      => 'Usus Crispy, Kulit Ayam Crispy, Basreng, Seblak Kering, Makaroni, dan Kripik Singkong',
            'primaryLabel'  => 'Lihat Semua Menu',
            'primaryUrl'    => '#menu',
            'secondaryLabel'=> 'Pesan Sekarang',
            'secondaryUrl'  => '#layanan',
        ],
    ];

    return view('landing', $data);
});