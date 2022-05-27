@extends('layout.app')
@section('title', 'Murid')

@section('content')
    <div class="mx-4">
        <div class="w-58 bg-white rounded-lg border shadow-md sm:p-2 dark:bg-gray-800 dark:border-gray-700">
            <p class="pl-2 text-base text-gray-900 sm:text-base">Data Siswa</p>
        </div>
        <div
            class="pt-4 mt-4 pb-8 w-58 bg-white rounded-lg border shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="items-center flex mr-6 p-4 float-right" data-modal-toggle="input-raport-modal">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-2xl px-4 py-1 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >
                    <i class='bx bx-plus text-white' ></i>
                </button>
            </div>

            <!-- SEARCH -->
            {{-- <div class="float-right p-2">
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="table-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search">
                </div>
            </div> --}}
            <!-- TABLE -->
            <div class="flex flex-col mt-16">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
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
                                       <form action="">
                                          <button
                                          class="block text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm ml-8 px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                          type="button" data-modal-toggle="edit-murid-{{$v->id}}"
                                          ><i class='bx bx-edit'></i></button>
                                       </form>
                                       <div id="edit-murid-{{$v->id}}" aria-hidden="true"
                                       class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-2 z-50 pt-2 pb-4 justify-center items-center h-modal md:h-full md:inset-0">
                                       <div class="relative px-4 w-full max-w-lg h-full md:h-auto overflow-x-hidden">
                                           <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                               <div class="flex justify-end p-2">
                                                   <button type="button"
                                                       class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                       data-modal-toggle="edit-murid-{{$v->id}}">
                                                       <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                           xmlns="http://www.w3.org/2000/svg">
                                                           <path fill-rule="evenodd"
                                                               d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                               clip-rule="evenodd"></path>
                                                       </svg>
                                                   </button>
                                               </div>
                                               <form class="pb-4 space-y-6 lg:px-8 sm:p-6 xl:pb-8" action="/murid/{{$v->id}}" enctype="multipart/form-data" method="POST">
                                                @method('PATCH')
                                                   @csrf
                                                   <h3 class="text-xl font-medium text-gray-900 dark:text-white">Tambah Data Murid</h3>
                                                   <div class="flex">
                                                       <label for="nis"
                                                           class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIS</label>
                                                       <input type="number" name="nis" id="nis"
                                                           class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                           placeholder="" required="" value="{{$v->nis}}">
                                                   </div>
                                                   <div class="flex">
                                                       <label for="nama"
                                                           class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                                                       <input type="text" name="nama" id="nama"
                                                           class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                           placeholder="" required="" value="{{$v->nama}}">
                                                   </div>
                                                   <div class="flex">
                                                       <label for="email"
                                                           class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                                                       <input type="email" name="email" id="email"
                                                           class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                           placeholder="" required="" value="{{$v->email}}">
                                                   </div>
                                                   <div class="flex">
                                                       <label for="no_hp"
                                                           class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">No Telephon</label>
                                                       <input type="number" name="no_hp" id="no_hp"
                                                           class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                           placeholder="" required="" value="{{$v->no_hp}}">
                                                   </div>
                                                   <div class="flex">
                                                       <label for="nik"
                                                           class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIK</label>
                                                       <input type="number" name="nik" id="nik"
                                                           class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                           placeholder="" required="" value="{{$v->nik}}">
                                                   </div>
                                                   <div class="flex">
                                                       <label for="nisn"
                                                           class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nisn</label>
                                                       <input type="number" name="nisn" id="nisn"
                                                           class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                           placeholder="" required="" value="{{$v->nisn}}">
                                                   </div>
                                                   <div class="flex">
                                                       <label for="jenis_kelamin" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Jenis Kelamin</label>
                                                       <select id="jenis_kelamin" class="form-select appearance-none transition ease-in-out ml-14 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example" name="jenis_kelamin">
                                                           <option disabled>Open this select menu</option>
                                                           <option value="p" {{$v->jenis_kelamin == 'p'?'selected':''}} >perempuan</option>
                                                           <option value="l" {{$v->jenis_kelamin == 'l'?'selected':''}}>laki - laki</option>
                                                       </select>
                                                   </div>
                                                   <div class="flex">
                                                       <label for="rayon" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Rayon</label>
                                                       <select id="rayon" class="form-select appearance-none transition ease-in-out ml-14 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example" name="rayon">
                                                           <option selected disabled>Open this select menu</option>
                                                           @foreach ($rayon as $item => $value)
                                                               <option value="{{$value->id}}" {{$v->rayon_id == $value->id?'selected':''}}>{{$value->rayon}}</option>
                                                           @endforeach
                                                       </select>
                                                   </div>
                                                   <div class="flex">
                                                       <label for="rombel" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Rombel</label>
                                                       <select id="rombel" class="form-select appearance-none transition ease-in-out ml-14 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example" name="rombel">
                                                           <option selected disabled>Open this select menu</option>
                                                           @foreach ($rombel as $item => $value)
                                                               <option value="{{$value->id}}" {{$v->rombel_id == $value->id?'selected':''}}>{{$value->rombel}} | {{$value->Batch->angkatan}}</option>
                                                           @endforeach
                                                       </select>
                                                   </div>
                                                   <button type="submit"
                                                       class="text-white bg-blue-400 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:focus:ring-blue-900">Tambah</button>
                                                    <button type="button"
                                                    class="text-white bg-gray-400 hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:focus:ring-gray-900" data-modal-toggle="edit-murid-{{$v->id}}">Tutup</button>
                                               </form>
                                           </div>
                                       </div>
                                   </div>

                                    <form action="/murid/{{$v->id}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button
                                        class="block text-white bg-red-600 hover:bg-red-700 focus:ring-blue-300 ml-4 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                        type="submit" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')" ><i class='bx bx-trash' ></i></button>
                                    </form>
                                    </td>
                                </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- <nav aria-label="Page navigation example">
                    <ul class="inline-flex -space-x-px mt-8 float-right pr-4">
                        <li>
                            <a href="#"
                                class="py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="py-2 px-3 text-blue-600 bg-blue-50 border border-gray-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#"
                                class="py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                        </li>
                    </ul>
                </nav> --}}
            </div>
        </div>
    </div>
@endsection
<!-- MODAL INPUT RAPOT -->
<div id="input-raport-modal" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-2 z-50 pt-2 pb-4 justify-center items-center h-auto md:inset-0">
    <div class="relative px-4 w-full max-w-lg h-full md:h-auto overflow-x-hidden">
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex justify-end p-2">
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="input-raport-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <form class="pb-4 space-y-6 lg:px-8 sm:p-6 xl:pb-8" action="/murid" enctype="multipart/form-data" method="POST">
                @csrf
                <h3 class="text-xl font-medium text-gray-900 dark:text-white">Tambah Data Murid</h3>
                <div class="grid grid-cols-2">
                    <div class="gap-2">
                        <div class="flex">
                            <label for="nis"
                                class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIS</label>
                            <input type="number" name="nis" id="nis"
                                class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="" required="">
                        </div>
                        <div class="flex">
                            <label for="nama"
                                class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama</label>
                            <input type="text" name="nama" id="nama"
                                class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="" required="">
                        </div>
                        <div class="flex">
                            <label for="email"
                                class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                            <input type="email" name="email" id="email"
                                class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="" required="">
                        </div>
                        <div class="flex">
                            <label for="no_hp"
                                class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">No Telephon</label>
                            <input type="number" name="no_hp" id="no_hp"
                                class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="" required="">
                        </div>
                    </div>
                    <div class="gap-2">
                        <div class="flex">
                            <label for="nik"
                                class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIK</label>
                            <input type="number" name="nik" id="nik"
                                class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="" required="">
                        </div>
                        <div class="flex">
                            <label for="nisn"
                                class="block mt-2 mr-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nisn</label>
                            <input type="number" name="nisn" id="nisn"
                                class="ml-16 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                placeholder="" required="">
                        </div>
                        <div class="flex">
                            <label for="jenis_kelamin" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Jenis Kelamin</label>
                            <select id="jenis_kelamin" class="form-select appearance-none transition ease-in-out ml-14 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example" name="jenis_kelamin">
                                <option selected disabled>Open this select menu</option>
                                <option value="p">perempuan</option>
                                <option value="l">laki - laki</option>
                            </select>
                        </div>
                        <div class="flex">
                            <label for="rayon" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Rayon</label>
                            <select id="rayon" class="form-select appearance-none transition ease-in-out ml-14 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example" name="rayon">
                                <option selected disabled>Open this select menu</option>
                                @foreach ($rayon as $item => $value)
                                    <option value="{{$value->id}}">{{$value->rayon}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex">
                            <label for="rombel" class="block text-sm font-medium text-gray-900 dark:text-gray-300">Rombel</label>
                            <select id="rombel" class="form-select appearance-none transition ease-in-out ml-14 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-500 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" aria-label="Default select example" name="rombel">
                                <option selected disabled>Open this select menu</option>
                                @foreach ($rombel as $item => $value)
                                    <option value="{{$value->id}}">{{$value->rombel}} | {{$value->Batch->angkatan}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="text-white bg-blue-400 hover:bg-blue-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:focus:ring-blue-900">Tambah</button>
                <button type="button"
                class="text-white bg-gray-400 hover:bg-gray-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-8 py-2.5 text-center mr-2 mb-2 dark:focus:ring-gray-900" data-modal-toggle="input-raport-modal">Tutup</button>
            </form>
        </div>
    </div>
</div>
