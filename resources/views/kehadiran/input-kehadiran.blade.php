@extends('layout.app')

@section('title', 'Kehadiran')

@Section('content')
    @include('kehadiran.modal.import')
    @include('kehadiran.modal.rekap')
    <div class="flex flex-col ml-10 mr-6">
        <div class="font-mono flex mb-2">
            <a href="/dashboard" class="text-lg pt-1 opacity-60">Dashboard</a>
            <i class='bx bx-chevrons-right p-2'></i>
            <p class="text-lg pt-1">Kehadiran</p>
        </div>
        <div class="overflow-x-auto sm:rounded-lg mt-2">
            <div
                class="text-sm font-medium text-center text-gray-500 border-gray-200 dark:text-gray-400 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px">
                    <li class="">
                        <a href="/absen/kehadiran?periode"
                            class="tabs-button inline-block p-4 rounded-t-lg bg-white hover:text-blue-600 hover:opacity-70 active"
                            aria-current="page" id="periode-tabs" onclick="changeTabs(event,'absen-harian')">Hari Ini</a>
                    </li>
                    <li class="mr-2">
                        <a href="/absen/kehadiran?rekap"
                            class="tabs-button inline-block p-4 rounded-t-lg hover:text-blue-600 hover:opacity-70"
                            onclick="changeTabs(event,'absen-rekap')" id="rekap-tabs">Rekap</a>
                    </li>
                </ul>
            </div>
            <div class="inline-block min-w-full align-middle dark:bg-gray-800">
                <div id='recipients' class="px-8 pb-8 pt-8 mt-6 lg:mt-0 rounded shadow bg-white">

                    <div class="tab-content tab-space">

                        <div class="block tabs" id="absen-periode">
                            <div class="grid grid-cols-5">
                                <button
                                    class="block mb-6 mr-4 text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button" data-modal-toggle="import-file-modal"><i class='bx bxs-file-import text-white'></i>
                                    Import
                                </button>
                                <a
                                    class="block mb-6 mr-4 text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button" href="{{ route('kehadiran.download') }}"><i class='bx bx-download text-white'></i>
                                    Download Excel
                                </a>

                                <form action="/absen/kehadiran?periode" method="get" class="grid grid-cols-4 gap-2 col-span-3">
                                    <input type="hidden" name="periode">
                                    <div>
                                        <select name="rombel" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="">
                                            <option selected disabled>Rombel</option>
                                            @foreach ($rombel as $r)
                                                <option value="{{ $r->rombel }}">{{ $r->rombel }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <select name="rayon" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="">
                                            <option selected disabled>Rayon</option>
                                            @foreach ($rayon as $r)
                                                <option value="{{ $r->rayon }}">{{ $r->rayon }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <select name="mapel" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="">
                                            <option selected disabled>Mata Pelajaran</option>
                                            {{-- <option value="MTK" >MTK</option>
                                            <option value="Indonesia" >Indonesia</option>
                                            <option value="Inggris">Inggris</option>
                                            <option value="Produktif">Produktif</option>
                                            <option value="Kimia">Kimia</option>
                                            <option value="Fisika">Fisika</option> --}}
                                            @foreach ($mapel as $m)
                                                <option value="{{ $m->mapel }}">{{ $m->mapel }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                                    </div>
                                </form>
                            </div>
                            <table id="example" class="table table-striped text-center text-sm" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th data-priority="1">No</th>
                                        <th data-priority="2">NIS</th>
                                        <th data-priority="3">Nama</th>
                                        <th data-priority="4">Rombel</th>
                                        <th data-priority="5">Mata Pelajaran</th>
                                        <th data-priority="6">Keterangan</th>
                                        <th data-priority="7">Tanggal Absen</th>
                                        <th data-priority="8">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $d->nis }}</td>
                                            <td>{{ $d->Murid->nama }}</td>
                                            <td>{{ $d->Murid->Rombel->rombel }}</td>
                                            <td>{{ $d->mapel }}</td>
                                            <td>{{ $d->ket }}</td>
                                            <td>{{ $d->tanggal_absen }}</td>
                                            <td>
                                                {{-- <button type="button" data-modal-toggle="edit-modal-{{ $d->id }}"
                                                    class="focus:outline-none bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:focus:ring-yellow-900"><i
                                                        class="fa-solid fa-pen-to-square"></i>
                                                </button> --}}
                                                <button type="button" data-modal-toggle="delete-modal-{{ $d->id }}"
                                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i
                                                        class="fa-solid fa-trash-can"></i>
                                                </button>
                                                @include('kehadiran.modal.delete')
                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="hidden tabs" id="absen-rekap">
                            <div class="flex">
                                <button
                                    class="block w-44 mb-6 mr-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-md text-sm py-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                    type="button" data-modal-toggle="rekap-absen-modal"><i class='bx bx-plus text-white'></i>
                                    Rekap
                                </button>

                                <form action="/absen/kehadiran?rekap" method="get" class="grid grid-cols-4 gap-2 col-span-3">
                                    <input type="hidden" name="rekap">
                                    <div>
                                        <select name="rombel_rekap" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="">
                                            <option selected disabled>Rombel</option>
                                            @foreach ($rombel as $r)
                                                <option value="{{ $r->rombel }}">{{ $r->rombel }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <select name="rayon_rekap" class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="">
                                            <option selected disabled>Rayon</option>
                                            @foreach ($rayon as $r)
                                                <option value="{{ $r->rayon }}">{{ $r->rayon }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div>
                                        <input type="number" name="semester" placeholder="Semester" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" id="">
                                    </div>
                                    <div>
                                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cari</button>
                                    </div>
                                </form>
                            </div>

                            <table id="rekap" class="table table-striped text-sm text-center" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th data-priority="1">No</th>
                                        <th data-priority="2">NIS</th>
                                        <th data-priority="3">Nama</th>
                                        <th data-priority="4">Rombel</th>
                                        <th data-priority="5">Izin</th>
                                        <th data-priority="6">Sakit</th>
                                        <th data-priority="7">Alpa</th>
                                        <th data-priority="8">Semester</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rekap_absen as $r)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $r->nis }}</td>
                                            <td>{{ $r->Murid->nama }}</td>
                                            <td>{{ $r->Murid->Rombel->rombel}}</td>
                                            <td>{{ $r->izin}}</td>
                                            <td>{{ $r->sakit }}</td>
                                            <td>{{ $r->alpa}}</td>
                                            <td>{{ $r->semester}}</td>
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
        var table = $('#rekap').DataTable({
                responsive: true
            })
            .columns.adjust()
            .responsive.recalc();

        function changeTabs(e, tabId) {


        }
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
        document.getElementById("absen-"+{!! json_encode($selected_tabs) !!}).classList.remove("hidden")
        document.getElementById("absen-"+{!! json_encode($selected_tabs) !!}).classList.add("block");
        document.getElementById({!! json_encode($selected_tabs) !!}+"-tabs").classList.add("active")
        document.getElementById({!! json_encode($selected_tabs) !!}+"-tabs").classList.add("bg-white")
        document.getElementById({!! json_encode($selected_tabs) !!}+"-tabs").classList.add("")
    </script>
@endsection
