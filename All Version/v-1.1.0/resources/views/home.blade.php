<!-- Header -->
@extends('layouts.header')
@include('layouts.sidebar')
@section('title', 'طراح و برنامه نویس وب')
@section('index', 'index,follow')
@section('lang', 'en')
@section('author', 'امیررضا حیدری')
<!-- Header -->

{{-- <div class='2xl:max-w-7xl mx-auto'>
    <div class='grid grid-cols-1 lg:grid-cols-4'>
        @include('layouts.sidebar') --}}
<main class='w-full lg:col-span-3' role=main>
    <section>
        <div class='gap-3 grid grid-cols-1 p-4'>
            <div class='rounded-xl aspect-[280/300] bg-zinc-100 filter grayscale overflow-hidden'><img alt='امیررضا حیدری'
                    class='h-full object-cover' decoding=async height=2104 loading=lazy
                    src="{{ asset('/images/landing.facc4f24_Z25SNU2.jpg') }}" width=1680></div>
        </div>
    </section>
</main>
</div>
</div>
</body>

</html>
