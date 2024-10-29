@extends('layouts.creative')
@section('title')
    Creative Layout
@endsection
@section('content')
    <x-breadcrumb title="Creative Layout" pagetitle="Layout" />

    <!-- Start All Card -->
    <div class="flex flex-col gap-4 min-h-[calc(100vh-212px)] detache-card-area">
        <div class="grid grid-cols-1 gap-4">
            <div
                class="gap-6 p-5 bg-white border rounded dark:bg-darklight dark:border-darkborder md:col-span-2 xl:col-span-2 border-black/10">
                <h2 class="mb-4 text-base font-semibold text-black dark:text-white/80">Card Title</h2>
                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <img src="{{ URL::asset('build/images/logo-dark.svg') }}" class="mx-auto h-11 dark:hidden "
                            alt="">
                        <img src="{{ URL::asset('build/images/logo-light.svg') }}" class="hidden mx-auto h-11 dark:block"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Card -->
@endsection
