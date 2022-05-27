@extends('layout.app')
@section('title', 'Input Sim')

@section('content')
    <div class="mx-8">
        <div class="w-58 bg-white rounded-lg border shadow-md sm:p-2 dark:bg-gray-800 dark:border-gray-700">
            <p class="pl-2 text-base text-gray-900 sm:text-base">Data Siswa yang Memiliki SIM</p>
        </div>
        <div
            class="pt-4 mt-4 pb-8 w-58 bg-white rounded-lg border shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="items-center flex p-4 float-right" data-modal-toggle="input-raport-modal">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-2xl px-4 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >
                    <i class='bx bx-plus text-white' ></i>
                </button>
            </div>

            <!-- SEARCH -->
            {{-- <div class="float-right p-2">
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="table-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search">
                </div>
            </div> --}}
            <!-- TABLE -->
            <div class="flex flex-col mt-16">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden px-8 sm:rounded-lg">
                            <table class="min-w-full" id='example'>
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
                                            Foto dengan SIM
                                        </th>
                                        <th scope="col" class="relative py-3 px-6">
                                            <span class="sr-only">Option</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($sim as $key => $v)
                                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$loop->index+1}}
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{$v->nis}}
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{$v->Murid->nama}}
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{$v->Murid->Rombel->rombel}}
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{$v->Murid->Rayon->rayon}}
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{$v->Murid->jenis_kelamin}}
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        <img src="{{$v->file_endpoint}}" alt="" srcset="" width="100">
                                        {{-- {{$v->file_endpoint}} --}}
                                    </td>
                                    <td class="py-4 px-2 flex">
                                       <form action="">
                                          <button
                                          class="block text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm ml-8 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                          type="button" data-modal-toggle="edit-sim-{{$v->id}}"
                                          ><i class='bx bx-edit'></i></button>
                                       </form>
                                        <div id="edit-sim-{{$v->id}}" aria-hidden="true"
                                            class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-2 z-50 pt-2 pb-4 justify-center items-center h-modal md:h-full md:inset-0">
                                            <div class="relative px-4 w-full max-w-lg h-full md:h-auto overflow-x-hidden">
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <div class="flex justify-end p-2">
                                                        <button type="button"
                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                            data-modal-toggle="edit-sim-{{$v->id}}">
                                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <form class="pb-4 space-y-6 lg:px-8 sm:p-6 xl:pb-8" action="/sim/edit/{{$v->id}}" enctype="multipart/form-data" method="POST">
                                                        @method('PATCH');
                                                        @csrf
                                                        <h3 class="text-xl font-medium text-gray-900 dark:text-white">Edit Data SIM</h3>
                                                        <div class="flex">
                                                            <label for="nis"
                                                                class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIS</label>
                                                            <input type="nis" name="nis" id="nis"
                                                                class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                                placeholder="" required="" value="{{$v->nis}}">
                                                        </div>
                                                        {{-- <div class="flex">
                                                            <label for="date"
                                                                class="block mt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal</label>
                                                            <input type="date" name="date" id="date"
                                                                class="ml-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                                required="">
                                                        </div> --}}
                                                        <div class="flex">
                                                            <label for="foto_selfie_sim" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Foto dengan
                                                                SIM</label>
                                                            <input type="file" name="foto_selfie_sim" id="foto_selfie_sim"
                                                                class="ml-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                                placeholder="{{$v->filename}}" required="">
                                                        </div>
                                                        <button type="submit"
                                                            class="text-white bg-blue-400 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:focus:ring-blue-900">Edit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    <form action="/sim/delete/{{$v->id}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button
                                        class="block text-white bg-red-600 hover:bg-red-700 focus:ring-blue-300 ml-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="submit" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')" ><i class='bx bx-trash' ></i></button>
                                    </form>
                                    </td>
                                </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- <nav aria-label="Page navigation example">
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
                </nav> --}}
            </div>
        </div>
    </div>
@endsection
{{--
<div id="input-raport-modal" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 pt-72 pb-4 justify-center items-center h-modal md:h-full md:inset-0">
    <div class="relative px-4 w-full max-w-lg h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex justify-end p-2">
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="input-sim-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">Input SIM</h3>
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
                    <label for="foto_selfie_sim" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Foto dengan
                        SIM</label>
                    <input type="file" name="foto_selfie_sim" id="foto_selfie_sim"
                        class="ml-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="" required="">
                </div>
                <button type="submit"
                    class="w-24 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
            </form>
        </div>
    </div>
</div>

<div id="edit-sim-{{$v->id}}-modal" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center h-modal md:h-full md:inset-0">
    <div class="relative px-4 w-full max-w-lg h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex justify-end p-2">
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="edit-sim-{{$v->id}}-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8" action="#">
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">Edit SIM</h3>
                <div class="flex">
                    <label for="nis"
                        class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIS</label>
                    <input type="nis" name="nis" id="nis"
                        class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="" required="">
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
                    <label for="foto_selfie_sim" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Foto dengan
                        SIM</label>
                    <input type="file" name="foto_selfie_sim" id="foto_selfie_sim"
                        class="ml-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="" required="">
                </div>
                <button type="button"
                    class="text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:focus:ring-yellow-900">Edit</button>
            </form>
        </div>
    </div>
</div>

<div class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center md:inset-0 h-modal sm:h-full"
    id="hapus-modal" aria-hidden="true">
    <div class="relative px-4 w-full max-w-md h-full md:h-auto">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex justify-end p-2">
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="hapus-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="p-6 pt-0 text-center">
                <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 dark:text-gray-200" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Yakin Ingin Menghapus Data SIM?
                </h3>
                <button data-modal-toggle="popup-modal" type="button"
                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                    Hapus
                </button>
                <button data-modal-toggle="hapus-modal" type="button"
                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600">Batal</button>
            </div>
        </div>
    </div>
</div> --}}


<!-- MODAL INPUT RAPOT -->
<div id="input-raport-modal" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-2 z-50 pt-2 pb-4 justify-center items-center h-modal md:h-full md:inset-0">
    <div class="relative px-4 w-full max-w-lg h-full md:h-auto overflow-x-hidden">
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
            <form class="pb-4 space-y-6 lg:px-8 sm:p-6 xl:pb-8" action="/sim/submit" enctype="multipart/form-data" method="POST" autocomplete="off">
                @csrf
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">Tambah Data SIM</h3>
                <div class="flex">
                    <label for="nis"
                        class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIS</label>
                    <input type="number" name="nis" id="nis" list="NIS"
                        class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="" required="">
                        <datalist id="NIS">
                            @foreach ($student_nis as $sn)
                                <option value="{{$sn->nis}}">{{$sn->nis }}</option>
                            @endforeach
                        </datalist>
                </div>
                {{-- <div class="flex">
                    <label for="date"
                        class="block mt-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal</label>
                    <input type="date" name="date" id="date"
                        class="ml-10 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        required="">
                </div> --}}
                <div class="flex">
                    <label for="foto_selfie_sim" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Foto dengan
                        SIM</label>
                    <input type="file" name="foto_selfie_sim" id="foto_selfie_sim"
                        class="ml-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="" required="">
                </div>
                <button type="submit"
                    class="text-white bg-blue-400 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:focus:ring-blue-900">Tambah</button>
            </form>
        </div>
    </div>
</div>
