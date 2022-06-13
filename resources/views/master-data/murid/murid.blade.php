@extends('layout.app')

@section('title', 'Data Murid')

@Section('content')
@include('master-data.murid.modal.create')
    <div class="flex flex-col ml-10 mr-12">
        <div class="w-58 bg-white rounded-lg border shadow-md sm:p-2 dark:bg-gray-800 dark:border-gray-700">
            <b class="pl-2 text-base text-gray-900 sm:text-base">Data Murid</b>
        </div>
        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <div class="inline-block min-w-full align-middle dark:bg-gray-800">
                <!--Card-->
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white px-6">
                    <button
                        class="block mb-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button" data-modal-toggle="modal-create-murid"><i class="fa-solid fa-plus"></i> Tambah</button>
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

@section('script')
    <script>
        $(document).ready(function(){
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

{{-- @extends('layout.app')
@section('title', 'Murid')

@section('content')
@include('master-data.murid.modal.create')
    <div class="mx-4">
        <div class="w-58 bg-white rounded-lg border shadow-md sm:p-2 dark:bg-gray-800 dark:border-gray-700">
            <p class="pl-2 text-base text-gray-900 sm:text-base">Data Siswa</p>
        </div>
        <div
            class="pt-4 mt-4 pb-8 w-58 bg-white rounded-lg border shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col mt-16">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                    <div class="items-center flex p-4 float-right" data-modal-toggle="modal-create-murid">
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-2xl px-4 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >
                            <i class='bx bx-plus text-white' ></i>
                        </button>
                    </div>
                    <div class="overflow-hidden sm:rounded-lg px-8">
                        <table class="w-auto" id='example'>
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
                                            Angkatan
                                        </th>
                                        <th scope="col" class="relative py-3 px-6">
                                            <span class="sr-only">Option</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($murid as $key => $v)
                                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$loop->index+1}}
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{$v->nis}}
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{$v->nama}}
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{$v->Rombel->rombel}}
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{$v->Rayon->rayon}}
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{$v->jenis_kelamin}}
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{$v->Rombel->Batch->angkatan}}
                                    </td>
                                    <td class="py-4 px-2 flex">
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
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
