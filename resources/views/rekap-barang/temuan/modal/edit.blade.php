<div id="modal-edit-temuan-{{ $d->id }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Edit Barang Temuan
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="modal-edit-temuan-{{ $d->id }}">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <form action="{{ route('temuan.update', $d->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off" >
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="nis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Penemu</label>
                        <input type="text" value="{{ $d->penemu }}" name="penemu" id="nis" list="Penemu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        <datalist id="Penemu">
                            @foreach ($student_nis as $sn)
                                <option value="{{$sn->nis}}">{{$sn->nis }}</option>
                            @endforeach
                          </datalist>
                    </div>

                    <div class="grid grid-cols-2 gap-2 mb-3">
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{ $d->Penemu->nama }}" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" readonly>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rombel</label>
                            <input type="text" name="rombel" id="rombel" value="{{ $d->Penemu->Rombel->rombel }}" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" readonly>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="tgl" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal</label>
                        <input type="date" name="tgl" id="tgl" value="{{ $d->tgl }}" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 z-10" placeholder="Select date">
                    </div>

                    <div class="mb-3">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Foto Barang</label>
                        <input type="file" id="foto_barang" name="foto_barang" value="" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                    </div>

                    <div class="mb-3">
                        <label for="nis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pemilik</label>
                        <input type="text" name="pemilik" value="{{ $d->pemilik }}" id="pemilik" list="Pemilik" placeholder="Lewat jika belum ditemukan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        <datalist id="Pemilik">
                            @foreach ($student_nis as $sn)
                                <option value="{{$sn->nis}}">{{$sn->nis }}</option>
                            @endforeach
                          </datalist>
                    </div>

                    <div class="mb-3">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Keterangan</label>
                        <textarea id="message" name="ket"  rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Keterangan...">{{ $d->ket }}</textarea>
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


