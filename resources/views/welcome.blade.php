@extends('layouts.layout')
@section('content')
    <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <img src="/img/pizza-house.png" height="350px" alt="Pizza House Logo" />
            <div class="title m-b-md">
                The North's best Pizzas
            </div>
            <p class="msg">{{ session('msg') }}</p>
            <a href="{{ route('pizzas.create') }}">Order a Pizza</a>
        </div>

    </div>
@endsection
