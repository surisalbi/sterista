@extends('layouts.main')

@section('content')

<main class="container-sm relative overflow-hidden bg-bg1 dark:bg-dark1 min-h-dvh pb-20 px-0">
    <div class="flex items-center justify-between gap-2 xs:px-6 px-3 py-5 bg-n0 dark:bg-dark2 mb-6">
        <div class="flex items-center gap-2">
            <a href="{{ route('checkout') }}" class="text-2xl inline-flex items-center justify-center text-n900 dark:text-n0">
                <i class="ph ph-arrow-left"></i>
            </a>
            <span class="text-lg font-semibold text-n900 dark:text-n0">Pembayaran</span>
        </div>
    </div>
    <div class="xs:px-6 px-3">
        <form action="#">
            <span class="text-n900 dark:text-n0 text-sm block mb-4">Pilih metode pembayaran</span>
            <div class="flex flex-col gap-6 radio-selection">
                <div class="flex flex-col gap-4">
                    <div class="item flex justify-between items-center bg-n0 dark:bg-dark3 shadow-7 rounded-lg p-3 gap-4 cursor-pointer" data-value="qris">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/brand/qris.svg') }}" class="w-24" alt="QRIS">
                        </div>
                        <button class="radio-btn icon text-2xl text-n500 dark:text-n300">
                            <i class="ph ph-radio-button"></i>
                        </button>
                    </div>
                    <div class="item flex justify-between items-center bg-n0 dark:bg-dark3 shadow-7 rounded-lg p-3 gap-4 cursor-pointer" data-value="gopay">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/brand/gopay.png') }}" class="w-24" alt="Gopay">
                        </div>
                        <button class="radio-btn icon text-2xl text-n500 dark:text-n300">
                            <i class="ph ph-radio-button"></i>
                        </button>
                    </div>
                    <div class="item flex justify-between items-center bg-n0 dark:bg-dark3 shadow-7 rounded-lg p-3 gap-4 cursor-pointer" data-value="shopeepay">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/brand/shopeepay.png') }}" class="w-24" alt="Shopeepay">
                        </div>
                        <button class="radio-btn icon text-2xl text-n500 dark:text-n300">
                            <i class="ph ph-radio-button"></i>
                        </button>
                    </div>
                    <div class="item flex justify-between items-center bg-n0 dark:bg-dark3 shadow-7 rounded-lg p-3 gap-4 cursor-pointer" data-value="bca">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/brand/bca.png') }}" class="w-24" alt="BCA">
                        </div>
                        <button class="radio-btn icon text-2xl text-n500 dark:text-n300">
                            <i class="ph ph-radio-button"></i>
                        </button>
                    </div>
                    <div class="item flex justify-between items-center bg-n0 dark:bg-dark3 shadow-7 rounded-lg p-3 gap-4 cursor-pointer" data-value="bri">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/brand/bri.png') }}" class="w-24" alt="BRI">
                        </div>
                        <button class="radio-btn icon text-2xl text-n500 dark:text-n300">
                            <i class="ph ph-radio-button"></i>
                        </button>
                    </div>
                    <div class="item flex justify-between items-center bg-n0 dark:bg-dark3 shadow-7 rounded-lg p-3 gap-4 cursor-pointer" data-value="bni">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/brand/bni.png') }}" class="w-24" alt="BNI">
                        </div>
                        <button class="radio-btn icon text-2xl text-n500 dark:text-n300">
                            <i class="ph ph-radio-button"></i>
                        </button>
                    </div>
                    <div class="item flex justify-between items-center bg-n0 dark:bg-dark3 shadow-7 rounded-lg p-3 gap-4 cursor-pointer" data-value="mandiri">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/brand/mandiri.png') }}" class="w-24" alt="Mandiri">
                        </div>
                        <button class="radio-btn icon text-2xl text-n500 dark:text-n300">
                            <i class="ph ph-radio-button"></i>
                        </button>
                    </div>
                    <div class="item flex justify-between items-center bg-n0 dark:bg-dark3 shadow-7 rounded-lg p-3 gap-4 cursor-pointer" data-value="cimb">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/brand/cimb.png') }}" class="w-24" alt="CIMB">
                        </div>
                        <button class="radio-btn icon text-2xl text-n500 dark:text-n300">
                            <i class="ph ph-radio-button"></i>
                        </button>
                    </div>
                    <div class="item flex justify-between items-center bg-n0 dark:bg-dark3 shadow-7 rounded-lg p-3 gap-4 cursor-pointer" data-value="permata">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('assets/images/brand/permata.png') }}" class="w-24" alt="Permata">
                        </div>
                        <button class="radio-btn icon text-2xl text-n500 dark:text-n300">
                            <i class="ph ph-radio-button"></i>
                        </button>
                    </div>
                    
                </div>
            </div>
            <div class="fixed bottom-0 left-0 right-0 container-sm z-30 bg-n0 dark:bg-dark3 border-b border-n200 dark:border-n700 px-6 py-3 shadow-1">
                <div class="">
                    <button type="button" class="btn bg-primary text-n0 px-6 py-3 rounded-full text-base font-semibold w-full commonModalOpenButton">Bayar Sekarang</button>
                </div>
            </div>
        </form>
    </div>
    <div class="commonModal modal container-sm fixed inset-0 z-50">
        <div class="modalBg absolute inset-0 w-full bg-n900/40 dark:bg-n0/40 backdrop-blur-xs">
        </div>
        <div class="relative z-10 flex h-full flex-col items-center justify-center">
            <div class="relative w-full overflow-y-auto bg-n0 dark:bg-dark1 rounded-3xl p-6 pt-8">
                <span class="icon w-20 h-20 rounded-full flex justify-center items-center mx-auto mb-6">
                    <img src="assets/images/thumb-up.png" alt="thumb up">
                </span>
                <h4 class="w-full text-center text-n900 dark:text-n0 mb-2">Pembayaran Berhasil</h4>
                <p class="text-center text-n500 dark:text-n300 mb-6">Anda telah berhasil melakukan pembayaran</p>
                <a href="#" class="btn btn-primary btn-lg rounded-full text-base font-normal w-full">Lihat pesanan</a>
                <a href="{{ route('home') }}" class="text-n500 dark:text-n300 text-sm w-full mt-3 flex justify-center items-center gap-2">
                    <span><i class="ph ph-arrow-left"></i></span> Kembali ke home
                </a>
            </div>
        </div>
    </div>
</main>

@endsection