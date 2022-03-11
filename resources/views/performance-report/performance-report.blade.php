@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex rounded-lg divide-x divide-gray-200 shadow sm:flex dark:divide-gray-700" id="myTa"
            data-tabs-toggle="#myTabContent" role="tablist">
            <li class="w-full" role="presentation">
                <button
                    class="inline-block relative py-4 px-4 w-full text-sm font-medium text-center text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 focus:z-20 active dark:bg-gray-700 dark:text-white"
                    id="rombel-month-tab" data-tabs-target="#rombel-month" type="button" role="tab"
                    aria-controls="rombel-month" aria-selected="false">Per-Rombel (Bulan)</button>
            </li>
            <li class="w-full" role="presentation">
                <button
                    class="inline-block relative py-4 px-4 w-full text-sm font-medium text-center text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 focus:z-20 active dark:bg-gray-700 dark:text-white"
                    id="second-warning" data-tabs-target="#rombel-semester" type="button" role="tab"
                    aria-controls="rombel-semester" aria-selected="true">Per-Rombel (Semester)</button>
            </li>
            <li class="w-full" role="presentation">
                <button
                    class="inline-block relative py-4 px-4 w-full text-sm font-medium text-center text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 focus:z-20 active dark:bg-gray-700 dark:text-white"
                    id="first-warning" data-tabs-target="#rombel-all" type="button" role="tab" aria-controls="rombel-all"
                    aria-selected="false">Per-Rombel (Semuanya)</button>
            </li>
            <li class="w-full" role="presentation">
                <button
                    class="inline-block relative py-4 px-4 w-full text-sm font-medium text-center text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 focus:z-20 active dark:bg-gray-700 dark:text-white"
                    id="first-warning" data-tabs-target="#rayon-month" type="button" role="tab" aria-controls="rayon-month"
                    aria-selected="false">Per-Rayon (Bulan)</button>
            </li>
            <li class="w-full" role="presentation">
                <button
                    class="inline-block relative py-4 px-4 w-full text-sm font-medium text-center text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 focus:z-20 active dark:bg-gray-700 dark:text-white"
                    id="first-warning" data-tabs-target="#rayon-semester" type="button" role="tab"
                    aria-controls="rayon-semester" aria-selected="false">Per-Rayon (Semester)</button>
            </li>
            <li class="w-full" role="presentation">
                <button
                    class="inline-block relative py-4 px-4 w-full text-sm font-medium text-center text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 focus:z-20 active dark:bg-gray-700 dark:text-white"
                    id="first-warning" data-tabs-target="#rayon-all" type="button" role="tab" aria-controls="rayon-all"
                    aria-selected="false">Per-Rayon (Semuanya)</button>
            </li>
            <li class="w-full" role="presentation">
                <button
                    class="inline-block relative py-4 px-4 w-full text-sm font-medium text-center text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 focus:z-20 active dark:bg-gray-700 dark:text-white"
                    id="first-warning" data-tabs-target="#report" type="button" role="tab" aria-controls="report"
                    aria-selected="false">Laporan Peristiwa Siswa</button>
            </li>
            <li class="w-full" role="presentation">
                <button
                    class="inline-block relative py-4 px-4 w-full text-sm font-medium text-center text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 focus:z-20 active dark:bg-gray-700 dark:text-white"
                    id="first-warning" data-tabs-target="#reason-report" type="button" role="tab"
                    aria-controls="reason-report" aria-selected="false">Laporan Alasan Peristiwa</button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class="flex" id="rombel-month" role="tabpanel" aria-labelledby="rombel-month-tab">
            <label for="countries" class="block p-2.5">
                Rayon:</label>
            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-44 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>Januari</option>
                <option>Februari</option>
                <option>Maret</option>
                <option>April</option>
                <option>Mei</option>
                <option>Juni</option>
                <option>Juli</option>
                <option>Agustus</option>
                <option>September</option>
                <option>November</option>
                <option>Desember</option>
            </select>
            <label for="countries" class="block p-2.5">
                Tahun:</label>
            <div class="relative">
                <input datepicker type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Select date">
            </div>
            <label for="countries" class="block p-2.5">
                Rayon:</label>
            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-36 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>PPLG</option>
                <option>TKJT</option>
                <option>MPLB</option>
                <option>KLN</option>
                <option>PMN</option>
                <option>DKV</option>
                <option>HTL</option>
                <option>RPL</option>
                <option>TKJ</option>
                <option>OTKP</option>
                <option>BDP</option>
                <option>TBG</option>
            </select>
            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-20 ml-2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>PPLG</option>
                <option>TKJT</option>
                <option>MPLB</option>
                <option>KLN</option>
                <option>PMN</option>
                <option>DKV</option>
                <option>HTL</option>
                <option>RPL</option>
                <option>TKJ</option>
                <option>OTKP</option>
                <option>BDP</option>
                <option>TBG</option>
            </select>
            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-20 p-2.5 ml-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>PPLG</option>
                <option>TKJT</option>
                <option>MPLB</option>
                <option>KLN</option>
                <option>PMN</option>
                <option>DKV</option>
                <option>HTL</option>
                <option>RPL</option>
                <option>TKJ</option>
                <option>OTKP</option>
                <option>BDP</option>
                <option>TBG</option>
            </select>
            <button type="button"
            class="flex text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 ml-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <a href="/rombel-month">Tampil</a>
        </button>
        </div>
    </div>



    @endsection

    @section('script')
        <script>
        </script>
    @endsection
