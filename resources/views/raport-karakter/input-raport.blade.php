@extends('layout.app')
@section('title', 'Rapot Karakter')

@section('content')
    <div class="content">
        <div class="ml-10 mr-4 bg-white rounded-lg border shadow-md sm:p-2 dark:bg-gray-800 dark:border-gray-700">
            <p class="pl-2 text-base text-gray-900 sm:text-base">Raport Karakter</p>
        </div>
        <div class="mt-4 pb-8 ml-10 mr-4 bg-white rounded-lg border shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col">
                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="inline-block min-w-full align-middle dark:bg-gray-800 m-4">
                        <div class="flex place-content-between">
                            <div class="items-center flex float-right" data-modal-toggle="input-raport-modal">
                                <button type="button"
                                    class="float-right text-white bg-green-500 hover:bg-green-600 font-medium rounded-md text-base px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <i class='bx bxs-file-import'></i> Import
                                </button>
                            </div>
                        </div>
                        <table id="example" class="stripe hover text-sm"
                            style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                            <thead>
                                <tr>
                                    <th data-priority="1">No</th>
                                    <th data-priority="2">Nis</th>
                                    <th data-priority="3">Nama</th>
                                    <th data-priority="4">F</th>
                                    <th data-priority="5">Pemilik</th>
                                    <th data-priority="6">Keterangan</th>
                                    <th data-priority="7">Status</th>
                                    <th data-priority="8">Aksi</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                @foreach ($data as $d)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $d->Penemu->nama }}</td>
                                        <td class="text-center">{{ $d->tgl }}</td>
                                        <td class="text-center">
                                            <img style="width: 100px" src="{{ asset('images/barangTemuan/' . $d->foto_barang) }}"
                                                alt="">
                                        </td class="text-center">
                                        <td>
                                            @if ($d->pemilik == null)
                                                <span
                                                    class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Belum
                                                    ditemukan</span>
                                            @else
                                                {{ $d->Pemilik->nama }}
                                            @endif
                                        </td>
                                        <td class="text-center">{{ $d->ket }}</td>
                                        <td class="text-center">
                                            @if ($d->status == 0)
                                                <span
                                                    class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Belum
                                                    diambil</span>
                                            @else
                                                <span
                                                    class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Sudah
                                                    diambil</span>
                                            @endif
                                        </td>
                                        <td class="grid grid-cols-2">
                                            <button type="button" data-modal-toggle="modal-edit-temuan-{{ $d->id }}"
                                                class="focus:outline-none bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:focus:ring-yellow-900"><i
                                                    class="fa-solid fa-pen-to-square"></i></button>
                                            @include('rekap-barang.temuan.modal.edit')
                                            <button type="button" data-modal-toggle="modal-delete-temuan-{{ $d->id }}"
                                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                            @include('rekap-barang.temuan.modal.delete')
                                            @if ($d->status == 0)
                                                <form action="{{ route('temuan.ambil', $d->id) }}" method="POST"
                                                    class="col-span-2">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit"
                                                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Ambil</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
