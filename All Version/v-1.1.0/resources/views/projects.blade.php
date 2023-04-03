<!-- Header -->
@extends('layouts.header')
@include('layouts.sidebar')
@section('title', 'پروژه های من')
@section('index', 'index,follow')
@section('lang', 'en')
@section('author', 'امیررضا حیدری')
<!-- Header -->

<main class="w-full lg:col-span-3" role=main>
    <section>
        <div class="lg:px-10 lg:py-12 p-8">
            <div>
                <h1 class="dark:text-white text-black font-bold md:text-4xl text-2xl tracking-tighter xl:text-9xl">
                    {{ __('word.My most') }} <span class=lg:block>{{ __('word.recent work') }}</span></h1>
            </div>
            <ul class="grid grid-cols-1 gap-x-12 gap-y-16 lg:grid-cols-3 mt-12 sm:grid-cols-2" role=list>
                <li class="relative flex flex-col group items-start">
                    <div class="relative z-10 bg-white dark:bg-black flex items-center justify-center rounded-full">
                        <img alt="" class="h-16 rounded-full w-16" data-nimg=future decoding=async height=64
                            loading=lazy src=/images/all-logo/01.jpg style=color:transparent width=64>
                        <h2 class="dark:text-white text-black font-semibold ml-3 text-base"><span
                                class="-inset-x-4 -inset-y-6 absolute sm:-inset-x-6 sm:rounded-2xl z-20"></span><span
                                class="relative z-10">{{ __('word.Star Plastic Industries') }}</span></h2>
                    </div>
                    <p class="relative z-10 dark:text-zinc-400 mt-6 text-sm text-zinc-500">
                        {{ __('word.Production of poultry keeping products') }}</p>
                </li>
                <li class="relative flex flex-col group items-start">
                    <div class="relative z-10 bg-white dark:bg-black flex items-center justify-center rounded-full">
                        <img alt="" class="h-16 rounded-full w-16" data-nimg=future decoding=async height=64
                            loading=lazy src=/images/all-logo/02.jpg style=color:transparent width=64>
                        <h2 class="dark:text-white text-black font-semibold ml-3 text-base"><span
                                class="-inset-x-4 -inset-y-6 absolute sm:-inset-x-6 sm:rounded-2xl z-20"></span><span
                                class="relative z-10">{{ __('word.IdealtJam') }}</span></h2>
                    </div>
                    <p class="relative z-10 dark:text-zinc-400 mt-6 text-sm text-zinc-500">
                        {{ __('word.The company sells and repairs refrigerator compressors') }}</p>
                </li>
                <li class="relative flex flex-col group items-start">
                    <div class="relative z-10 bg-white dark:bg-black flex items-center justify-center rounded-full">
                        <img alt="" class="h-16 rounded-full w-16" data-nimg=future decoding=async height=64
                            loading=lazy src=/images/all-logo/03.jpg style=color:transparent width=64>
                        <h2 class="dark:text-white text-black font-semibold ml-3 text-base"><span
                                class="-inset-x-4 -inset-y-6 absolute sm:-inset-x-6 sm:rounded-2xl z-20"></span><span
                                class="relative z-10">{{ __('word.ImanKaran Vahdat') }}</span></h2>
                    </div>
                    <p class="relative z-10 dark:text-zinc-400 mt-6 text-sm text-zinc-500">
                        {{ __('word.Supply and production of anti-theft doors in Iran') }}</p>
                </li>
                <li class="relative flex flex-col group items-start">
                    <div class="relative z-10 bg-white dark:bg-black flex items-center justify-center rounded-full">
                        <img alt="" class="h-16 rounded-full w-16" data-nimg=future decoding=async height=64
                            loading=lazy src=/images/all-logo/04.jpg style=color:transparent width=64>
                        <h2 class="dark:text-white text-black font-semibold ml-3 text-base"><span
                                class="-inset-x-4 -inset-y-6 absolute sm:-inset-x-6 sm:rounded-2xl z-20"></span><span
                                class="relative z-10">{{ __('word.ChapSina') }}</span></h2>
                    </div>
                    <p class="relative z-10 dark:text-zinc-400 mt-6 text-sm text-zinc-500">
                        {{ __('word.CD printing and burning and locking') }}</p>
                </li>
                <li class="relative flex flex-col group items-start">
                    <div class="relative z-10 bg-white dark:bg-black flex items-center justify-center rounded-full">
                        <img alt="" class="h-16 rounded-full w-16" data-nimg=future decoding=async height=64
                            loading=lazy src=/images/all-logo/07.jpg style=color:transparent width=64>
                        <h2 class="dark:text-white text-black font-semibold ml-3 text-base"><span
                                class="-inset-x-4 -inset-y-6 absolute sm:-inset-x-6 sm:rounded-2xl z-20"></span><span
                                class="relative z-10">{{ __('word.Irannaz Bano') }}</span></h2>
                    </div>
                    <p class="relative z-10 dark:text-zinc-400 mt-6 text-sm text-zinc-500">
                        {{ __('word.Selling all kinds of cosmetics with the best quality') }}</p>
                </li>
                <li class="relative flex flex-col group items-start">
                    <div class="relative z-10 bg-white dark:bg-black flex items-center justify-center rounded-full">
                        <img alt="" class="h-16 rounded-full w-16" data-nimg=future decoding=async height=64
                            loading=lazy src=/images/all-logo/06.jpg style=color:transparent width=64>
                        <h2 class="dark:text-white text-black font-semibold ml-3 text-base"><span
                                class="-inset-x-4 -inset-y-6 absolute sm:-inset-x-6 sm:rounded-2xl z-20"></span><span
                                class="relative z-10">{{ __('word.Iseokar') }}</span></h2>
                    </div>
                    <p class="relative z-10 dark:text-zinc-400 mt-6 text-sm text-zinc-500">
                        {{ __('word.Website design and SEO websites') }}
                    </p>
                </li>
                <li class="relative flex flex-col group items-start">
                    <div class="relative z-10 bg-white dark:bg-black flex items-center justify-center rounded-full">
                        <img alt="" class="h-16 rounded-full w-16" data-nimg=future decoding=async height=64
                            loading=lazy src=/images/all-logo/05.jpg style=color:transparent width=64>
                        <h2 class="dark:text-white text-black font-semibold ml-3 text-base"><span
                                class="-inset-x-4 -inset-y-6 absolute sm:-inset-x-6 sm:rounded-2xl z-20"></span><span
                                class="relative z-10">{{ __('word.Dandanesh') }}</span></h2>
                    </div>
                    <p class="relative z-10 dark:text-zinc-400 mt-6 text-sm text-zinc-500">
                        {{ __('word.A specialized center for the sale of medical dental equipment') }}
                    </p>
                </li>
                <li class="relative flex flex-col group items-start">
                    <div class="relative z-10 bg-white dark:bg-black flex items-center justify-center rounded-full">
                        <img alt="" class="h-16 rounded-full w-16" data-nimg=future decoding=async height=64
                            loading=lazy src=/images/all-logo/08.jpg style=color:transparent width=64>
                        <h2 class="dark:text-white text-black font-semibold ml-3 text-base"><span
                                class="-inset-x-4 -inset-y-6 absolute sm:-inset-x-6 sm:rounded-2xl z-20"></span><span
                                class="relative z-10">{{ __('word.Pamuk') }}</span></h2>
                    </div>
                    <p class="relative z-10 dark:text-zinc-400 mt-6 text-sm text-zinc-500">
                        {{ __('word.Selling foreign products and Amazon inside Iran') }}</p>
                </li>
            </ul>
        </div>
    </section>
</main>
</div>
</div>
</body>

</html>
