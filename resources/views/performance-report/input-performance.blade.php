@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
        <ul class="flex hidden rounded-lg divide-x divide-gray-200 shadow sm:flex dark:divide-gray-700" id="myTab"
            data-tabs-toggle="#myTabContent" role="tablist">
            <li class="w-full" role="presentation">
                <button
                    class="inline-block relative py-4 px-4 w-full text-sm font-medium text-left text-gray-900 bg-gray-100 rounded-l-lg focus:ring-4 focus:ring-blue-300 focus:z-20 act  ive dark:bg-gray-700 dark:text-white"
                    id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                    aria-selected="false">Input Kinerja Siswa</button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class="" id="dashboard" role="tabpanel" aria-labelledby="dasboard-tab">
            <form>
                <div class="mb-6 flex">
                    <label for="nis"
                        class="p-2.5 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIS</label>
                    <input type="text" id="nis"
                        class="ml-12 first-letter:bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@flowbite.com" required="">
                </div>
                <div class="flex">
                    <label for="nama" class="p-2.5 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Nama</label>
                    <input type="text" id="nama"
                        class="ml-7 flex mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-500 dark:text-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="" disabled>
                </div>
                <div class="flex">
                    <label for="rombel" class="p-2.5 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Rombel</label>
                    <input type="text" id="rombel"
                        class="mb-6 ml-4 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-500 dark:text-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="" disabled>
                </div>
                <div class=" flex">
                    <label for="rayon" class="p-2.5 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Rayon</label>
                    <input type="text" id="rayon"
                        class="ml-6 mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-500 dark:text-gray-500 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="" disabled>
                </div>
                <div class="mb-6 flex">
                    <label for="kelompok" class="p-2.5 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Kelompok</label>
                    <select id="kelompok"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled selected value> -- select an option -- </option>
                        <option>United States</option>
                        <option>Canada</option>
                        <option>France</option>
                        <option>Germany</option>
                    </select>
                </div>
                <div class="mb-6 flex">
                    <label for="kinerja" class="p-2.5 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Kinerja</label>
                    <select id="kinerja"
                        class="ml-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled selected value> -- select an option -- </option>
                        <option>United States</option>
                        <option>Canada</option>
                        <option>France</option>
                        <option>Germany</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden shadow-md sm:rounded-lg">
                                <table class="min-w-full">
                                    <thead class="bg-gray-50 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Tanggal Kejadian
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Color
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                Category
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Apple MacBook Pro 17"
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Sliver
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                Laptop
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="mt-3 mb-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                <button type="submit"
                    class="mt-3 mb-5 text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Reset</button>
            </form>
        </div>

    </div>


@endsection

@section('script')
    <script>
    </script>
@endsection
