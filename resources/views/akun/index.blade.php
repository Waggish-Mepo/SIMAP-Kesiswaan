@extends('layout.app')

@section('title', 'Akun')

@Section('content')
@include('akun.modal.create')
    <div class="flex flex-col ml-10 mr-6">
        <div class="w-58 bg-white rounded-lg border shadow-md sm:p-2 dark:bg-gray-800 dark:border-gray-700">
            <b class="pl-2 text-base text-gray-900 sm:text-base">Data Akun</b>
        </div>
        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <div class="inline-block min-w-full align-middle dark:bg-gray-800">
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <button
                        class="block mb-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button" data-modal-toggle="create-akun"><i class="fa-solid fa-plus"></i>
                        Tambah</button>
                    <table id="example" class="table table-striped text-sm text-center" style="width:100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Sub Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->username }}</td>
                                    <td>{{ $d->email }}</td>
                                    <td>{{ $d->role }}</td>
                                    <td>{{ $d->sub_role }}</td>
                                    <td>
                                        <button type="button" data-modal-toggle="edit-akun-{{ $d->id }}"
                                            class="focus:outline-none bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:focus:ring-yellow-900"><i
                                                class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        @include('akun.modal.edit')
                                        <button type="button" data-modal-toggle="delete-akun-{{ $d->id }}"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                                                class="fa-solid fa-trash-can"></i>
                                        </button>
                                        @include('akun.modal.delete')
                                    </td>
                                </tr>
                            @endforeach
                            <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
                        </tbody>
                    </table>
                </div>
                <!--/Card-->
            </div>
        </div>
    </div>
    
@endsection