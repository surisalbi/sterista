@extends('layouts.main')

@section('content')

@php
    $targetUrl = (url()->previous() == url()->current()) 
                 ? route('home')
                 : url()->previous();
@endphp

<main class="container-sm relative overflow-hidden bg-bg1 dark:bg-dark1 min-h-dvh pb-44 px-0">
    <div class="flex items-center justify-between gap-2 xs:px-6 px-3 py-5 bg-n0 dark:bg-dark2 mb-6">
        <div class="flex items-center gap-2">
            <a href="{{ $targetUrl }}" class="text-2xl inline-flex items-center justify-center text-n900 dark:text-n0">
                <i class="ph ph-arrow-left"></i>
            </a>
            <span class="text-lg font-normal text-n900 dark:text-n0">Cart</span>
        </div>
    </div>
    <div class="xs:px-6 px-3">
        <div class="cart-container flex flex-col gap-4">
            {{-- Item --}}
            <div class="drag-able-item relative overflow-hidden flex transition-all duration-300 ease-in-out">
                <div class="drag-able-item-content flex items-center gap-3 p-2 bg-n0 dark:bg-dark2 rounded-lg w-full transition-all duration-300 ease-in-out">
                    <div class="size-20 rounded-lg bg-n100 dark:bg-dark3 flex-shrink-0 overflow-hidden">
                        <img src="assets/images/shop-1.webp" alt="product image" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full">
                        <div class="mb-3">
                            <h5 class="text-base font-normal text-n900 dark:text-n0 mb-1">
                                <a href="product-details.html">Bersih Rumah</a>
                            </h5>
                            <div class="flex items-center justify-between">
                                <p class="text-xs text-n600 dark:text-n400">
                                    Bersih Rumah Sedang
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-2">
                            <p class="text-base text-n900 dark:text-n0 font-semibold"><span class="text-xs">Rp</span>85.000</p>
                            <div class="product-quantity flex items-center">
                                <button class="decreaseQuantity w-8 h-6 border border-n300 dark:border-n700 text-n900 dark:text-n0 text-base inline-flex items-center justify-center rounded-lg">
                                    <i class="ph ph-minus"></i>
                                </button>
                                <input readonly="readonly" value="1" class="quantityInput w-8 h-6 text-center text-n900 dark:text-n0">
                                <button class="increaseQuantity w-8 h-6 border border-n300 dark:border-n700 text-n900 dark:text-n0 text-base inline-flex items-center justify-center rounded-lg">
                                    <i class="ph ph-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="drag-action-button absolute top-0 right-0 bottom-0 w-20 bg-accent-2/20 flex items-center justify-center rounded-lg invisible transition-all duration-300 ease-in-out">
                    <button class="delete-btn text-accent-2 text-2xl"><i class="ph ph-trash"></i></button>
                </div>
            </div>
            {{-- Item --}}
        </div>
    </div>
    <div class="fixed bottom-0 left-0 right-0 container-sm z-30 bg-n0 dark:bg-dark3 border-b border-n200 dark:border-n700 px-6 py-3">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-n600 dark:text-n400">Total Harga</p>
                <h5 class="text-lg font-semibold text-n900 dark:text-n0">Rp255.000</h5>
            </div>
            <a href="{{ route('checkout') }}" class="bg-primary text-n0 px-5 py-2 rounded-full text-base font-semibold">Checkout</a>
        </div>
    </div>
</main>

@endsection