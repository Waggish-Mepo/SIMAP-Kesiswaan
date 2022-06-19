@extends('layout.app')
@section('title', 'Dashboard')

@Section('content')
<div class="mx-4">
    <div class="grid grid-cols-4 text-center gap-4 mt-4 pb-8">
        <div class="p-6 bg-blue-500 rounded-md border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <p class="mb-3 font-bold text-white dark:text-gray-400">Data Murid</p>
            <p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">{{ $murid }}</h5>
            </p>
        </div>

        <div class="p-6 bg-green-500 rounded-md border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <p class="mb-3 font-bold text-white dark:text-gray-400">Data Guru</p>
            <p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">{{ $guru }}</h5>
            </p>
        </div>

        <div class="p-6 bg-yellow-300 rounded-md border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <p class="mb-3 font-bold text-white dark:text-gray-400">Data Pembimbing Siswa</p>
            <p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">{{ $sim }}</h5>
            </p>
        </div>

        <div class="p-6 bg-orange-400 rounded-md border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <p class="mb-3 font-bold text-white dark:text-gray-400">Data Admin</p>
            <p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">{{ $razia }}</h5>
            </p>
        </div>
    </div>
    <div class="text-center text-lg px-20 py-10">
        <p>Hari Ini</p>
    </div>
    <div class="grid grid-cols-2 gap-2">
        <div href="#" class="block text-center px-6 py-10  bg-white rounded-lg border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah Murid Izin Hari Ini</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $murid_izin }}</p>
        </div>
        <div href="#" class="block text-center px-6 py-10  bg-white rounded-lg border border-gray-200 hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jumlah Murid Sakit Hari Ini</h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">{{ $murid_sakit }}</p>
        </div>
    </div>
    {{-- <div id="container" class="relative"></div> --}}
</div>

@endsection
