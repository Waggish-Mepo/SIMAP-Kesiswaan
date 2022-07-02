@extends('layout.app')

@section('title', 'Data Murid')

@Section('content')
    @include('master-data.murid.modal.create')
    <div class="flex flex-col ml-10 mr-12">
        <div class="font-mono flex mb-4">
            <a href="/dashboard" class="text-lg pt-1 opacity-60">Dashboard</a>
            <i class='bx bx-chevrons-right p-2'></i>
            <p class="text-lg pt-1">Data Murid</p>
        </div>
        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <div class="inline-block min-w-full align-middle dark:bg-gray-800">
                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white px-6">
                    <div class="flex">
                        <button
                            class="block mb-6 mr-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="modal-create-murid"><i class="fa-solid fa-plus"></i>
                            Tambah</button>
                        @include('master-data.murid.modal.import')
                        {{-- <button
                            class="block mb-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="import-file-modal"><i
                                class='bx bxs-file-import text-white'></i>
                            Import</button> --}}
                    </div>
                    <table id="example" class="stripe hover text-sm w-full rounded-3xl py-4">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Rombel</th>
                                <th>Rayon</th>
                                <th>Jenis Kelamin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($murid as $key => $v)
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $v->nis }}</td>
                                    <td>{{ $v->nama }}</td>
                                    <td>{{ $v->Rombel->rombel }}</td>
                                    <td>{{ $v->Rayon->rayon }}</td>
                                    <td>
                                        @if ($v->jenis_kelamin == 'l')
                                            Laki-laki
                                        @else
                                            Perempuan
                                        @endif
                                    </td>
                                    <td class="grid grid-cols-2">
                                        <button type="button" data-modal-toggle="edit-murid-{{ $v->id }}"
                                            class="focus:outline-none bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:focus:ring-yellow-900"><i
                                                class="fa-solid fa-pen-to-square"></i></button>
                                        @include('master-data.murid.modal.edit')
                                        <button type="button" data-modal-toggle="delete-murid-{{ $v->id }}"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                        @include('master-data.murid.modal.delete')
                                    </td>
                                </tr>
                                {{-- @include('rekap-barang.razia.modal.edit') --}}
                            @endforeach
                            <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
                        </tbody>
                    </table>
                </div>
                <!--/Card-->
            </div>
        </div>
    </div>
    {{-- @include('rekap-barang.razia.modal.edit') --}}

@endsection
