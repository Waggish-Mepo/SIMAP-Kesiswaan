@extends('layout.app')
@section('title', 'Rapot Karakter')

@section('content')
    <div class="content">
        <div class="w-58 bg-white rounded-lg border shadow-md sm:p-2 dark:bg-gray-800 dark:border-gray-700">
            <p class="pl-2 text-base text-gray-900 sm:text-base">Raport Karakter</p>
        </div>
        <div class="mt-8 pb-8 w-58 bg-white rounded-lg border shadow-md dark:bg-gray-800 dark:border-gray-700">

            <!-- FILTER -->
            <form class="flex px-4 pt-4 space-y-6" action="#">
                <div class="flex place-content-between">
                    <div class="flex">
                        <label for="nis" class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rombel :
                        </label>
                        <select id="rombel"
                            class="bg-zinc-100 border border-indigo-800 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-28 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected=" " disabled>Pilih Rombel</option>
                            <option>PPLG</option>
                            <option>TKJT</option>
                            <option>MPLB</option>
                        </select>

                        <select id="tingkat"
                            class="ml-2 bg-zinc-100 border border-indigo-800 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-28 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected=" " disabled>Pilih Tingkat</option>
                            <option>X</option>
                            <option>XI</option>
                            <option>XII</option>
                        </select>

                        <select id="rombel"
                            class="ml-2 bg-zinc-100 border border-indigo-800 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-28 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected=" " disabled>Pilih Kelas</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                        <button type="button" class="ml-2 text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-2 py-2.5s text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tampilkan</button>
                    </div>
                    <div class="items-center flex float-right" data-modal-toggle="input-raport-modal">
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-2xl px-4 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <i class='bx bx-plus text-white' ></i>
                        </button>
                    </div>
                </div>

            </form>

            <!-- LIST DATA RAPORT -->
            <div
                class="w-58 bg-blue-800 rounded-md border shadow-inner sm:p-2 dark:bg-gray-800 dark:border-gray-700">
                <p class="pl-2 text-sm text-white sm:text-sm">Input Raport Karakter Rombel RPL XII-2</p>
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow-md rounded-b-md">
                            <table class="min-w-full">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            No
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            NIS
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
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Gotong Royong
                                        </th>
                                        <th scope="col" class="relative py-3 px-6">
                                            <span class="sr-only">Option</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            1
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            11900000
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Siti Nur Alawiyah
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            RPL XII-2
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Ciawi 1
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            P
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm text-center text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Baik
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm text-center text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Baik
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm text-center text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Baik
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm text-center text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Baik
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm text-center text-gray-500 whitespace-nowrap dark:text-gray-400">
                                            Baik
                                        </td>
                                        <td class="float-right py-4 px-4">
                                            <a href="#" data-modal-toggle="edit-rapot-modal"
                                                class="text-blue-800 dark:text-blue-500 hover:underline"><svg
                                                    style="width:18px;height:24px" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M18.5,1.15C17.97,1.15 17.46,1.34 17.07,1.73L11.26,7.55L16.91,13.2L22.73,7.39C23.5,6.61 23.5,5.35 22.73,4.56L19.89,1.73C19.5,1.34 19,1.15 18.5,1.15M10.3,8.5L4.34,14.46C3.56,15.24 3.56,16.5 4.36,17.31C3.14,18.54 1.9,19.77 0.67,21H6.33L7.19,20.14C7.97,20.9 9.22,20.89 10,20.12L15.95,14.16" />
                                                </svg></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="inline-flex -space-x-px mt-8 float-right pr-4">
                        <li>
                            <a href="#"
                                class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#"
                                class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection


<!-- MODAL INPUT RAPOT -->
<div id="input-raport-modal" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 pt-72 pb-4 justify-center items-center h-modal md:h-full md:inset-0">
    <div class="relative px-4 w-full max-w-lg h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex justify-end p-2">
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="input-raport-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">Input Raport Karakter</h3>
                <div class="flex">
                    <label for="nis"
                        class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIS</label>
                    <input type="nis" name="nis" id="nis"
                        class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Masukkan NIS" required="">
                </div>
                <div class="flex">
                    <label for="nama"
                        class="block mt-2 mr-1 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                    <input type="nama" name="nama" id="nama"
                        class="ml-12 bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required="" disabled>
                </div>
                <div class="flex">
                    <label for="rombel"
                        class="block mt-2 mr-0.5 text-sm font-medium text-gray-900 dark:text-gray-300">Rombel</label>
                    <input type="rombel" name="rombel" id="rombel"
                        class="ml-10 bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required="" disabled>
                </div>
                <div class="flex">
                    <label for="rayon"
                        class="block mt-2 mr-1 text-sm font-medium text-gray-900 dark:text-gray-300">Rayon</label>
                    <input type="rayon" name="rayon" id="rayon"
                        class="ml-12 bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required="" disabled>
                </div>
                <div class="flex">
                    <label for="jk" class="block mt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jenis
                        Kelamin</label>
                    <input type="jk" name="jk" id="jk"
                        class="ml-6 bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required="" disabled>
                </div>
                <div class="flex">
                    <label for="date"
                        class="block mt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal</label>
                    <input type="date" name="date" id="date"
                        class="ml-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required="">
                </div>
                <div class="flex">
                    <label for="integritas"
                        class="mt-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Integritas</label>
                    <select id="integritas"
                        class="bg-gray-50 ml-8 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected=" " disabled>Pilih Nilai</option>
                        <option>Sangat Baik</option>
                        <option>Baik</option>
                        <option>Cukup</option>
                    </select>
                </div>
                <div class="flex">
                    <label for="religius"
                        class=" mt-2 mr-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Religius</label>
                    <select id="religius"
                        class="bg-gray-50 ml-10 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected=" " disabled>Pilih Nilai</option>
                        <option>Sangat Baik</option>
                        <option>Baik</option>
                        <option>Cukup</option>
                    </select>
                </div>
                <div class="flex">
                    <label for="nasionalis"
                        class="block mt-1 mr-3 text-sm font-medium text-gray-900 dark:text-gray-300">Nasionalis</label>
                    <select id="nasionalis"
                        class="bg-gray-50 ml-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected=" " disabled>Pilih Nilai</option>
                        <option>Sangat Baik</option>
                        <option>Baik</option>
                        <option>Cukup</option>
                    </select>

                </div>
                <div class="flex">
                    <label for="mandiri"
                        class="block text-sm mt-2 font-medium text-gray-900 dark:text-gray-300">Mandiri</label>
                    <select id="mandiri"
                        class="bg-gray-50 ml-12 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected=" " disabled>Pilih Nilai</option>
                        <option>Sangat Baik</option>
                        <option>Baik</option>
                        <option>Cukup</option>
                    </select>
                </div>
                <div class="flex">
                    <label for="gotongRoyong"
                        class="block text-sm mr-1 font-medium text-gray-900 dark:text-gray-300">Gotong Royong</label>
                    <select id="gotongRoyong"
                        class="bg-gray-50 ml-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option class="disabled">Pilih Nilai</option>
                        <option>Sangat Baik</option>
                        <option>Baik</option>
                        <option>Cukup</option>
                    </select>
                </div>
                <button type="submit"
                    class="w-24 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
            </form>
        </div>
    </div>
</div>

<!-- MODAL EDIT RAPOT -->
<div id="edit-rapot-modal" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 pt-72 pb-4 justify-center items-center h-modal md:h-full md:inset-0">
    <div class="relative px-4 w-full max-w-lg h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex justify-end p-2">
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="edit-rapot-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">Edit Raport Karakter</h3>
                <div class="flex">
                    <label for="nis"
                        class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIS</label>
                    <input type="nis" name="nis" id="nis"
                        class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Masukkan NIS" required="">
                </div>
                <div class="flex">
                    <label for="nama"
                        class="block mt-2 mr-1 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                    <input type="nama" name="nama" id="nama"
                        class="ml-12 bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required="" disabled>
                </div>
                <div class="flex">
                    <label for="rombel"
                        class="block mt-2 mr-0.5 text-sm font-medium text-gray-900 dark:text-gray-300">Rombel</label>
                    <input type="rombel" name="rombel" id="rombel"
                        class="ml-10 bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required="" disabled>
                </div>
                <div class="flex">
                    <label for="rayon"
                        class="block mt-2 mr-1 text-sm font-medium text-gray-900 dark:text-gray-300">Rayon</label>
                    <input type="rayon" name="rayon" id="rayon"
                        class="ml-12 bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required="" disabled>
                </div>
                <div class="flex">
                    <label for="jk" class="block mt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jenis
                        Kelamin</label>
                    <input type="jk" name="jk" id="jk"
                        class="ml-6 bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required="" disabled>
                </div>
                <div class="flex">
                    <label for="date"
                        class="block mt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal</label>
                    <input type="date" name="date" id="date"
                        class="ml-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required="">
                </div>
                <div class="flex">
                    <label for="integritas"
                        class="mt-2 block text-sm font-medium text-gray-900 dark:text-gray-300">Integritas</label>
                    <select id="integritas"
                        class="bg-gray-50 ml-8 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected=" " disabled>Pilih Nilai</option>
                        <option>Sangat Baik</option>
                        <option>Baik</option>
                        <option>Cukup</option>
                    </select>
                </div>
                <div class="flex">
                    <label for="religius"
                        class=" mt-2 mr-1 block text-sm font-medium text-gray-900 dark:text-gray-300">Religius</label>
                    <select id="religius"
                        class="bg-gray-50 ml-10 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected=" " disabled>Pilih Nilai</option>
                        <option>Sangat Baik</option>
                        <option>Baik</option>
                        <option>Cukup</option>
                    </select>
                </div>
                <div class="flex">
                    <label for="nasionalis"
                        class="block mt-1 mr-3 text-sm font-medium text-gray-900 dark:text-gray-300">Nasionalis</label>
                    <select id="nasionalis"
                        class="bg-gray-50 ml-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected=" " disabled>Pilih Nilai</option>
                        <option>Sangat Baik</option>
                        <option>Baik</option>
                        <option>Cukup</option>
                    </select>

                </div>
                <div class="flex">
                    <label for="mandiri"
                        class="block text-sm mt-2 font-medium text-gray-900 dark:text-gray-300">Mandiri</label>
                    <select id="mandiri"
                        class="bg-gray-50 ml-12 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected=" " disabled>Pilih Nilai</option>
                        <option>Sangat Baik</option>
                        <option>Baik</option>
                        <option>Cukup</option>
                    </select>
                </div>
                <div class="flex">
                    <label for="gotongRoyong"
                        class="block text-sm mr-1 font-medium text-gray-900 dark:text-gray-300">Gotong Royong</label>
                    <select id="gotongRoyong"
                        class="bg-gray-50 ml-4 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option class="disabled">Pilih Nilai</option>
                        <option>Sangat Baik</option>
                        <option>Baik</option>
                        <option>Cukup</option>
                    </select>
                </div>
                <button type="button"
                    class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Edit</button>
            </form>
        </div>
    </div>
</div>
