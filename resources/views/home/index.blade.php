@extends('layouts.main')

@section('content')
    
    <main class="container-sm relative overflow-hidden bg-bg1 dark:bg-dark1 min-h-dvh pb-20 px-0">
        <div class="xs:px-6 px-3 pt-8 pb-20 dark:bg-primary600 bg-no-repeat bg-cover bg-center relative z-10 bg-header-gradient-home">
            <div class="flex items-center justify-between mb-4">
                <a href="#" class="flex items-center gap-2">
                <small class="text-n0">
                <i class="ph ph-map-pin"></i>
                Tembong, Cipocok Jaya </small>
                </a>
                <a href="#" class="notification-button inline-flex items-center justify-center text-2xl text-n0 relative size-5"><i class="ph ph-bell"></i>
                <span class="absolute -top-2 -right-2 w-5 h-5 bg-accent-2 rounded-full border border-n0 text-n0 text-xs flex items-center justify-center">2</span></a>
            </div>
            <div class="relative mb-6">
                <a href="#" class="relative flex items-center justify-between gap-2 bg-n0 p-3 rounded-full">
                <div class="flex items-center gap-2">
                    <span class="icon text-2xl text-n700"><i class="ph ph-magnifying-glass"></i></span><span class="text-sm font-normal text-n500 dark:text-n300">Kamu mau bersihin apa ?</span>
                </div>
                <span class="icon text-2xl text-n700"><i class="ph-fill ph-camera"></i></span></a>
            </div>
            <div class="relative mb-6">
                <div class="flex items-center justify-between gap-2 mb-4">
                    <h6 class="text-lg font-semibold text-n0">Kategori</h6>
                    <a href="#" class="text-n0 font-semibold text-sm">Lihat semua</a>
                </div>
                <div class="categories-slider-wrapper">
                    <div class="swiper categories-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide !w-fit">
                                <a href="#" class="inline-flex gap-2 justify-center items-center p-2 pr-3 bg-primary rounded-2xl"><span class="icon size-10 bg-n0 p-2 rounded-xl"><img src="{{ asset('assets/images/layanan/kategori/bersih_rumah.png') }}" alt="shirt" class="w-full"/></span>
                                <p class="text-sm font-semibold text-n0">Bersih Rumah</p>
                                </a>
                            </div>
                            <div class="swiper-slide !w-fit">
                                <a href="#" class="inline-flex gap-2 justify-center items-center p-2 pr-3 bg-primary rounded-2xl"><span class="icon size-10 bg-n0 p-2 rounded-xl"><img src="{{ asset('assets/images/layanan/kategori/bersih_kosan.png') }}" alt="bag" class="w-full"/></span>
                                <p class="text-sm font-semibold text-n0">Bersih Kosan</p>
                                </a>
                            </div>
                            <div class="swiper-slide !w-fit">
                                <a href="#" class="inline-flex gap-2 justify-center items-center p-2 pr-3 bg-primary rounded-2xl"><span class="icon size-10 bg-n0 p-2 rounded-xl"><img src="{{ asset('assets/images/layanan/kategori/bersih_kantor.png') }}" alt="shoe" class="w-full"/></span>
                                <p class="text-sm font-semibold text-n0">Bersih Kantor</p>
                                </a>
                            </div>
                            <div class="swiper-slide !w-fit">
                                <a href="#" class="inline-flex gap-2 justify-center items-center p-2 pr-3 bg-primary rounded-2xl"><span class="icon size-10 bg-n0 p-2 rounded-xl"><img src="{{ asset('assets/images/layanan/kategori/grooming.png') }}" alt="short pants" class="w-full"/></span>
                                <p class="text-sm font-semibold text-n0">Grooming</p>
                                </a>
                            </div>
                            <div class="swiper-slide !w-fit">
                                <a href="#" class="inline-flex gap-2 justify-center items-center p-2 pr-3 bg-primary rounded-2xl"><span class="icon size-10 bg-n0 p-2 rounded-xl"><img src="{{ asset('assets/images/layanan/kategori/bersih_spesial.png') }}" alt="long pants" class="w-full"/></span>
                                <p class="text-sm font-semibold text-n0">Bersih Spesial</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative xs:px-6 px-3 mb-6 z-20">
            <div class="discount-product-wrapper -mt-16">
                <div class="swiper discount-product">
                    <div class="swiper-wrapper">
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="discount-product-card flex items-center justify-between gap-3 px-3 bg-bg4 dark:bg-dark2 rounded-2xl">
                                <div class="flex-4/5 py-5">
                                    <h6 class="text-xl font-bold text-n900 dark:text-n0 mb-1">Rumah Bersih, Hidup Lebih Nyaman</h6>
                                    <p class="text-sm font-semibold text-n500 dark:text-n300 mb-5">Mulai dari 99rb! Pesan hari ini</p>
                                    <a href="#" class="btn-link text-sm font-semibold text-primary dark:text-primary300">Pesan sekarang <span class="icon"><i class="ph ph-arrow-right"></i></span></a>
                                </div>
                                <div class="flex-2/5">
                                    <img src="{{ asset('assets/images/discount-shirt.png') }}" alt="discount product" class="w-full"/>
                                </div>
                            </div>
                        </div>
                        <!-- Slide --></div>
                </div>
            </div>
        </div>
        <div class="relative mb-6">
            <div class="flash-sale-wrapper pl-6">
                <div class="flex items-center justify-between gap-3 mb-4 pr-6">
                    <h5 class="text-lg font-bold text-n900 dark:text-n0">Promo</h5>
                    <div class="flex items-center gap-2">
                        <div class="flash-sale-timer-wrapper px-2 py-1.5 flex items-center gap-1 bg-primary dark:bg-primary300 rounded-full">
                            <span class="icon text-n0 text-sm"><i class="ph ph-clock"></i></span>
                            <div class="flash-sale-time-wrapper text-n0 text-xs font-semibold" id="timer">
                                <span class="flash-sale-time-hours">00</span>
                                <span class="flash-sale-time-minutes">00</span>
                                <span class="flash-sale-time-seconds">00</span>
                            </div>
                        </div>
                        <a href="flash-sale.html" class="text-sm font-medium text-n500 dark:text-n300">Lihat Semua</a>
                    </div>
                </div>
                <div class="swiper flash-sale">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide !w-fit">
                            <div class="flash-sale-card flex items-center justify-between gap-3 p-2 bg-n0 dark:bg-dark2 rounded-xl w-fit min-w-80">
                                <div class="flex-2/6">
                                    <div class="size-24 relative rounded-lg">
                                        <span class="flash-sale-percentage absolute top-0 left-0 text-xs font-semibold text-n0 bg-accent-2 rounded-sm px-2 py-0.5">40%</span>
                                        <img src="{{ asset('assets/images/layanan/deep_toilet.jpg') }}" alt="flash sale" class="w-full rounded-sm" style="height: 100px; object-fit: cover"/>
                                    </div>
                                </div>
                                <div class="flex-4/6">
                                    <h6 class="text-base font-bold text-n900 dark:text-n0 mb-2"><a href="#">Deep Cleaning Toilet</a></h6>
                                    <div class="mb-1">
                                        <span class="text-base font-bold text-primary block leading-tight">Rp120.000</span>
                                        <span class="text-xs font-normal text-n500 dark:text-n300 line-through">Rp135.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide !w-fit">
                            <div class="flash-sale-card flex items-center justify-between gap-3 p-2 bg-n0 dark:bg-dark2 rounded-xl w-fit min-w-80">
                                <div class="flex-2/6">
                                    <div class="size-24 relative rounded-lg">
                                        <span class="flash-sale-percentage absolute top-0 left-0 text-xs font-semibold text-n0 bg-accent-2 rounded-sm px-2 py-0.5">30%</span>
                                        <img src="{{ asset('assets/images/layanan/bersih_kosan.jpg') }}" alt="flash sale" class="w-full" style="height: 100px; object-fit: cover"/>
                                    </div>
                                </div>
                                <div class="flex-4/6">
                                    <h6 class="text-base font-bold text-n900 dark:text-n0 mb-2"><a href="#">Bersih Kosan</a></h6>
                                    <div class="mb-1">
                                        <span class="text-base font-bold text-primary block leading-tight">Rp65.000</span>
                                        <span class="text-xs font-normal text-n500 dark:text-n300 line-through">Rp95.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative mb-6">
            <div class="seller-wrapper pl-6">
                <div class="flex items-center justify-between mb-4 pr-6">
                    <h5 class="text-lg font-bold text-n900 dark:text-n0">Mitra Kami</h5>
                    <a href="#" class="text-n500 dark:text-n300 font-semibold text-sm">Lihat semua</a>
                </div>
                <div class="swiper seller-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide !w-fit">
                            <div class="store-card bg-n0 dark:bg-dark2 rounded-lg w-fit max-w-[260px] overflow-hidden">
                                <a href="#" class="store-card-image block"><img src="{{ asset('assets/images/mitra/mazaya.png') }}" alt="store" style="width: 157px; height: 157px; object-fit: cover"/></a>
                                <div class="store-card-content p-2 w-full">
                                    <h4 class="text-base font-semibold text-n900 dark:text-n0"><a href="#">Mazaya Cleaning</a></h4>
                                    <a href="javascript:void(0);" class="text-sm text-n500 dark:text-n300 font-normal mb-1 inline-block">Cilegon</a>
                                    <div class="flex items-center justify-between w-full">
                                        <div class="flex items-center gap-1">
                                            <span class="icon text-accent-1"><i class="ph-fill ph-star"></i></span><span class="text-sm text-n900 dark:text-n0">5.0</span>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-wishlist">
                                            <i class="ph ph-user-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide !w-fit">
                            <div class="store-card bg-n0 dark:bg-dark2 rounded-lg w-fit max-w-[260px] overflow-hidden">
                                <a href="#" class="store-card-image block"><img src="{{ asset('assets/images/mitra/ayu.jfif') }}" alt="store" style="width: 157px; height: 157px; object-fit: cover"/></a>
                                <div class="store-card-content p-2 w-full">
                                    <h4 class="text-base font-semibold text-n900 dark:text-n0"><a href="#">Ayu Berkah Clean</a></h4>
                                    <a href="javascript:void(0);" class="text-sm text-n500 dark:text-n300 font-normal mb-1 inline-block">Tangerang</a>
                                    <div class="flex items-center justify-between w-full">
                                        <div class="flex items-center gap-1">
                                            <span class="icon text-accent-1"><i class="ph-fill ph-star"></i></span><span class="text-sm text-n900 dark:text-n0">4.8</span>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-wishlist">
                                            <i class="ph ph-user-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide !w-fit">
                            <div class="store-card bg-n0 dark:bg-dark2 rounded-lg w-fit max-w-[260px] overflow-hidden">
                                <a href="#" class="store-card-image block"><img src="{{ asset('assets/images/mitra/riska.webp') }}" alt="store" style="width: 157px; height: 157px; object-fit: cover"/></a>
                                <div class="store-card-content p-2 w-full">
                                    <h4 class="text-base font-semibold text-n900 dark:text-n0"><a href="#">Riska Berkah</a></h4>
                                    <a href="javascript:void(0);" class="text-sm text-n500 dark:text-n300 font-normal mb-1 inline-block">Lebak</a>
                                    <div class="flex items-center justify-between w-full">
                                        <div class="flex items-center gap-1">
                                            <span class="icon text-accent-1"><i class="ph-fill ph-star"></i></span><span class="text-sm text-n900 dark:text-n0">4.9</span>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-wishlist">
                                            <i class="ph ph-user-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative mb-6">
            <div class="new-product-wrapper pl-6">
                <div class="flex items-center justify-between mb-4 pr-6">
                    <h5 class="text-lg font-bold text-n900 dark:text-n0">Layanan Populer</h5>
                    <a href="#" class="text-n500 dark:text-n300 font-semibold text-sm">Lihat semua</a>
                </div>
                <div class="swiper new-product-slider">
                    <div class="swiper-wrapper">
                        <!-- Service -->
                        <div class="swiper-slide !w-fit">
                            <div class="shop-grid-card bg-n0 dark:bg-dark2 relative rounded-lg w-[180px] overflow-hidden">
                                <div class="relative">
                                    <div class="discount discount-ribon">
                                        <span class="text-xs font-semibold">10% Off</span>
                                    </div>
                                    <div class="shop-grid-card-image">
                                        <img src="{{ asset('assets/images/layanan/bersih_rumah.jpg') }}" alt="shop" class="w-full"/>
                                    </div>
                                </div>
                                <div class="shop-grid-card-content p-2 w-full">
                                    <h4 class="text-base font-semibold text-n900 dark:text-n0">
                                        <a href="{{ route('layanan.show', encrypt(1)) }}">Bersih Rumah</a>
                                    </h4>
                                    <div class="flex items-center gap-1 mb-1">
                                        <span class="icon text-accent-1"><i class="ph-fill ph-star"></i></span><span class="text-sm text-n900 dark:text-n0">5.0 <span class="text-n500 dark:text-n300">67 dipesan</span></span>
                                    </div>
                                    <div class="flex items-center justify-between w-full">
                                        <div class="flex items-center gap-1">
                                            <span class="text-base font-medium text-n900 dark:text-n0">Rp145.000 <small class="text-n500 dark:text-n300" style="display: block">Mazaya Clean</small>
                                            </span>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-wishlist">
                                            <i class="ph ph-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service -->
                        <!-- Service -->
                        <div class="swiper-slide !w-fit">
                            <div class="shop-grid-card bg-n0 dark:bg-dark2 relative rounded-lg w-[180px] overflow-hidden">
                                <div class="relative">
                                    <div class="shop-grid-card-image">
                                        <img src="{{ asset('assets/images/layanan/bersih_kosan.jpg') }}" alt="shop" class="w-full"/>
                                    </div>
                                </div>
                                <div class="shop-grid-card-content p-2 w-full">
                                    <h4 class="text-base font-semibold text-n900 dark:text-n0"><a href="#">Bersih Kosan</a></h4>
                                    <div class="flex items-center gap-1 mb-1">
                                        <span class="icon text-accent-1"><i class="ph-fill ph-star"></i></span><span class="text-sm text-n900 dark:text-n0">4.8 <span class="text-n500 dark:text-n300">78 dipesan</span></span>
                                    </div>
                                    <div class="flex items-center justify-between w-full">
                                        <div class="flex items-center gap-1">
                                            <span class="text-base font-medium text-n900 dark:text-n0">Rp65.000 <small class="text-n500 dark:text-n300" style="display: block">Ayu Berkah</small>
                                            </span>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-wishlist">
                                            <i class="ph ph-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service -->
                        <!-- Service -->
                        <div class="swiper-slide !w-fit">
                            <div class="shop-grid-card bg-n0 dark:bg-dark2 relative rounded-lg w-[180px] overflow-hidden">
                                <div class="relative">
                                    <div class="shop-grid-card-image">
                                        <img src="{{ asset('assets/images/layanan/deep_toilet.jpg') }}" alt="shop" class="w-full"/>
                                    </div>
                                </div>
                                <div class="shop-grid-card-content p-2 w-full">
                                    <h4 class="text-base font-semibold text-n900 dark:text-n0"><a href="#">Deep Cleaning Toilet</a></h4>
                                    <div class="flex items-center gap-1 mb-1">
                                        <span class="icon text-accent-1"><i class="ph-fill ph-star"></i></span><span class="text-sm text-n900 dark:text-n0">4.9 <span class="text-n500 dark:text-n300">57 dipesan</span></span>
                                    </div>
                                    <div class="flex items-center justify-between w-full">
                                        <div class="flex items-center gap-1">
                                            <span class="text-base font-medium text-n900 dark:text-n0">Rp75.000 <small class="text-n500 dark:text-n300" style="display: block">Riska Clean</small>
                                            </span>
                                        </div>
                                        <div class="">
                                            <button class="btn btn-wishlist">
                                            <i class="ph ph-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Service -->
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.navigation')
    </main>

@endsection