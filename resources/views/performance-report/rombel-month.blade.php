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
                <a href="/raport-characters-table">Tampil</a>
            </button>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-md sm:rounded-lg">
                    <table class="min-w-full">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <ul class="flex hidden rounded-lg divide-x divide-gray-200 shadow sm:flex dark:divide-gray-700">
                                <li class="w-full">
                                    <a href="#"
                                        class="inline-block relative py-4 px-4 w-full text-sm font-medium text-left text-white bg-blue-700  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 focus:ring-4 focus:ring-blue-300 focus:z-20 active dark:bg-gray-700 dark:text-white"
                                        aria-current="page">Input Raport Karakter Rombel PPLG X-1</a>
                                </li>
                            </ul>
                            <tr>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    No
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Nis
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Nama
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Rombel
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Rayon
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    JK
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Integritas
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Religius
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Nasionalis
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Mandiri
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    1
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    11907287
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    Mochammad Nabil Hakim
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    RPL XII-2
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    Rayon
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    L
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    Status
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    12
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    12
                                </td>
                                <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                    12
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <nav class="flex flex-col items-end" aria-label="Page navigation example">
                    <ul class="mt-7 mb-3 inline-flex items-end -space-x-px" id="profile" role="tabpanel"
                        aria-labelledby="profile-tab">
                        <li>
                            <a href="#"
                                class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        </li>
                        <li>
                            <a href="#"
                                class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                            <a href="#"
                                class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                        </li>
                        <li>
                            <a href="#"
                                class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        </li>
                    </ul>
            </div>
        </div>
        </nav>
    </div>



@endsection

@section('script')
    <script>
    </script>
@endsection
