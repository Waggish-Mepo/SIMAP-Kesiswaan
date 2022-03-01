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
        <div class="flex-1 bg-gray-200">
            @include('layout.navbar')
            
            <main class="w-11/12 mx-auto mt-4">

            <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Select your country</label>
                    <select id="tabs" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Razia</option>
                        <option>Temuan</option>
                    </select>
                </div>
                <ul class="flex hidden rounded-lg divide-x divide-gray-200 shadow sm:flex dark:divide-gray-700">
                    <li class="w-full">
                        <a href="/rekap-barang/razia" class="inline-block relative py-4 px-4 w-full text-sm font-medium text-center text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 focus:z-20 active dark:bg-gray-700 dark:text-white" aria-current="page">Daftar Rekap Barang Razia</a>
                    </li>
                    <li class="w-full">
                        <a href="/rekap-barang/temuan" class="inline-block relative py-4 px-4 w-full text-sm font-medium text-center text-gray-500 bg-white hover:text-gray-700 hover:bg-gray-50 focus:ring-4 focus:ring-blue-300 focus:z-20 dark:text-gray-400 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">Daftar Rekap Barang Temuan</a>
                    </li>
                </ul>
                <br>

                    <div class="flex flex-col">
                        <div class="overflow-x-auto shadow-md sm:rounded-lg">
                            <div class="inline-block min-w-full align-middle dark:bg-gray-800">
                              <!--Card-->
                            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                                    <thead>
                                        <tr>
                                            <th data-priority="1">No</th>
                                            <th data-priority="2">Nama</th>
                                            <th data-priority="3">Nis</th>
                                            <th data-priority="4">Rombel</th>
                                            <th data-priority="5">Tanggal</th>
                                            <th data-priority="6">Foto Barang</th>
                                            <th data-priority="7">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Arba</td>
                                            <td>11907345</td>
                                            <td>RPL XII-1</td>
                                            <td>2011/04/25</td>
                                            <td>Foto.png</td>
                                            <td>Keterangan</td>
                                        </tr>
                                        <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
                                    </tbody>
                                </table>
                            </div>
                            <!--/Card-->
                        </div>
                    </div>
            </main>
        </div>
    </div>
    @include('layout.script')
    @yield('script')
</body>
</html>
