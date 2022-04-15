<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

	<!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Salut') }}
                </h2>
            </x-slot>

            <!-- Page Content -->
            <main>

            </main>
        </div>
    </body>
</html>















<div class="col-lg-4 text-center">
  <img class="rounded-circle" style="
  min-width: 140px;
  min-height: 140px;
  background-size: cover;
  background-repeat: no-repeat;
  " width="140" height="140" src="/assets/img/pexels-brett-sayles-2881233.jpg">
<br>
  <h2>Heading</h2>
  <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
  <p><a class="btn btn-secondary" href="#">View details »</a></p>
</div>
