@extends('layout.app')
@section('title', 'Input Sim')

@section('content')
    <div class="ml-8 mr-4">
        <div class="w-58 bg-white rounded-lg border shadow-md sm:p-2 dark:bg-gray-800 dark:border-gray-700">
            <p class="pl-2 text-base text-gray-900 sm:text-base">Data Siswa Yang Memiliki SIM</p>
        </div>
        <div class="pt-4 mt-4 pb-8 w-58 bg-white rounded-lg border shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="items-center flex p-4 float-right mr-4" data-modal-toggle="input-raport-modal">
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-2xl px-4 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <i class='bx bx-plus text-white'></i>
                </button>
            </div>

            <!-- TABLE -->
            <div class="flex flex-col mt-16">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden px-8 sm:rounded-lg">
                            <table class="table table-striped min-w-full" id='example'>
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
                                        <th scope="col"
                                            class="py-3 px-6 m-auto text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sim as $key => $v)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $loop->index + 1 }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $v->nis }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $v->Murid->nama }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $v->Murid->Rombel->rombel }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $v->Murid->Rayon->rayon }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                {{ $v->Murid->jenis_kelamin }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                                <img src="{{ $v->file_endpoint }}" alt="" srcset="" width="100">
                                                {{-- {{$v->file_endpoint}} --}}
                                            </td>
                                            <td class="py-4 px-2 flex">
                                                <form action="">
                                                    <button
                                                        class="block text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm ml-8 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                        type="button" data-modal-toggle="edit-sim-{{ $v->id }}"><i
                                                            class='bx bx-edit'></i></button>
                                                </form>
                                                <div id="edit-sim-{{ $v->id }}" aria-hidden="true"
                                                    class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-2 z-50 pt-2 pb-4 justify-center items-center h-modal md:h-full md:inset-0">
                                                    <div
                                                        class="relative px-4 w-full max-w-lg h-full md:h-auto overflow-x-hidden">
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                            <div class="flex justify-end p-2">
                                                                <button type="button"
                                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                                    data-modal-toggle="edit-sim-{{ $v->id }}">
                                                                    <svg class="w-5 h-5" fill="currentColor"
                                                                        viewBox="0 0 20 20"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                            clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <form class="pb-4 space-y-6 lg:px-8 sm:p-6 xl:pb-8"
                                                                action="/sim/edit/{{ $v->id }}"
                                                                enctype="multipart/form-data" method="POST" autocomplete="off">
                                                                @method('PATCH');
                                                                @csrf
                                                                <h3
                                                                    class="text-xl font-medium text-gray-900 dark:text-white">
                                                                    Edit Data SIM</h3>
                                                                <div class="flex">
                                                                    <label for="nis"
                                                                        class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIS</label>
                                                                    {{-- <input type="nis" name="nis" id="nis"
                                                                        class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                                        placeholder="" required=""
                                                                        value="{{ $v->nis }}"> --}}
                                                                        <input type="number" name="nis" id="nis" list="NIS"
                                                                            class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                                            placeholder="" required="" value="{{ $v->nis }}">
                                                                        <datalist id="NIS">
                                                                            @foreach ($student_nis as $sn)
                                                                                <option value="{{ $sn->nis }}">{{ $sn->nis }}</option>
                                                                            @endforeach
                                                                        </datalist>
                                                                </div>
                                                                <div class="flex">
                                                                    <label for="foto_selfie_sim"
                                                                        class="block text-sm font-medium text-gray-900 dark:text-gray-300">Foto
                                                                        dengan
                                                                        SIM</label>
                                                                    <input type="file" name="foto_selfie_sim"
                                                                        id="foto_selfie_sim"
                                                                        class="ml-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                                        placeholder="{{ $v->filename }}">
                                                                </div>
                                                                <button type="submit"
                                                                    class="text-white bg-blue-400 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:focus:ring-blue-900">Edit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <form action="/sim/delete/{{ $v->id }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button
                                                        class="block text-white bg-red-600 hover:bg-red-700 focus:ring-blue-300 ml-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                        type="submit"
                                                        onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i
                                                            class='bx bx-trash'></i></button>
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
            <form class="pb-4 space-y-6 lg:px-8 sm:p-6 xl:pb-8" action="/sim/submit" enctype="multipart/form-data"
                method="POST" autocomplete="off">
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
                            <option value="{{ $sn->nis }}">{{ $sn->nis }}</option>
                        @endforeach
                    </datalist>
                </div>
                <div class="flex">
                    <label for="foto_selfie_sim" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Foto
                        dengan
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
