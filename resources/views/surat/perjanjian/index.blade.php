@extends('layout.app')

@section('title', 'Surat Perjanjian')

@Section('content')
@include('surat.perjanjian.modal.create')
    <div class="flex flex-col ml-10 mr-6">
        <div class="w-58 bg-white rounded-lg border shadow-md sm:p-2 dark:bg-gray-800 dark:border-gray-700">
            <b class="pl-2 text-base text-gray-900 sm:text-base">Surat Perjanjian Siswa</b>
        </div>
        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <div class="inline-block min-w-full align-middle dark:bg-gray-800">
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <button
                        class="block mb-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button" data-modal-toggle="create-perjanjian"><i class="fa-solid fa-plus"></i>
                        Tambah</button>
                    <table id="example" class="table table-striped text-sm" style="width:100%;">
                        <thead>
                            <tr>
                                <th data-priority="1">No</th>
                                <th data-priority="2">NIS</th>
                                <th data-priority="2">Nama</th>
                                <th data-priority="4">Tanggal</th>
                                <th data-priority="5">Status</th>
                                <th data-priority="6">Keterangan</th>
                                <th data-priority="8">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $d->nis }}</td>
                                    <td class="text-center">{{ $d->Student->nama }}</td>
                                    <td class="text-center">{{ $d->tgl }}</td>
                                    <td class="text-center">
                                        @if ($d->status == 0)
                                        <span
                                            class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                                            Belum diproses
                                        </span>
                                        @else
                                        <span
                                            class="bg-red-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">
                                            diproses
                                        </span>
                                        @endif
                                    </td>
                                    <td class="text-center">{{ $d->ket }}</td>
                                    <td class="grid grid-cols-2">
                                        <button type="button" data-modal-toggle="edit-perjanjian-{{ $d->id }}"
                                            class="focus:outline-none bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:focus:ring-yellow-900">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        @include('surat.perjanjian.modal.edit')

                                        <button type="button" data-modal-toggle="delete-peringatan-{{ $d->id }}"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                                                class="fa-solid fa-trash-can"></i>
                                        </button>
                                        @include('surat.perjanjian.modal.delete')
                                        @if ($d->status == 0)
                                        <form action="{{ route('perjanjian.proses', $d->id) }}" method="POST"
                                            class="col-span-2">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Proses</button>
                                        </form>
                                        @endif
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

@section('script')
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
@endsection
