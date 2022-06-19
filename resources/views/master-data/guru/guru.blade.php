@extends('layout.app')

@section('title', 'Guru')

@Section('content')
    @include('master-data.guru.modal.create')
    <div class="flex flex-col ml-10 mr-6">
        <div class="w-58 bg-white rounded-lg border shadow-md sm:p-2 dark:bg-gray-800 dark:border-gray-700">
            <b class="pl-2 text-base text-gray-900 sm:text-base">Guru</b>
        </div>
        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <div class="inline-block min-w-full align-middle dark:bg-gray-800">
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <div class="flex">
                        <button
                            class="block mb-6 mr-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="create-guru"><i class="fa-solid fa-plus"></i>
                            Tambah</button>
                        @include('master-data.guru.modal.import')
                        <button
                            class="block mb-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button" data-modal-toggle="import-file-modal"><i class='bx bxs-file-import text-white'></i>
                            Import</button>
                    </div>
                    <table id="example" class="table table-striped text-sm" style="width:100%;">
                        <thead>
                            <tr>
                                <th data-priority="1">No</th>
                                <th data-priority="2">Nama</th>
                                <th data-priority="3">Email</th>
                                <th data-priority="4">No. Handphone</th>
                                <th data-priority="5">No. Induk Yayasan</th>
                                <th data-priority="6">Jenis Kelamin</th>
                                <th data-priority="7">Mata Pelajaran</th>
                                <th data-priority="8">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $d->nama }}</td>
                                    <td class="text-center">{{ $d->email }}</td>
                                    <td class="text-center">{{ $d->no_hp }}</td>
                                    <td class="text-center">{{ $d->no_induk_yayasan }}</td>
                                    <td>
                                        @if ($d->jk == 'l')
                                            <p>Laki-laki</p>
                                        @else
                                            <p>Perempuan</p>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $d->mata_pelajaran }}</td>

                                    <td class="grid grid-cols-2">
                                        <button type="button" data-modal-toggle="edit-guru-{{ $d->id }}"
                                            class="focus:outline-none bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:focus:ring-yellow-900"><i
                                                class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        @include('master-data.guru.modal.edit')

                                        <button type="button" data-modal-toggle="delete-guru-{{ $d->id }}"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                        @include('master-data.guru.modal.delete')
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
{{-- @section('script')
    <script>
        $(document).ready(function(){
            $('#nis').change(function() {
                var nis = $(this).val();
                var url = '{{ route('temuan.getDetails', ':nis') }}';
                url = url.replace(':nis', nis);

            $.ajax({
                url: url,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    if (response != null) {
                        $('#nama').val(response.nama);
                        $('#rombel').val(response.rombel.rombel);
                    }

                },
                error: function (error) {
                console.log(error);
            }
            });
        });
        });

    </script>
@endsection --}}
