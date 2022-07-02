<!DOCTYPE html>
<html lang="id">
<head>
    @include('layout.head')
    <title>SIMAP Kesiswaan |
        @hasSection('title')
            @yield('title')
        @endif
    </title>
</head>
<body>
    @include('sweetalert::alert')
    <div class="relative min-h-screen flex">
        @include('layout.sidebar')
        <div class="bg-gray-200 h-auto w-screen">
            @include('layout.navbar')
            <main class="ml-20 mt-20">
                @yield('content')
            </main>
        </div>
    </div>
    @include('layout.script')
    @yield('script')
</body>
</html>
