@extends('layout.app')

@section('title', 'Barang Razia')

@Section('content')
    <div class="flex flex-col ml-10 mr-12">
        <div class="w-58 bg-white rounded-lg border shadow-md sm:p-2 dark:bg-gray-800 dark:border-gray-700">
            <p class="pl-2 text-base text-gray-900 sm:text-base">Data Barang Razia Siswa</p>
        </div>
        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <div class="inline-block min-w-full align-middle dark:bg-gray-800">
                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white px-6">
                    <button
                        class="block mb-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button" data-modal-toggle="create-modal"><i class="fa-solid fa-plus"></i> Tambah</button>
                    <table id="example" class="stripe hover text-sm w-full rounded-3xl py-4">
                        <thead>
                            <tr>
                                <th data-priority="1">No</th>
                                <th data-priority="2">Pemilik</th>
                                <th data-priority="3">Nis</th>
                                <th data-priority="4">Rombel</th>
                                <th data-priority="5">Rayon</th>
                                <th data-priority="6">Tanggal</th>
                                <th data-priority="7">Foto Barang</th>
                                <th data-priority="8">Keterangan</th>
                                <th data-priority="9">Status</th>
                                <th data-priority="10">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $d->Student->nama }}</td>
                                    <td>{{ $d->nis }}</td>
                                    <td>{{ $d->Student->Rombel->rombel }}</td>
                                    <td>{{ $d->Student->Rayon->rayon }}</td>
                                    <td>{{ $d->tgl }}</td>
                                    <td>
                                        <img style="width: 100px" src="{{ asset('images/barangRazia/' . $d->foto_barang) }}"
                                            alt="">
                                    </td>
                                    <td>{{ $d->ket }}</td>
                                    <td>
                                        @if ($d->status == 0)
                                            <span
                                                class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">Razia</span>
                                        @else
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">Dikembalikan</span>
                                        @endif
                                    </td>
                                    <td class="grid grid-cols-2">
                                        <button type="button" data-modal-toggle="edit-modal-{{ $d->id }}"
                                            class="focus:outline-none bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:focus:ring-yellow-900"><i
                                                class="fa-solid fa-pen-to-square"></i></button>
                                        @include('rekap-barang.razia.modal.edit')
                                        <button type="button" data-modal-toggle="delete-modal-{{ $d->id }}"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                        @include('rekap-barang.razia.modal.delete')
                                        @if ($d->status == 0)
                                            <form action="{{ route('razia.kembali', $d->id) }}" method="POST"
                                                class="col-span-2">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit"
                                                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Kembalikan</button>
                                            </form>
                                        @else
                                            <form action="{{ route('razia.razia', $d->id) }}" method="POST"
                                                class="col-span-2">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit"
                                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Razia</button>
                                            </form>
                                        @endif

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
    @include('rekap-barang.razia.modal.create')
@endsection

@section('script')
    <script>
        $('#nis').change(function() {
            var nis = $(this).val();
            var url = '{{ route('razia.getDetails', ':nis') }}';
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
