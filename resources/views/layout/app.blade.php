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
    <div class="relative min-h-screen flex">
        @include('layout.sidebar')
        <div class="flex-1 bg-gray-200 h-full">
            @include('layout.navbar')
            <main class="pl-20 pr-8 pt-20">
                @yield('content')
            </main>
        </div>
    </div>
    @include('layout.script')
    @yield('script')
</body>
</html>
