
<div id="edit-rombel-{{ $d->id }}" tabindex="-1" class="hidden text-left overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Tambah Rayon
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="edit-rombel-{{ $d->id }}">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
                <form action="{{ route('rombel.update', $d->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off" >
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Rombel</label>
                        <input type="text" value="{{ $d->rombel }}" name="rombel" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 z-10" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Kompetensi</label>
                        <select name="kompetensi" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="">
                            <option selected disabled>Kompetensi</option>
                            <option value="RPL" {{ $d->kompetensi == 'RPL' ? 'selected':'' }}>RPL</option>
                            <option value="MMD" {{ $d->kompetensi == 'MMD' ? 'selected':'' }}>MMD</option>
                            <option value="TKJ" {{ $d->kompetensi == 'TKJ' ? 'selected':'' }}>TKJ</option>
                            <option value="BDP" {{ $d->kompetensi == 'BDP' ? 'selected':'' }}>BDP</option>
                            <option value="OTKP"{{ $d->kompetensi == 'OTKP' ? 'selected':'' }}>OTKP</option>
                            <option value="TBG" {{ $d->kompetensi == 'TBG' ? 'selected':'' }}>TBG</option>
                            <option value="HTL" {{ $d->kompetensi == 'HTL' ? 'selected':'' }}>HTL</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Angkatan</label>
                        <select name="angkatan_id" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="">
                            <option selected disabled>Angkatan</option>
                            @foreach ($angkatan as $d)
                                <option value="{{ $d->id }}" {{ $d->id == $d->id ? 'selected':'' }}>{{$d->angkatan}}</option>
                            @endforeach
                        </select>
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


