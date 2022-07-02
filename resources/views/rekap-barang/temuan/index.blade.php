@extends('layout.app')

@section('title', 'Barang Temuan')

@Section('content')
@include('rekap-barang.temuan.modal.create')
    <div class="flex flex-col ml-10 mr-6">
        <div class="font-mono flex mb-4">
            <a href="/dashboard" class="text-lg pt-1 opacity-60">Dashboard</a>
            <i class='bx bx-chevrons-right p-2'></i>
            <p class="text-lg pt-1">Data Barang Temuan</p>
        </div>
        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <div class="inline-block min-w-full align-middle dark:bg-gray-800">
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <button
                        class="block mb-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button" data-modal-toggle="modal-create-temuan"><i class="fa-solid fa-plus"></i>
                        Tambah</button>
                    <table id="example" class="table table-striped text-sm" style="width:100%;">
                        <thead>
                            <tr>
                                <th data-priority="1">No</th>
                                <th data-priority="2">Penemu</th>
                                <th data-priority="3">Tanggal</th>
                                <th data-priority="4">Foto Barang</th>
                                <th data-priority="5">Pemilik</th>
                                <th data-priority="6">Keterangan</th>
                                <th data-priority="7">Status</th>
                                <th data-priority="8">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $d->Penemu->nama }}</td>
                                    <td class="text-center">{{ $d->tgl }}</td>
                                    <td class="text-center">
                                        <img class="m-auto" style="width: 100px"
                                            src="{{ asset('images/barangTemuan/' . $d->foto_barang) }}" alt="">
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
                                        {{-- <button type="button" data-modal-toggle="modal-edit-temuan-{{ $d->id }}"
                                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                            Ambil</button> --}}
                                        @include('rekap-barang.temuan.modal.edit')
                                        <button type="button" data-modal-toggle="modal-delete-temuan-{{ $d->id }}"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                        @include('rekap-barang.temuan.modal.delete')
                                        @if ($d->status == 0)
                                        <button type="button" data-modal-toggle="modal-ambil-temuan-{{ $d->id }}"
                                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                            Ambil</button>
                                            @include('rekap-barang.temuan.modal.ambil')
                                            {{-- <form action="{{ route('temuan.ambil', $d->id) }}" method="POST"
                                                class="col-span-2">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit"
                                                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Ambil</button>
                                            </form> --}}
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
