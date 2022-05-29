<body>
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
                            class="block text-sm mr-1 font-medium text-gray-900 dark:text-gray-300">Gotong
                            Royong</label>
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
</body>
