@extends('layout.app')
@section('title', 'Dashboard')

@Section('content')
<div class="mx-4">
    <p class="text-2xl font-mono mb-4">Dashboard</p>
    <div class="text-center my-4 px-44 py-20 rounded-lg opacity-80 grid grid-cols-3 shadow-2xl bg-white">
        <img class="m-auto w-40" src="{{ asset('image/trophy.png') }}" alt="">
        <p class="text-4xl mt-6 font-mono opacity-100" style="font-family:">Selamat Datang {{auth()->user()->username}}</p>
        <img class="m-auto w-40" src="{{ asset('image/school.png') }}" alt="">
    </div>
    <div class="grid grid-cols-4 text-center gap-4 mt-4 pb-8">
        <div class="grid grid-cols-2 p-6 bg-blue-500 rounded-md">
            <img src="{{ asset('image/student (1).png') }}" alt="">
            <div class="font-mono mt-8">
                <p class="mb-3 font-bold text-white dark:text-gray-400">Data Murid</p>
                <p>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">{{ $murid }}</h5>
                </p>
            </div>
        </div>

        <div class="grid grid-cols-2 p-6 bg-green-500 rounded-md">
            <img src="{{ asset('image/teacher.png') }}" alt="">
            <div class="font-mono mt-8">
                <p class="mb-3 font-bold text-white dark:text-gray-400">Data Guru</p>
                <p>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">{{ $guru }}</h5>
                </p>
            </div>
        </div>

        <div class="grid grid-cols-2 p-6 bg-yellow-300 rounded-md">
            <img src="{{ asset('image/teacher (1).png') }}" alt="">
            <div class="font-mono mt-8">
                <p class="mb-3 font-bold text-white dark:text-gray-400">Data Pembimbing Siswa</p>
                <p>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">{{ $sim }}</h5>
                </p>
            </div>
        </div>

        <div class="grid grid-cols-2 p-6 bg-orange-400 rounded-md">
            <img src="{{ asset('image/teamwork.png') }}" alt="">
            <div class="font-mono mt-8">
                <p class="mb-3 font-bold text-white dark:text-gray-400">Data Admin</p>
                <p>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">{{ $razia }}</h5>
                </p>
            </div>
        </div>
    </div>
    {{-- <div class="grid grid-cols-2 gap-2 bg-gray-500 p-4 rounded-lg">
        <div href="#" class="block text-center px-6 py-10  bg-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah Murid Izin Hari Ini</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $murid_izin }}</p>
        </div>
        <div href="#" class="block text-center px-6 py-10  bg-white rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah Murid Sakit Hari Ini</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $murid_sakit }}</p>
        </div>
    </div> --}}
    {{-- <div id="container" class="relative"></div> --}}
</div>

@endsection
