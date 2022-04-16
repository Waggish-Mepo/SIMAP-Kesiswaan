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
        <div class="flex-1 bg-gray-200 h-screen">
            @include('layout.navbar')
            <main class="ml-24 mt-16">
                @yield('content')
            </main>
        </div>
    </div>
    @include('layout.script')
    @yield('script')
</body>
</html>
