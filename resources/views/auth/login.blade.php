@extends('layouts.AuthLayout')
@section('title')
    Login
@endsection

@section('content')
    <!-- Start Main Content -->
    <div class="min-h-[calc(100vh-134px)] py-4 px-4 sm:px-12 flex justify-center items-center max-w-[1440px] mx-auto">
        <div
            class="max-w-[550px] flex-none w-full bg-white border border-black/10 p-6 sm:p-10 lg:px-10 lg:py-14 rounded-2xl loginform dark:bg-darklight dark:border-darkborder">
            <h1 class="mb-2 text-2xl font-semibold text-center dark:text-white">Sign In</h1>
            <p class="text-center text-muted mb-7 dark:text-darkmuted">Enter your email and password to sign in!</p>
            <div class="flex flex-wrap items-center gap-4 mb-7">
                <a href="javaScript:;"
                    class="flex items-center flex-1 gap-1 text-black transition-all duration-300 border rounded-md btn border-light dark:text-white dark:hover:text-black hover:bg-light hover:text-black">
                    <div class="flex items-center justify-center flex-none w-8 h-8">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                            <path fill="currentColor"
                                d="M12 11H20.5329C20.5769 11.3847 20.6 11.7792 20.6 12.1837C20.6 14.9184 19.6204 17.2204 17.9224 18.7837C16.4367 20.1551 14.404 20.9592 11.9796 20.9592C8.46933 20.9592 5.43266 18.947 3.9551 16.0123C3.34695 14.8 3 13.4286 3 11.9796C3 10.5306 3.34695 9.1592 3.9551 7.94698C5.43266 5.01226 8.46933 3 11.9796 3C14.4 3 16.4326 3.88983 17.9877 5.33878L16.5255 6.80101C15.3682 5.68153 13.8028 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19C15.5265 19 18.1443 16.3923 18.577 13H12V11Z">
                            </path>
                        </svg>
                    </div>
                    <p class="whitespace-nowrap">Sign in with Google</p>
                </a>
                <a href="javaScript:;"
                    class="flex items-center flex-1 gap-1 text-black transition-all duration-300 border rounded-md btn border-light dark:text-white dark:hover:text-black hover:bg-light hover:text-black">
                    <div class="flex items-center justify-center flex-none w-8 h-8">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                            <path fill="currentColor"
                                d="M15.778 8.20805C15.3053 8.17122 14.7974 8.28446 14.0197 8.58079C14.085 8.55589 13.2775 8.87185 13.0511 8.95089C12.5494 9.12605 12.1364 9.2221 11.6734 9.2221C11.2151 9.2221 10.7925 9.13054 10.3078 8.96695C10.1524 8.91453 9.99616 8.85652 9.80283 8.78102C9.71993 8.74864 9.41997 8.62959 9.3544 8.60391C8.70626 8.35008 8.34154 8.25446 8.03885 8.26194C6.88626 8.27662 5.79557 8.94222 5.16246 10.0443C3.87037 12.2876 4.58583 16.3429 6.47459 19.0751C7.4802 20.5191 8.03062 21.0351 8.25199 21.028C8.4743 21.0184 8.63777 20.9714 9.03567 20.8027C9.11485 20.769 9.11485 20.769 9.202 20.7318C10.2077 20.3033 10.9118 20.1141 11.9734 20.1141C12.9944 20.1141 13.6763 20.2999 14.6416 20.716C14.7302 20.7543 14.7302 20.7543 14.8097 20.7885C15.2074 20.9589 15.3509 20.9963 15.6016 20.9903C15.9591 20.9847 16.4003 20.5727 17.3791 19.1363C17.6471 18.7448 17.884 18.3334 18.0895 17.9169C17.9573 17.8078 17.826 17.6918 17.6975 17.5694C16.4086 16.3409 15.6114 14.6846 15.5895 12.6392C15.5756 11.0188 16.1057 9.61499 16.999 8.4581C16.6293 8.31432 16.2216 8.23817 15.778 8.20805ZM15.9334 6.2141C16.6414 6.2621 18.6694 6.4781 19.9894 8.4101C19.8814 8.4701 17.5654 9.8141 17.5894 12.6221C17.6254 15.9821 20.5294 17.0981 20.5654 17.1101C20.5414 17.1941 20.0974 18.7061 19.0294 20.2661C18.1054 21.6221 17.1454 22.9661 15.6334 22.9901C14.1454 23.0261 13.6654 22.1141 11.9734 22.1141C10.2694 22.1141 9.74138 22.9661 8.33738 23.0261C6.87338 23.0741 5.76938 21.5621 4.83338 20.2181C2.92538 17.4581 1.47338 12.4421 3.42938 9.0461C4.40138 7.3541 6.12938 6.2861 8.01338 6.2621C9.44138 6.2261 10.7974 7.2221 11.6734 7.2221C12.5374 7.2221 14.0854 6.0701 15.9334 6.2141ZM14.7934 4.3901C14.0134 5.3261 12.7414 6.0581 11.5054 5.9621C11.3374 4.6901 11.9614 3.3581 12.6814 2.5301C13.4854 1.5941 14.8294 0.898098 15.9454 0.850098C16.0894 2.1461 15.5734 3.4541 14.7934 4.3901Z">
                            </path>
                        </svg>
                    </div>
                    <p class="whitespace-nowrap">Sign in with Apple</p>
                </a>
            </div>
            <div class="flex items-center mb-7">
                <div class="w-full h-[2px] bg-black/10 dark:bg-darkborder"></div>
                <div class="px-5 capitalize text-muted whitespace-nowrap dark:text-darkmuted">Or with Email</div>
                <div class="w-full h-[2px] bg-black/10 dark:bg-darkborder"></div>
            </div>

            <x-auth-session-status class="mb-4" :status="session('status')" />
            
            <form class="space-y-4" method="POST" action="{{ route('login') }}">
                @csrf
                <div>
                    <x-text-input id="email" type="email" name="email" :value="old('email', 'admin@srbthemes.com')" required autofocus placeholder="Enter your registered email"
                        autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div>
                    <x-text-input id="password" type="password" name="password" placeholder="Enter your password" required value="12345678" autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                @if (Route::has('password.request'))
                    <div class="ltr:text-right rtl:text-left">
                        <a href="{{ route('password.request') }}" class="text-black dark:text-white">Forgot Password?</a>
                    </div>
                @endif
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <button type="submit"
                    class="btn w-full py-3.5 text-base bg-purple border border-purple rounded-md text-white transition-all duration-300 hover:bg-purple/[0.85] hover:border-purple/[0.85]">
                    Sign In
                </button>
            </form>
            <p class="mt-5 text-center text-muted dark:text-darkmuted">Not a Member yet? <a href="{{ route('register') }}"
                    class="text-black dark:text-white">Create an Account</a></p>
        </div>
    </div>
    <!-- End Main Content -->
@endsection
