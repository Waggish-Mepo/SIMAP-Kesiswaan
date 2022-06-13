<div id="modal-create-murid" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-3xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Tambah Murid
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modal-create-murid">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <form action="{{ route('murid.store') }}" method="POST" enctype="multipart/form-data" autocomplete="off" >
                    @csrf
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <div class="mb-3">
                                <label for="tgl" class="block text-sm font-medium text-gray-900 dark:text-gray-300">NIS</label>
                                <input type="text" name="nis" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 z-10">
                            </div>
        
                            <div class="mb-3">
                                <label for="tgl" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                                <input type="text" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 z-10">
                            </div>
        
                            <div class="mb-3">
                                <label for="tgl" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                                <input type="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 z-10">
                            </div>
        
                            <div class="mb-3">
                                <label for="tgl" class="block text-sm font-medium text-gray-900 dark:text-gray-300">No. Handphone</label>
                                <input type="number" name="no_hp" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 z-10">
                            </div>
        
                            <div class="mb-3">
                                <label for="tgl" class="block text-sm font-medium text-gray-900 dark:text-gray-300">NIK</label>
                                <input type="number" name="nik" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 z-10">
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <label for="tgl" class="block text-sm font-medium text-gray-900 dark:text-gray-300">NISN</label>
                                <input type="number" name="nisn" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 z-10">
                            </div>
        
                            <div class="mb-3">
                                <label for="tgl" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Rombel</label>
                                <select name="rombel" class="form-select bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 z-10">
                                    <option selected disabled>Open this select menu</option>
                                    @foreach ($rombel as $item => $value)
                                        <option value="{{$value->id}}">{{$value->rombel}} | {{$value->Batch->angkatan}}</option>
                                    @endforeach
                                </select>
                            </div>
        
                            <div class="mb-3">
                                <label for="tgl" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Rayon</label>
                                <select name="rayon" class="form-select bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 z-10">
                                    <option selected disabled>Open this select menu</option>
                                    @foreach ($rayon as $item => $value)
                                        <option value="{{$value->id}}">{{$value->rayon}}</option>
                                    @endforeach
                                </select>
                            </div>
        
                            <div class="mb-3">
                                <label for="tgl" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Jenis Kelamin</label>
                                <div class="flex p-2">
                                    <div class="flex items-center mr-4">
                                        <input id="l" type="radio" value="l" name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="l" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
                                    </div>
                                    <div class="flex items-center mr-4">
                                        <input id="p" type="radio" value="p" name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="p" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>
                </form>
            </div>
            <!-- Modal footer -->
        </div>
    </div>
</div>


