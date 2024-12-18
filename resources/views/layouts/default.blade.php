<!DOCTYPE html>

<html data-theme="pastel" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta charset="UTF-8">
<title>{{ config('app.name', 'Laravel') }}</title>
<meta name="viewport" content="width=device-width,initial-scale=1">

<head>
    @vite('resources/css/app.css')
</head>


<body class="mx-auto">
    {{-- INCLUDES FOR COMPONENTS --}}
    @include('components.header')

    <main class="bg-base-100 py-6 px-[10%]">
        {{-- YIELD FOR CONTENT --}}
        @yield('content')
    </main>

    @include('components.footer')
</body>

</html>
