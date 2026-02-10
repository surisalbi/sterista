@extends('layouts.main')

@section('content')

@php
    $targetUrl = (url()->previous() == url()->current()) 
                 ? route('home')
                 : url()->previous();
@endphp

<main class="container-sm relative overflow-hidden bg-bg1 dark:bg-dark1 min-h-dvh pb-20 px-0">
    <div class="flex items-center justify-between gap-2 xs:px-6 px-3 py-5 bg-n0 dark:bg-dark2 mb-6">
        <div class="flex items-center gap-2">
            <a href="{{ $targetUrl }}" class="text-2xl inline-flex items-center justify-center text-n900 dark:text-n0">
                <i class="ph ph-arrow-left"></i>
            </a>
            <span class="text-lg font-normal text-n900 dark:text-n0">Checkout</span>
        </div>
    </div>
    <div class="xs:px-6 px-3">
        <div class="p-3 rounded-lg bg-n0 dark:bg-dark2 mb-6">
            <div class="flex items-center justify-between mb-3">
                <div class="flex items-center gap-1 text-n900 dark:text-n0 font-normal text-sm text-base mb-4">
                    <span class="ph ph-house text-sm"></span> 
                    <span>Alamat</span>
                </div>
                <a href="shipping-address.html" class="text-xs text-accent-2 font-normal">Ubah</a>
            </div>
            <div class="flex items-start justify-between gap-3">
                <div class="flex items-start gap-3">
                    <div class="">
                        <span class="icon bg-primary dark:bg-primary300 text-lg text-n0 p-2 rounded-full">
                            <i class="ph-fill ph-map-pin"></i>
                        </span>
                    </div>
                    <div class="">
                        <p class="text-n900 dark:text-n0 text-base font-normal text-sm mb-1">Rifaldi</p>
                        <p class="text-n600 dark:text-n400 text-xs mb-1">Link PU Kejaksaan, Tembong</p>
                        <p class="text-n600 dark:text-n400 text-xs">085282380292</p>
                    </div>
                </div>
                <div class="">
                    <a href="edit-address.html" class="text-xl text-n500 dark:text-n300"><i class="ph ph-pencil-line"></i></a>
                </div>
            </div>
        </div>
        <div class="p-3 rounded-lg bg-n0 dark:bg-dark2 mb-6">
            <div class="flex items-center gap-1 text-n900 dark:text-n0 font-normal text-sm text-base mb-4">
                    <span class="ph ph-list text-sm"></span> 
                    <span>Daftar Layanan</span>
                </div>
            <div class="flex flex-col gap-4">
                {{-- Item --}}
                <div class="flex gap-3 shadow-2 p-3 rounded-lg bg-n0 dark:bg-dark3">
                    <div class="w-20 h-20 rounded-lg overflow-hidden">
                        <img src="assets/images/shop-1.webp" alt="product" class="w-full h-full object-cover">
                    </div>
                    <div class="w-full">
                        <h6 class="text-n900 dark:text-n0 font-normal text-sm mb-1">Bersih Rumah</h6>
                        <p class="text-n600 dark:text-n400 text-xs mb-2">Bersih Rumah Sedang</p>
                        <div class="flex items-center justify-between gap-3">
                            <p class="text-n900 dark:text-n0 text-xs font-semibold">Rp85.000</p>
                            <p class="text-n600 dark:text-n400 text-sm">
                                <span class="text-xxs">x</span> 
                                <span class="text-n900 text-xs dark:text-n0">1</span>
                            </p>
                        </div>
                    </div>
                </div>
                {{-- Item --}}
            </div>
        </div>
        <div class="p-3 rounded-lg bg-n0 dark:bg-dark2 mb-6">
            <div class="flex items-center gap-1 text-n900 dark:text-n0 font-normal text-sm text-base mb-4">
                    <span class="ph ph-calendar text-sm"></span> 
                    <span>Jadwal Pengerjaan</span>
                </div>
            <a href="" class="flex items-center justify-between gap-3">
            <div class="flex items-center gap-3">
                <div class="">
                    <span class="icon bg-primary dark:bg-primary300 text-lg text-n0 p-2 rounded-full">
                        <i class="ph-fill ph-calendar"></i>
                    </span>
                </div>
                <div class="">
                    <p class="text-n600 text-xs dark:text-n400 text-base">Pilih Jadwal Pengerjaan</p>
                </div>
            </div>
            <div class="">
                <span class="text-xl text-n500 dark:text-n300">
                    <i class="ph ph-caret-right"></i>
                </span>
            </div>
            </a>
        </div>
        <div class="p-3 rounded-lg bg-n0 dark:bg-dark2 mb-6">
            <div class="flex items-center justify-between gap-3 mb-3">
                <h6 class="text-n900 dark:text-n0 font-normal text-sm text-base">Kode Promo</h6>
            </div>
            <form action="#" class="mb-3 pb-3 border-b border-n200 dark:border-n700">
                <div class="flex items-center gap-3 rounded-full border border-n200 dark:border-n700 bg-n0 dark:bg-dark1 text-n900 focus-within::border-primary dark:focus-within:border-primary300">
                    <input placeholder="Masukkan Kode Promo" class="w-full text-sm text-n900 dark:text-n0 placeholder:text-n500 dark:placeholder:text-n300 pl-4">
                    <button class="bg-primary text-sm dark:bg-primary300 text-n0 dark:text-n900 px-6 py-3 rounded-r-full text-base font-semibold whitespace-nowrap">Apply</button>
                </div>
            </form>
            <div class="">
                <h6 class="text-n900 dark:text-n0 font-normal text-sm text-base mb-3">Rincian Pembayaran</h6>
                <ul class="flex flex-col gap-3">
                    <li class="flex items-center justify-between">
                        <span class="text-n600 dark:text-n400 text-xs">Subtotal Layanan</span><span class="text-n900 dark:text-n0 text-xs">$2000.00</span>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-n600 dark:text-n400 text-xs">Biaya Transport</span><span class="text-n900 dark:text-n0 text-xs">$20.00</span>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-n600 dark:text-n400 text-xs">Diskon</span><span class="text-n900 dark:text-n0 text-xs">$00.00</span>
                    </li>
                    <li class="flex items-center justify-between border-b border-n200 dark:border-n700">
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-n900 dark:text-n400 text-sm">Total Pembayaran</span><span class="text-n900 dark:text-n0 text-sm">N/A</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="fixed bottom-0 left-0 right-0 container-sm z-30 bg-n0 dark:bg-dark3 border-b border-n200 dark:border-n700 px-6 py-3">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-n600 dark:text-n400">Total</p>
                <h5 class="font-semibold text-n900 dark:text-n0">Rp125.000</h5>
            </div>
            <a href="{{ route('payment') }}" class="bg-primary text-n0 px-6 py-3 rounded-full text-base font-semibold">
                <i class="ph ph-arrow-right"></i>
                Pembayaran
            </a>
        </div>
    </div>
</main>

@endsection