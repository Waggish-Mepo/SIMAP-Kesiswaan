@extends('layout.app')

@section('title', 'Barang Temuan')

@Section('content')
    <main class="w-11/12 mx-auto mt-4">
        <br>
        <div class="flex flex-col">
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <div class="inline-block min-w-full align-middle dark:bg-gray-800">
                    <!--Card-->

                    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <button  class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button" data-modal-toggle="modal-create-temuan"><i class="fa-solid fa-plus"></i></button>
                        <table id="example" class="stripe hover text-sm"
                            style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
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
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $d->Penemu->nama }}</td>
                                        <td>{{ $d->tgl }}</td>
                                        <td>
                                            <img style="width: 100px" src="{{ asset('images/barangTemuan/'.$d->foto_barang) }}" alt="">
                                        </td>
                                        <td>@if ($d->pemilik == null)
                                                <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Belum ditemukan</span>
                                            @else
                                                {{ $d->Pemilik->nama }}
                                            @endif
                                        </td>
                                        <td>{{ $d->ket }}</td>
                                        <td>@if ($d->status == 0)
                                                <span class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Belum ditemukan</span>
                                            @else
                                                <span class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Sudah ditemukan</span>
                                            @endif
                                        </td>
                                        <td class="grid grid-cols-2">
                                            <button type="button" data-modal-toggle="modal-edit-temuan-{{ $d->id }}" class="focus:outline-none bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:focus:ring-yellow-900"><i class="fa-solid fa-pen-to-square"></i></button>
                                                @include('rekap-barang.temuan.modal.edit')
                                            <button type="button" data-modal-toggle="modal-delete-temuan-{{ $d->id }}" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i class="fa-solid fa-trash-can"></i></button>
                                                @include('rekap-barang.temuan.modal.delete')
                                            
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
    </main>
    </div>
</div>
    @include('rekap-barang.temuan.modal.create')
@endsection

@section('script')
<script>
        $('#nis').change(function() {
            var nis = $(this).val();
            var url = '{{ route("razia.getDetails", ":nis") }}';
            url = url.replace(':nis', nis);
            $.ajax({
                url: url,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    if (response != null) {
                        $('#nama').val(response.student.nama);
                        $('#rombel').val(response.student.rombel.rombel);
                    }
                }
            });
        });
 </script>
@endsection