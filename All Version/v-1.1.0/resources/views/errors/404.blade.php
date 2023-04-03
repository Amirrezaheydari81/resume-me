<!-- Header -->
@extends('layouts.header')
@section('title', 'محتوای موردنظر یافت نشد')
@section('index', 'noindex,nofollow')
@section('lang', 'en')
@section('author', 'امیررضا حیدری')
<!-- Header -->

<link href="{{ asset('404.cd536510.css') }}" rel=stylesheet />
<div class="flex items-center justify-center bg-black h-screen w-screen">
    <div class="lg:py-12 px-4">
        <div class="lg:flex lg:gap-4">
            <div class="flex items-center justify-center flex-col lg:py-32 md:py-24">
                <h1 class="font-bold text-9xl text-yellow-400">404</h1>
                <p class="font-bold mb-2 md:text-3xl text-2xl text-center text-white"><span
                        class=text-yellow-400>Oops!</span> Page not found</p>
                <p class="text-center mb-8 md:text-lg text-gray-200">The page you requested was not found.</p><a
                    class="bg-yellow-500 font-semibold px-6 py-2 rounded-md text-sm text-yellow-700" href= />Go home</a>
            </div>
        </div>
    </div>
</div>
