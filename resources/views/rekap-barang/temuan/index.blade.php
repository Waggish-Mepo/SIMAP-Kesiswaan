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
                             <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="tambah-modal">+</button>  
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
                                         <th data-priority="8">Aksi</th>                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Rizky Arba</td>
                                            <td>11907345</td>
                                            <td>RPL XII-1</td>
                                            <td>2011/04/25</td>
                                            <td>Foto.png</td>
                                            <td>Keterangan</td>
                                            <td>
                                                <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="tambah-modal">hapus</button>  
                                                <button class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="tambah-modal" href="/rekap-barang/temuan/edit">edit</button>  
                                            </td>
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
<!-- Main modal -->
<div id="tambah-modal" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center h-modal md:h-full md:inset-0">
    <div class="relative px-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex justify-end p-2">
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <div class="flex justify-between items-start p-5 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 lg:text-2xl dark:text-white">
                    Input Barang Razia
                </h3>
            </div>
            <form class="px-8 pb-7 space-y-7 lg:px-8 sm:pb-6 xl:pb-8" action="#">     
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nis</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rombel</label>
                    <input type="password" name="password" id="password"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rayon</label>
                    <input type="password" name="password" id="password"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal</label>
                <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                </div>

                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Foto Barang</label>
                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Keterangan</label>
                    <input type="password" name="password" id="password"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                </div>
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                
            </form>
        </div>
    </div>
</div> 