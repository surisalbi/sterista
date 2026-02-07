@extends('layouts.main')

@section('content')

<main class="container-sm relative overflow-hidden bg-bg1 dark:bg-dark1 min-h-dvh pb-28 px-0">
    <div class="relative py-5">
        <div class="flex items-center justify-between gap-2 xs:px-6 px-3">
            <div class="flex items-center gap-3">
                <a href="javascript:void(0)" onclick="window.history.back()" class="text-2xl inline-flex items-center justify-center text-n900 dark:text-n0">
                    <i class="ph ph-arrow-left"></i>
                </a>
            </div>
            <div class="">
                <a href="javascript:void(0);" class="search-btn text-n500 dark:text-n300 text-2xl">
                    <i class="ph ph-share-fat"></i>
                </a>
                <a href="javascript:void(0);" class="search-btn text-n500 dark:text-n300 text-2xl">
                    <i class="ph ph-shopping-cart"></i>
                </a>
            </div>
        </div>
        <div class="product-slider-container mt-4">
            <div class="swiper product-slider bg-n0 dark:bg-dark2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/product-details-001.png') }}" alt="product" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/product-details-002.png') }}" alt="product" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/product-details-003.png') }}" alt="product" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/product-details-004.png') }}" alt="product" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/product-details-005.png') }}" alt="product" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/product-details-006.png') }}" alt="product" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/product-details-007.png') }}" alt="product" class="w-full h-full object-cover">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/images/product-details-008.png') }}" alt="product" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
            <div class="product-slider-pagination flex items-center justify-center mt-4"></div>
        </div>
    </div>
    <div class="">
        <div class="product-info xs:px-6 px-3 py-4 bg-n0 dark:bg-dark2 mb-4">
            <div class="flex justify-between mb-1">
                <div class="">
                    <div class="flex items-center gap-4">
                        <span class="product-price text-primary dark:text-primary300 text-lg font-semibold">
                            <span class="currency">Rp</span>
                            <span class="amount">125.000</span>
                        </span>
                        <span class="product-price-discount text-n500 dark:text-n400 line-through">
                            <span class="currency">Rp</span>
                            <span class="amount">150.000</span>
                        </span>
                    </div>
                </div>
                <div class="flext item-center">
                    <span class="text-n500 dark:text-n400 text-sm">45x dipesan</span>
                    <button class="btn-wishlist add-to-wishlist text-n500 dark:text-n400 text-sm">
                        <i class="ph ph-heart"></i>
                    </button>
                </div>
            </div>
            <h5 class="product-title text-n900 dark:text-n0 text-lg font-semibold mb-2">Bersih Rumah</h5>
            <div class="product-rating mb-3">
                <span class="product-rating-count text-n900 dark:text-n0 text-sm">4.9</span>
                <span class="product-rating-stars text-accent-1">
                    <i class="ph-fill ph-star"></i>
                    <i class="ph-fill ph-star"></i>
                    <i class="ph-fill ph-star"></i>
                    <i class="ph-fill ph-star"></i>
                    <i class="ph ph-star"></i>
                </span>
            </div>
            <div class="product-quantity-wrapper flex items-center justify-between gap-2 mb-4">
                <span class="product-quantity-title text-n900 dark:text-n0 text-base font-semibold">&nbsp;</span>
                <div class="product-quantity flex items-center">
                    <button class="decreaseQuantity w-10 h-8 rounded border border-n300 dark:border-n700 bg-n0 dark:bg-dark2 text-n900 dark:text-n0 text-xl inline-flex items-center justify-center">
                        <i class="ph ph-minus"></i>
                    </button>
                    <input readonly="readonly" value="1" class="quantityInput w-10 h-8 text-center border border-n300 dark:border-n700 bg-n0 dark:bg-dark2 text-n900 dark:text-n0 mx-[-1px]">
                    <button class="increaseQuantity w-10 h-8 rounded border border-n300 dark:border-n700 bg-n0 dark:bg-dark2 text-n900 dark:text-n0 text-xl inline-flex items-center justify-center">
                        <i class="ph ph-plus"></i>
                    </button>
                </div>
            </div>
            <div class="product-selection-wrapper flex items-center justify-between border-t border-b border-n300 dark:border-n700 py-3 relative after:absolute after:top-0 after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:w-[1px] after:h-full after:bg-n300 after:dark:bg-n700">
                <div class="product-color-selection flex items-center justify-center w-full gap-2">
                    <span class="text-n500 dark:text-n300 text-base">Sub Layanan:</span>
                    <div class="choices-no-style">
                        <select name="color" id="product-color" class="choices text-n900 dark:text-n0 text-base font-semibold">
                            <option value="black" selected="selected">Rumah Kecil</option>
                            <option value="blue">Rumah Sedang</option>
                            <option value="red">Rumah Besar</option>
                        </select>
                    </div>
                </div>
                <div class="product-size-selection flex items-center justify-center w-full gap-2">
                    <span class="text-n500 dark:text-n300 text-base">Harga:</span>
                    <div class="choices-no-style">
                        <span class="choices text-n900 dark:text-n0 text-base font-semibold">
                            Rp100.000
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="xs:px-6 px-3">
            <div class="product-seller-profile p-3 rounded-xl bg-n0 dark:bg-dark3 mb-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="seller-profile-pic w-10 h-10 rounded-full overflow-hidden">
                            <img src="{{ asset('assets/images/seller-001.png') }}" alt="seller" class="w-full h-full object-cover">
                        </div>
                        <div class="">
                            <h6 class="seller-name text-n900 dark:text-n0 font-semibold">Mayaza Clean</h6>
                            <span class="seller-location text-n500 dark:text-n400 text-sm"><i class="ph ph-map-pin"></i> Cilegon</span>
                        </div>
                    </div>
                    <div class="">
                        <a href="javascript:void(0);" class="btn btn-outline rounded-full dark:text-primary300 dark:border-primary300 dark:hover:bg-primary300 dark:hover:text-n0">Ikuti</a>
                    </div>
                </div>
            </div>
            <div class="product-des-tab-wrapper mb-4">
                <div class="wa_accordion-wrapper flex flex-col gap-4">
                    <div class="wa_accordion-item w-full rounded-xl overflow-hidden transition-all duration-300 ease-in-out bg-n0 dark:bg-dark3 shadow-2 show">
                        <div class="wa_accordion-header flex items-center justify-between p-4 cursor-pointer">
                            <h5 class="wa_accordion-title text-n900 dark:text-n0 font-semibold flex items-center gap-3">
                                <span class="flex items-center justify-center">
                                    <i class="ph ph-clipboard-text"></i>
                                </span>
                                Informasi Layanan
                            </h5>
                            <span class="wa_accordion-icon-wrapper relative size-6"><span class="wa_accordion-icon active-icon text-n900 dark:text-n0"><i class="ph ph-caret-right"></i></span><span class="wa_accordion-icon inactive-icon text-n900 dark:text-n0"><i class="ph ph-caret-down"></i></span></span>
                        </div>
                        <div class="wa_accordion-content">
                            <div class="wa_accordion-content-wrapper p-4 pt-0">
                                <div class="wa_accordion-description text-n500 dark:text-n300">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</div>
                            </div>
                        </div>
                    </div>
                    <div class="wa_accordion-item w-full rounded-xl overflow-hidden transition-all duration-300 ease-in-out bg-n0 dark:bg-dark3 shadow-2">
                        <div class="wa_accordion-header flex items-center justify-between p-4 cursor-pointer">
                            <h5 class="wa_accordion-title text-n900 dark:text-n0 font-semibold flex items-center gap-3">
                                <span class="flex items-center justify-center">
                                    <i class="ph ph-star"></i>
                                </span>
                                Review & Penilaian
                            </h5>
                            <span class="wa_accordion-icon-wrapper relative size-6"><span class="wa_accordion-icon active-icon text-n900 dark:text-n0"><i class="ph ph-caret-right"></i></span><span class="wa_accordion-icon inactive-icon text-n900 dark:text-n0"><i class="ph ph-caret-down"></i></span></span>
                        </div>
                        <div class="wa_accordion-content">
                            <div class="wa_accordion-content-wrapper p-4 pt-0">
                                <div class="wa_accordion-description text-n500 dark:text-n300">
                                    @include('layanan.review')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative mb-6">
            <div class="featured-product-wrapper pl-6">
                <div class="flex items-center justify-between mb-4 pr-6">
                    <h4 class="font-bold text-n900 dark:text-n0">Layanan Serupa</h4>
                </div>
                <div class="swiper featured-product-slider">
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
        <div class="acction-wrapper py-3 bg-n0 dark:bg-dark2 fixed bottom-0 left-0 right-0 w-full z-20 container-sm px-0">
            <div class="flex items-center justify-between w-full xs:px-6 px-3 border-b border-n200 dark:border-n900 pb-4">
                <p class="text-base text-n500 dark:text-n300">
                    Total
                </p>
                <p class="text-base text-n900 dark:text-n0 font-semibold">Rp450.000</p>
            </div>
            <div class="flex items-center justify-between gap-3 w-full xs:px-6 px-3 pt-4">
                <a href="{{ route('cart') }}" class="btn btn-outline rounded-full w-full">
                    <i class="ph ph-plus"></i> 
                    Keranjang
                </a>
                <a href="checkout.html" class="btn btn-primary rounded-full w-full">
                    <i class="ph ph-shopping-cart"></i> 
                    Pesan
                </a>
            </div>
        </div>
    </div>
</main>

@endsection