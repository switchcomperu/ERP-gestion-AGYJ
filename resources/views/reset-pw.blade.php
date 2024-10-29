@extends('layouts.AuthLayout')
@section('title')
    Reset Password
@endsection

@section('content')
    <!-- Start Main Content -->
    <div class="min-h-[calc(100vh-134px)] py-4 px-4 sm:px-12 flex justify-center items-center max-w-[1440px] mx-auto">
        <div
            class="max-w-[550px] flex-none w-full bg-white border border-black/10 p-6 sm:p-10 lg:px-10 lg:py-14 rounded-2xl dark:bg-darklight dark:border-darkborder">
            <h1 class="mb-2 text-2xl font-semibold text-center dark:text-white">Forgot your password?</h1>
            <p class="text-center text-muted mb-7 dark:text-darkmuted">Enter your Email and instructions will be sent to you!
            </p>
            <form class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                <div class="sm:col-span-2">
                    <input type="text" value="" placeholder="Email" class="form-input" required>
                </div>
                <button type="submit"
                    class="btn sm:col-span-2 w-full py-3.5 text-base bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                    Email password reset link
                </button>
            </form>
            <p class="mt-5 text-center">
                <a href="{{ url('index') }}" class="flex items-center justify-center gap-1 leading-none text-black dark:text-white">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="inline-block w-5 h-5">
                            <path fill="currentColor"
                                d="M19 21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001L11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162L23 11.0001L20 11.0001V20.0001C20 20.5524 19.5523 21.0001 19 21.0001ZM6 19.0001H18V9.15757L12 3.70302L6 9.15757V19.0001ZM8 15.0001H16V17.0001H8V15.0001Z">
                            </path>
                        </svg>
                    </span>
                    Back to home
                </a>
            </p>
        </div>
    </div>
    <!-- End Main Content -->
@endsection
