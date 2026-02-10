@extends('layouts.main')
@section('content')
    <main class="container-sm relative overflow-hidden bg-bg1 dark:bg-dark1 min-h-dvh pb-20 px-0">
        <div class="flex items-center justify-between gap-2 xs:px-6 px-3 py-5 bg-n0 dark:bg-dark2 mb-6">
            <div class="flex items-center gap-2">
                <a href="javascript:void(0)" onclick="window.history.back()" class="text-2xl inline-flex items-center justify-center text-n900 dark:text-n0">
                    <i class="ph ph-arrow-left"></i>
                </a>
                <span class="text-lg font-normal text-n900 dark:text-n0">Alamat</span>
            </div>
        </div>
        <div class="xs:px-6 px-3">
            <div class="flex flex-col gap-3">
                <div class="flex items-start justify-between gap-3 p-3 bg-n0 dark:bg-dark2 border border-primary shadow-2 rounded-xl">
                    <a href="{{ route('checkout') }}">
                        <div class="flex items-start gap-3">
                            <div class="">
                                <span class="icon bg-primary dark:bg-primary300 text-lg text-n0 p-2 rounded-full">
                                    <i class="ph-fill ph-map-pin"></i>
                                </span>
                            </div>
                            <div class="">
                                <p class="text-n900 dark:text-n0 text-sm text-base mb-1">
                                    Rifal 
                                    <span class="text-xxs text-white bg-primary rounded-sm" style="padding: 2px 4px 2px 4px">Utama</span>
                                </p>
                                <p class="text-n600 dark:text-n400 text-xs mb-1">Link PU Kejaksaan, Tembong</p>
                                <p class="text-n600 dark:text-n400 text-xs">085282380292</p>
                            </div>
                        </div>
                    </a>
                    <div class="">
                        <a href="#" class="text-xl text-n500 dark:text-n300"><i class="ph ph-pencil-line"></i></a>
                    </div>
                </div>
                <div class="flex items-start justify-between gap-3 p-3 bg-n0 dark:bg-dark2 shadow-2 rounded-xl">
                    <a href="{{ route('checkout') }}">
                        <div class="flex items-start gap-3">
                            <div class="">
                                <span class="icon bg-primary dark:bg-primary300 text-lg text-n0 p-2 rounded-full">
                                    <i class="ph-fill ph-map-pin"></i>
                                </span>
                            </div>
                            <div class="">
                                <p class="text-n900 dark:text-n0 text-sm text-base mb-1">Sultan</p>
                                <p class="text-n600 dark:text-n400 text-xs mb-1">Jl. Raya Labuan KM. 2 Cikaliung</p>
                                <p class="text-n600 dark:text-n400 text-xs">08212852122</p>
                            </div>
                        </div>
                    </a>
                    <div class="">
                        <a href="#" class="text-xl text-n500 dark:text-n300"><i class="ph ph-pencil-line"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="fixed bottom-0 left-0 right-0 container-sm z-30 bg-n0 dark:bg-dark3 border-b border-n200 dark:border-n700 px-6 py-3 shadow-1">
            <div class="">
                <a href="add-new-address.html" class="btn bg-primary text-n0 px-6 py-3 rounded-full text-base font-semibold w-full">Add New Address</a>
            </div>
        </div>
    </main>
@endsection