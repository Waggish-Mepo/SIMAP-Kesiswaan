<div id="rekap-absen-modal" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-2 z-50 pt-2 pb-4 justify-center items-center h-modal md:h-full md:inset-0">
    <div class="relative px-4 w-full max-w-lg h-full md:h-auto overflow-x-hidden">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex justify-end p-2">
                <h3 class="text-xl p-2 font-medium text-gray-900 dark:text-white">
                    Rekap
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="rekap-absen-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <form class="pb-4 space-y-6 lg:px-8 px-4 xl:pb-8" action="/absen/kehadiran/rekap" enctype="multipart/form-data"
                method="POST" autocomplete="off">
                @csrf
                <div class="flex">
                    <label for="foto_selfie_sim" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Awal</label>
                    <input type="date" name="awal" id="foto_selfie_sim"
                        class="ml-9 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="" required="">
                </div>
                <div class="flex">
                    <label for="foto_selfie_sim" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Akhir</label>
                    <input type="date" name="akhir" id="foto_selfie_sim"
                        class="ml-8 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="" required="">
                </div>
                <div class="flex">
                    <label for="foto_selfie_sim" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Semester</label>
                    <input type="number" name="semester" id="foto_selfie_sim"
                        class="ml-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="" required="">
                </div>
                <button type="submit"
                    class="text-white bg-blue-400 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:focus:ring-blue-900">Tambah</button>
            </form>
        </div>
    </div>
</div>
