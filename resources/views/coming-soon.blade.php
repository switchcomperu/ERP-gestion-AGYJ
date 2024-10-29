@extends('layouts.AuthLayout')
@section('title')
    Comming Soon
@endsection

@section('content')
    <!-- Start Page Content -->
    <section class="min-h-[calc(100vh-134px)] flex items-center justify-center">
        <div class="max-w-[1440px] mx-auto text-center px-4">
            <div class="space-y-5">
                <p class="text-lg dark:text-white/80"><span
                        class="w-6 relative -top-1.5 h-[2px] inline-block bg-black dark:bg-white/80"></span> Coming Soon</p>
                <h2 class="text-3xl font-bold md:text-5xl dark:text-white">Get Notified When We Launch</h2>
                <div class="relative max-w-[400px] mx-auto !mt-10">
                    <input type="email" id="search" class="form-input ltr:pr-[126px] rtl:pl-[126px]"
                        placeholder="Search..." required="">
                    <button type="button"
                        class="absolute inset-y-1 ltr:right-1 rtl:left-1 btn bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                        Notify Me!
                    </button>
                </div>
                <p class="text-lg !mt-10 dark:text-darkmuted">*Don't worry we will not spam you :)</p>
            </div>
        </div>
    </section>
    <!-- End Page Content -->
@endsection
