@extends('layouts.AuthLayout')
@section('title')
    404
@endsection
@section('content')
    <!-- Start Page Content -->
    <section class="min-h-[calc(100vh-134px)] flex items-center justify-center">
        <div class="max-w-[1440px] mx-auto text-center px-4">
            <div class="mt-10 space-y-4">
                <h2 class="text-3xl font-bold md:text-5xl dark:text-white">404 Not Found</h2>
                <p class="text-base text-muted dark:text-darkmuted">Sorry, we can’t find that page.</p>
                <img src="{{ URL::asset('build/images/404.svg') }}" class="mx-auto sm:max-w-xs" alt="">
                <div>
                    <a href="{{ url('index') }}"
                        class="inline-block transition-all duration-300 border rounded btn text-purple border-purple hover:bg-purple hover:text-white">
                        Back To Home
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Page Content -->
@endsection
