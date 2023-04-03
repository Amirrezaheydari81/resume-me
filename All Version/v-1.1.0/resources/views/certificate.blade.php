<!-- Header -->
@extends('layouts.header')
@include('layouts.sidebar')
@section('title', 'گواهینامه های من')
@section('index', 'index,follow')
@section('lang', 'en')
@section('author', 'امیررضا حیدری')
<!-- Header -->

<main class="w-full lg:col-span-3" role=main>
    <section>
        <div class="lg:px-10 lg:py-12 p-8">
            <div>
                <h1 class="dark:text-white text-black font-bold md:text-4xl text-2xl tracking-tighter xl:text-9xl">
                    {{ __('word.My') }} <span class=lg:block>{{ __('word.Certificate') }}</span></h1>
            </div>
            <ul class="grid grid-cols-1 gap-x-12 gap-y-16 lg:grid-cols-3 mt-12 sm:grid-cols-2" role=list>
                <li class="flex relative flex-col group items-start">
                    <div class="flex relative bg-white dark:bg-black items-center justify-center rounded-full z-10">
                        <img alt="Google Analytics for Beginners" class="h-8 rounded-full w-8" data-nimg=future
                            decoding=async height=32 loading=lazy src="{{ asset('/images/google-logo.png') }}"
                            style=color:transparent width=32>
                        <h2 class="dark:text-white text-black font-semibold ml-3 text-base"><a
                                href=https://analytics.google.com/analytics/academy/certificate/X7fKwZ_VTP-8V_-mlmCGYw><span
                                    class="-inset-x-4 -inset-y-6 absolute sm:-inset-x-6 sm:rounded-2xl z-20"></span><span
                                    class="relative z-10">Google Analytics for Beginners</span></a></h2>
                    </div>
                </li>
                <li class="flex relative flex-col group items-start">
                    <div class="flex relative bg-white dark:bg-black items-center justify-center rounded-full z-10">
                        <img alt="Introduction to Data Studio" class="h-8 rounded-full w-8" data-nimg=future
                            decoding=async height=32 loading=lazy src="{{ asset('/images/google-logo.png') }}"
                            style=color:transparent width=32>
                        <h2 class="dark:text-white text-black font-semibold ml-3 text-base"><a
                                href=https://analytics.google.com/analytics/academy/certificate/UsNMZbPHRPyKzoL4f0ZHLA><span
                                    class="-inset-x-4 -inset-y-6 absolute sm:-inset-x-6 sm:rounded-2xl z-20"></span><span
                                    class="relative z-10">Introduction to Data Studio</span></a></h2>
                    </div>
                </li>
                <li class="flex relative flex-col group items-start">
                    <div class="flex relative bg-white dark:bg-black items-center justify-center rounded-full z-10">
                        <img alt="Google Tag Manager Fundamentals" class="h-8 rounded-full w-8" data-nimg=future
                            decoding=async height=32 loading=lazy src="{{ asset('/images/google-logo.png') }}"
                            style=color:transparent width=32>
                        <h2 class="dark:text-white text-black font-semibold ml-3 text-base"><a
                                href=https://analytics.google.com/analytics/academy/certificate/k5yUuE6qTmqnW9VqQKmz-Q><span
                                    class="-inset-x-4 -inset-y-6 absolute sm:-inset-x-6 sm:rounded-2xl z-20"></span><span
                                    class="relative z-10">Google Tag Manager Fundamentals</span></a></h2>
                    </div>
                </li>
                <li class="flex relative flex-col group items-start">
                    <div class="flex relative bg-white dark:bg-black items-center justify-center rounded-full z-10">
                        <img alt="Advanced Google Analytics" class="h-8 rounded-full w-8" data-nimg=future
                            decoding=async height=32 loading=lazy src="{{ asset('/images/google-logo.png') }}"
                            style=color:transparent width=32>
                        <h2 class="dark:text-white text-black font-semibold ml-3 text-base"><a
                                href=https://analytics.google.com/analytics/academy/certificate/RSubvhFnTMaC8zhJXqqoKA><span
                                    class="-inset-x-4 -inset-y-6 absolute sm:-inset-x-6 sm:rounded-2xl z-20"></span><span
                                    class="relative z-10">Advanced Google Analytics</span></a></h2>
                    </div>
                </li>
                <li class="flex relative flex-col group items-start">
                    <div class="flex relative bg-white dark:bg-black items-center justify-center rounded-full z-10">
                        <img alt="Google Analytics for Power Users" class="h-8 rounded-full w-8" data-nimg=future
                            decoding=async height=32 loading=lazy src="{{ asset('/images/google-logo.png') }}"
                            style=color:transparent width=32>
                        <h2 class="dark:text-white text-black font-semibold ml-3 text-base"><a
                                href=https://analytics.google.com/analytics/academy/certificate/qDdHPKoiTQuGqoGDw3zkUg><span
                                    class="-inset-x-4 -inset-y-6 absolute sm:-inset-x-6 sm:rounded-2xl z-20"></span><span
                                    class="relative z-10">Google Analytics for Power Users</span></a></h2>
                    </div>
                </li>
                <li class="flex relative flex-col group items-start">
                    <div class="flex relative bg-white dark:bg-black items-center justify-center rounded-full z-10">
                        <img alt="Getting Started With Google Analytics 360" class="h-8 rounded-full w-8"
                            data-nimg=future decoding=async height=32 loading=lazy
                            src="{{ asset('/images/google-logo.png') }}" style=color:transparent width=32>
                        <h2 class="dark:text-white text-black font-semibold ml-3 text-base"><a
                                href=https://analytics.google.com/analytics/academy/certificate/pzRCRhdxQ3GOl_kk_UxB8A><span
                                    class="-inset-x-4 -inset-y-6 absolute sm:-inset-x-6 sm:rounded-2xl z-20"></span><span
                                    class="relative z-10">Getting Started With Google Analytics
                                    360</span></a></h2>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>
</div>
</div>
</body>

</html>
