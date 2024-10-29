@extends('layouts.AuthLayout')
@section('title')
    Maintanance
@endsection

@section('content')
    <!-- Start Page Content -->
    <section class="min-h-[calc(100vh-134px)] flex items-center justify-center">
        <div class="max-w-[1440px] mx-auto text-center px-4">
            <div class="space-y-5">
                <h2 class="text-3xl font-bold md:text-5xl dark:text-white">Site is Under Maintenance</h2>
                <img src="{{ URL::asset('build/images/maintanance.svg') }}" class="mx-auto sm:max-w-xs" alt="">
                <p class="text-base text-muted dark:text-darkmuted">Need support?</p>
                <a href="javaScript:;" class="text-purple">no-reply@domain.com</a>
            </div>
        </div>
    </section>
    <!-- End Page Content -->
@endsection
