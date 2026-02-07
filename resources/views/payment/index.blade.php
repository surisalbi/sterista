@extends('layouts.main')

@section('content')

<main class="container-sm relative overflow-hidden bg-bg1 dark:bg-dark1 min-h-dvh pb-20 px-0">
    <div class="flex items-center justify-between gap-2 xs:px-6 px-3 py-5 bg-n0 dark:bg-dark2 mb-6">
        <div class="flex items-center gap-2">
            <a href="javascript:void(0)" onclick="window.history.back()" class="text-2xl inline-flex items-center justify-center text-n900 dark:text-n0"><i class="ph ph-arrow-left"></i></a><span class="text-lg font-semibold text-n900 dark:text-n0">Continue To Pay</span>
        </div>
    </div>
    <div class="xs:px-6 px-3">
        <form action="#">
            <span class="text-n900 dark:text-n0 text-sm block mb-4">Select the payment method you want to use.</span>
            <div class="flex flex-col gap-6 radio-selection">
                <div class="flex flex-col gap-4">
                    <div class="item flex justify-between items-center bg-n0 dark:bg-dark3 shadow-7 rounded-lg p-3 gap-4 cursor-pointer" data-value="paypal">
                        <div class="flex items-center gap-3">
                            <div class="icon w-12 h-12">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none"><path d="M18.6364 7.21293C18.8701 5.68888 18.6364 4.67285 17.8182 3.73497C16.9222 2.67986 15.2859 2.25 13.1822 2.25H7.14363C6.71509 2.25 6.36446 2.56263 6.28655 2.99248L3.75425 19.0145C3.71529 19.3272 3.94904 19.6007 4.26071 19.6007H8.00072L7.72801 21.242C7.68905 21.5155 7.88384 21.75 8.19551 21.75H11.3511C11.7407 21.75 12.0524 21.4765 12.0913 21.1247L12.7536 16.9825C12.7926 16.6308 13.1432 16.3572 13.4939 16.3572H13.9614C17.0001 16.3572 19.4155 15.1067 20.1168 11.5115C20.3895 10.0266 20.2726 8.73697 19.4934 7.87725C19.2597 7.60371 18.987 7.40832 18.6364 7.21293Z" fill="#009CDE"/><path d="M18.6364 7.21293C18.8701 5.68888 18.6364 4.67285 17.8182 3.73497C16.9222 2.67986 15.2859 2.25 13.1822 2.25H7.14363C6.71509 2.25 6.36446 2.56263 6.28654 2.99248L3.75425 19.0145C3.71529 19.3272 3.94904 19.6007 4.26071 19.6007H8.00071L8.89676 13.8171C8.97468 13.3873 9.3253 13.0746 9.75384 13.0746H11.5459C15.0522 13.0746 17.7793 11.6678 18.5584 7.52555C18.5974 7.44739 18.5974 7.33016 18.6364 7.21293Z" fill="#012169"/><path d="M9.94864 7.252C9.98759 6.97846 10.3382 6.62675 10.6888 6.62675H15.4418C15.9872 6.62675 16.5326 6.66583 17.0001 6.74399C17.4286 6.82214 18.2078 7.01753 18.5974 7.252C18.8312 5.72796 18.5974 4.71192 17.7793 3.77405C16.9222 2.67986 15.2859 2.25 13.1822 2.25H7.14363C6.71509 2.25 6.36446 2.56263 6.28654 2.99248L3.75425 19.0145C3.71529 19.3272 3.94904 19.6007 4.26071 19.6007H8.00071L9.94864 7.252Z" fill="#003087"/></svg>
                            </div>
                            <p class="text-sm text-n900 dark:text-n0 font-semibold">PayPal</p>
                        </div>
                        <button class="radio-btn icon text-2xl text-n500 dark:text-n300"><i class="ph ph-radio-button"></i></button>
                    </div>
                    <div class="item flex justify-between items-center bg-n0 dark:bg-dark3 shadow-7 rounded-lg p-3 gap-4 cursor-pointer" data-value="stripe">
                        <div class="flex items-center gap-3">
                            <div class="icon w-12 h-12">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewbox="0 0 15 18" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.97651 5.36073C5.97651 4.58909 6.73232 4.2927 7.9845 4.2927C9.77971 4.2927 12.0476 4.74774 13.8432 5.55844V0.910074C11.8826 0.257329 9.94544 0 7.9845 0C3.18897 0 0 2.09666 0 5.59785C0 11.0573 8.97643 10.1869 8.97643 12.5406C8.97643 13.4507 8.03156 13.7474 6.70859 13.7474C4.74765 13.7474 2.2437 13.0748 0.259439 12.1647V16.8723C2.45649 17.6635 4.67686 18 6.70859 18C11.622 18 15 15.9626 15 12.422C14.9767 6.52745 5.97651 7.57595 5.97651 5.36073Z" fill="#6058F7"/></svg>
                            </div>
                            <p class="text-sm text-n900 dark:text-n0 font-semibold">Stripe</p>
                        </div>
                        <button class="radio-btn icon text-2xl text-n500 dark:text-n300"><i class="ph ph-radio-button"></i></button>
                    </div>
                    <div class="item flex justify-between items-center bg-n0 dark:bg-dark3 shadow-7 rounded-lg p-3 gap-4 cursor-pointer" data-value="razorpay">
                        <div class="flex items-center gap-3">
                            <div class="icon w-12 h-12">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none"><path d="M14.2254 10.2102L11.1407 20.9986H3.60449L5.13261 15.6912L14.2254 10.2102Z" fill="#FF9F29"/><path d="M21.0703 2.38037L15.7171 21H12.0439L15.6602 8.39033L10.1172 11.7292L11.1043 8.40768L21.0703 2.38037Z" fill="#3395FF"/></svg>
                            </div>
                            <p class="text-sm text-n900 dark:text-n0 font-semibold">Razorpay</p>
                        </div>
                        <button class="radio-btn icon text-2xl text-n500 dark:text-n300"><i class="ph ph-radio-button"></i></button>
                    </div>
                    <div class="item flex justify-between items-center bg-n0 dark:bg-dark3 shadow-7 rounded-lg p-3 gap-4 cursor-pointer" data-value="flutterwave">
                        <div class="flex items-center gap-3">
                            <div class="icon w-12 h-12">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none"><path d="M16.561 3.41132C26.3075 2.22878 20.0631 8.93484 17.0428 10.8209C19.1181 12.1082 21.2489 13.9195 22.1569 15.9702C23.8431 19.7274 19.6925 20.2813 16.561 19.3382C13.1331 18.3652 10.1128 16.2846 8.1116 13.8446C7.55572 13.8446 6.94425 13.7698 6.36984 13.6351C7.50013 16.2097 7.9819 18.8442 7.6669 20.9998C7.6669 16.6588 5.10984 12.3477 1.4225 8.75521C0.12544 7.49782 1.45955 6.56975 2.62691 7.78223C3.42367 8.6654 4.14632 9.5785 4.79484 10.5215C6.07337 6.98888 12.2992 3.90529 16.561 3.41132ZM15.1713 9.80303C17.0798 8.85999 22.8795 3.83045 17.4689 4.27951C14.356 4.56392 10.576 6.8841 9.01954 8.38099C11.1875 8.17142 13.3925 8.93484 15.1713 9.80303ZM9.79778 13.7099C11.5395 15.2816 13.9113 16.8085 16.4684 17.3623C17.9507 17.6767 19.5813 17.5419 18.9884 15.8355C18.3769 14.2638 16.8204 12.8866 15.301 11.8388C14.8748 12.0783 14.3931 12.3328 13.9113 12.4974C12.6142 13.0812 11.2245 13.5003 9.79778 13.7099Z" fill="#EBA12A"/><path d="M8.9716 9.48465C10.454 9.37987 12.0475 10.0086 13.2704 10.6373C12.1031 11.0863 10.806 11.3707 9.45337 11.4306C7.47072 11.4456 7.06308 9.63434 8.9716 9.48465Z" fill="white"/></svg>
                            </div>
                            <p class="text-sm text-n900 dark:text-n0 font-semibold">Flutterwave</p>
                        </div>
                        <button class="radio-btn icon text-2xl text-n500 dark:text-n300"><i class="ph ph-radio-button"></i></button>
                    </div>
                    <div class="item flex justify-between items-center bg-n0 dark:bg-dark3 shadow-7 rounded-lg p-3 gap-4 cursor-pointer" data-value="cod">
                        <div class="flex items-center gap-3">
                            <div class="icon w-12 h-12">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none"><path d="M11 15.5005L15.4 15.3005C16.1 15.3005 16.7 14.7005 16.7 14.0005C16.7 13.3005 16.1 12.7005 15.4 12.7005H11.4C11.1 12.7005 10.7 12.6005 10.5 12.5005C10 12.2005 9.1 11.9005 7.7 11.9005C5.5 12.0005 4.6 14.5005 4.6 14.5005L2 16.5005L5 21.2005L8.5 18.9005L15.2 18.3005C15.7 18.3005 16.2 18.0005 16.6 17.7005C18.4 16.0005 20.4 13.4005 21.6 11.9005C22.1 11.3005 21.9 10.4005 21.3 10.0005C20.8 9.60046 20.1 9.60046 19.6 10.1005L16.2 13.1005" stroke="#29A060" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M16.0006 9.4002H8.60059C8.00059 9.4002 7.60059 9.0002 7.60059 8.4002V4.7002H17.1006V8.4002C17.0006 9.0002 16.6006 9.4002 16.0006 9.4002Z" stroke="#29A060" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/><path d="M18.2008 2H6.30078V4.7H18.2008V2Z" stroke="#29A060" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                            <p class="text-sm text-n900 dark:text-n0 font-semibold">Cash on delivery</p>
                        </div>
                        <button class="radio-btn icon text-2xl text-n500 dark:text-n300"><i class="ph ph-radio-button"></i></button>
                    </div>
                </div>
            </div>
            <div class="fixed bottom-0 left-0 right-0 container-sm z-30 bg-n0 dark:bg-dark3 border-b border-n200 dark:border-n700 px-6 py-3 shadow-1">
                <div class="">
                    <button type="button" class="btn bg-primary text-n0 px-6 py-3 rounded-full text-base font-semibold w-full commonModalOpenButton">Place Your Order</button>
                </div>
            </div>
        </form>
    </div>
    <div class="commonModal modal container-sm fixed inset-0 z-50">
        <div class="modalBg absolute inset-0 w-full bg-n900/40 dark:bg-n0/40 backdrop-blur-xs">
        </div>
        <div class="relative z-10 flex h-full flex-col items-center justify-center">
            <div class="relative w-full overflow-y-auto bg-n0 dark:bg-dark1 rounded-3xl p-6 pt-8">
                <span class="icon w-20 h-20 rounded-full flex justify-center items-center mx-auto mb-6"><img src="assets/images/thumb-up.png" alt="thumb up"></span>
                <h4 class="w-full text-center text-n900 dark:text-n0 mb-2">Order Successful</h4>
                <p class="text-center text-n500 dark:text-n300 mb-6">You have successfully made order</p>
                <a href="order.html" class="btn btn-primary btn-lg rounded-full text-base font-normal w-full">View Order</a><a href="home.html" class="text-n500 dark:text-n300 text-sm w-full mt-3 flex justify-center items-center gap-2"><span><i class="ph ph-arrow-left"></i></span> Back to Home</a>
            </div>
        </div>
    </div>
</main>

@endsection