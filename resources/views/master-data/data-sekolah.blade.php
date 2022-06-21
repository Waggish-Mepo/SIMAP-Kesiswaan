@extends('layout.app')

@section('title', 'Data Sekolah')

@Section('content')
    @include('master-data.modal-rayon.create')
    @include('master-data.modal-rombel.create')
    @include('master-data.modal-angkatan.create')
    <div class="flex flex-col ml-10 mr-6">
        <div class="w-58 bg-white rounded-lg border shadow-md sm:p-2 dark:bg-gray-800 dark:border-gray-700">
            <b class="pl-2 text-base text-gray-900 sm:text-base">Data Sekolah</b>
        </div>
        <div class="overflow-x-auto sm:rounded-lg mt-4">
            <div
                class="text-sm font-medium text-center text-gray-500 border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px">
                    <li class="">
                        <a href="#"
                            class="tabs-button inline-block p-4 rounded-t-lg bg-white hover:text-blue-600 hover:opacity-70 active"
                            aria-current="page" onclick="changeTabs(event,'rayon')">Rayon</a>
                    </li>
                    <li class="mr-2">
                        <a href="#"
                            class="tabs-button inline-block p-4 rounded-t-lg hover:text-blue-600 hover:opacity-70"
                            onclick="changeTabs(event,'rombel')">Rombel</a>
                    </li>
                    <li class="mr-2">
                        <a href="#"
                            class="tabs-button inline-block p-4 rounded-t-lg hover:text-blue-600 hover:opacity-70"
                            onclick="changeTabs(event,'angkatan')">Angkatan</a>
                    </li>
                </ul>
            </div>
            <div class="inline-block min-w-full align-middle dark:bg-gray-800">
                <div id='recipients' class="px-8 pb-8 pt-8 mt-6 lg:mt-0 rounded shadow bg-white">

                    <div class="tab-content tab-space">
                        <div class="block tabs" id="rayon">
                            <button
                                class="block mb-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button" data-modal-toggle="create-rayon"><i
                                    class='bx bx-plus text-white'></i>
                                Tambah</button>
                            <table id="example" class="table table-striped text-center text-sm" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th data-priority="1">No</th>
                                        <th data-priority="2">Rayon</th>
                                        <th data-priority="2">Pembiming Siswa</th>
                                        <th data-priority="3">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($jumlah_guru != 0)
                                        @foreach ($rayon as $d)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $d->rayon }}</td>
                                                @if ($d->Teacher != null)
                                                    <td>{{ $d->Teacher->nama }}</td>
                                                @else
                                                <td></td>
                                                @endif
                                                
                                                <td>
                                                    <button type="button" data-modal-toggle="edit-rayon-{{ $d->id }}"
                                                        class="focus:outline-none bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:focus:ring-yellow-900"><i
                                                            class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                    @include('master-data.modal-rayon.edit')
                                                    <button type="button" data-modal-toggle="delete-rayon-{{ $d->id }}"
                                                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                                                            class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                    @include('master-data.modal-rayon.delete')
                                                </td>
                                            </tr>

                                        @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>
                        <div class="hidden tabs" id="rombel">
                            <button
                                class="block mb-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button" data-modal-toggle="create-rombel"><i
                                    class='bx bx-plus text-white'></i>
                                Tambah</button>
                            <table id="rombel-tab" class="table table-striped text-sm text-center" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th data-priority="1">No</th>
                                        <th data-priority="2">Rombel</th>
                                        <th data-priority="3">Angkatan</th>
                                        <th data-priority="4">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rombel as $d)
                                        <tr>
                                            
                                            
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $d->rombel }}</td>
                                            @if ($d->Batch != null)
                                                <td>{{ $d->Batch->angkatan }}</td>
                                            @else
                                                <td></td>
                                            @endif
                                            <td>
                                                <button type="button" data-modal-toggle="edit-rombel-{{ $d->id }}"
                                                    class="focus:outline-none bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:focus:ring-yellow-900"><i
                                                        class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                @include('master-data.modal-rombel.edit')
                                                <button type="button" data-modal-toggle="delete-rombel-{{ $d->id }}"
                                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                                                        class="fa-solid fa-trash-can"></i>
                                                </button>
                                                @include('master-data.modal-rombel.delete')
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="hidden tabs" id="angkatan">
                            <button
                                class="block mb-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                type="button" data-modal-toggle="create-angkatan"><i
                                    class='bx bx-plus text-white'></i>
                                Tambah</button>
                            <table id="angkatan-tab" class="table table-striped text-sm text-center" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th data-priority="1">No</th>
                                        <th data-priority="2">Angkatan</th>
                                        <th data-priority="3">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($angkatan as $d)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $d->angkatan }}</td>
                                            <td>
                                                <button type="button" data-modal-toggle="edit-angkatan-{{ $d->id }}"
                                                    class="focus:outline-none bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:focus:ring-yellow-900"><i
                                                        class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                                @include('master-data.modal-angkatan.edit')
                                                <button type="button" data-modal-toggle="delete-angkatan-{{ $d->id }}"
                                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                                                        class="fa-solid fa-trash-can"></i>
                                                </button>
                                                @include('master-data.modal-angkatan.delete')
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--/Card-->
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        var table = $('#rombel-tab').DataTable({
                responsive: true
            })
            .columns.adjust()
            .responsive.recalc();
        var table2 = $('#angkatan-tab').DataTable({
                responsive: true
            })
            .columns.adjust()
            .responsive.recalc();

        function changeTabs(e, tabId) {

            tabs_button = document.getElementsByClassName("tabs-button");
            for (var i = 0; i < tabs_button.length; i++) {
                if (tabs_button[i].classList.contains("active")) {
                    tabs_button[i].classList.remove("active")
                    tabs_button[i].classList.remove("bg-white")
                }
            }
            tabs = document.getElementsByClassName("tabs")

            for (var i = 0; i < tabs.length; i++) {
                if (tabs[i].classList.contains("block")) {
                    tabs[i].classList.remove("block")
                    tabs[i].classList.add("hidden")
                }
            }
            document.getElementById(tabId).classList.remove("hidden")
            document.getElementById(tabId).classList.add("block");
            e.target.classList.add("active")
            e.target.classList.add("bg-white")
            e.target.classList.add("")
        }
    </script>
@endsection
