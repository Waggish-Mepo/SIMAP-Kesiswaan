<div id="edit-guru-{{$d->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Edit Barang Temuan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="edit-guru-{{$d->id}}">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <form class="pb-4 space-y-6 lg:px-8 sm:p-6 xl:pb-8" action="/guru/{{$d->id}}" enctype="multipart/form-data" method="POST">
                    @method('PATCH')
                    @csrf
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">Tambah Data Guru</h3>
                    <div class="flex">
                        <label for="no_induk_yayasan"
                            class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">No Induk Yayasan</label>
                        <input type="number" name="no_induk_yayasan" id="no_induk_yayasan"
                            class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="" required="" value="{{$d->no_induk_yayasan}}">
                    </div>
                    <div class="flex">
                        <label for="nama"
                            class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="" required="" value="{{$d->nama}}">
                    </div>
                    <div class="flex">
                        <label for="email"
                            class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                        <input type="email" name="email" id="email"
                            class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="" required="" value="{{$d->email}}">
                    </div>
                    <div class="flex">
                        <label for="no_hp"
                            class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">No Telephone</label>
                        <input type="number" name="no_hp" id="no_hp"
                            class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="" required="" value="{{$d->no_hp}}">
                    </div>
                    <div class="flex">
                        <label for="jenis_kelamin" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Jenis Kelamin</label>
                        <select id="jenis_kelamin" class="form-select appearance-none transition ease-in-out ml-14 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example" name="jk">
                            <option disabled>Open this select menu</option>
                            <option value="p" {{$d->jk == 'p'?'selected':''}}>perempuan</option>
                            <option value="l" {{$d->jk == 'l'?'selected':''}}>laki - laki</option>
                        </select>
                    </div>
                    <div class="flex">
                        <label for="mata_pelajaran" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Mata Pelajaran</label>
                        <select id="mata_pelajaran" class="form-select appearance-none transition ease-in-out ml-14 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example" name="mata_pelajaran">
                            <option selected disabled>Open this select menu</option>
                            <option value="Bahasa Indonesia" {{$d->mata_pelajaran == 'Bahasa Indonesia'?'selected':''}}>Bahasa Indonesia</option>
                            <option value="Matematika"{{$d->mata_pelajaran == 'Matematika'?'selected':''}}>Matematika</option>
                            <option value="Produktif" {{$d->mata_pelajaran == 'Produktif'?'selected':''}}>Produktif</option>
                        </select>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-400 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:focus:ring-blue-900">Tambah</button>
                    <button type="button"
                    class="text-white bg-gray-400 hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:focus:ring-gray-900" data-modal-toggle="input-raport-modal">Tutup</button>
                </form>
            </div>
            <!-- Modal footer -->
        </div>
    </div>
</div>


