<body>
    <nav class="fixed close h-full sidebar z-50 w-60 bg-[#222d32]">
        <header>
            <div class="flex items-center px-6 py-2 h-14 w-auto bg-[#347194]">
                <img class="w-8 mr-2" src="{{ asset('image/logo.png') }}" alt="Logo">
                <span class="text-white text-center font-medium text-xl">KESISWAAN</span>
            </div>
            <ul class="menu-links text-white text-lg">
                <li class="nav-link pl-6 pr-4 py-2 m-2 btn-menu hover:bg-black hover:pl-4 hover:border-l-blue-400 hover:border-l-4">
                    <a class="toggle" href="#">
                        <i class='bx bx-menu w-5'></i>
                        <span class="text text-base opacity-70 hover:opacity-100">Menu</span>
                    </a>
                </li>
                <li class="nav-link pl-6 pr-4 py-2 relative hover:bg-black hover:pl-4 hover:border-l-blue-400 hover:border-l-4 m-2">
                    <a href="/dashboard">
                        <i class='bx bx-home-alt text-green-500 w-5'></i>
                        <span class="text text-base opacity-70 hover:opacity-100">Dashboard</span>
                    </a>
                </li>
                <li class="nav-link pl-6 pr-4 py-2  relative hover:bg-black hover:pl-4 hover:border-l-blue-400 hover:border-l-4  m-2">
                    <a href="/absen/kehadiran?periode">
                        <i class='bx bx-bar-chart-alt-2 text-yellow-300 w-5'></i>
                        <span class="text text-base opacity-70 hover:opacity-100">Absensi Siswa</span>
                    </a>
                </li>
                @if (auth()->user()->role == 'admin')
                    <li class="nav-link pl-6 pr-4 py-2 relative hover:bg-black hover:pl-4 hover:border-l-blue-400 hover:border-l-4  m-2">
                        <button type="button" href="#" id="btnBarang" aria-controls="barangDropdown" data-collapse-toggle="barangDropdown">
                            <i class='items-center bx bxs-box text-red-400 icon w-5'></i>
                            <span class="text text-base opacity-70 hover:opacity-100">Rekap Barang</span>
                            <i class='bx bx-chevron-down ml-7'></i>
                        </button>
                        <ul id="barangDropdown" class="dropdown hidden ml-2 pl-5">
                            <li><a href="{{ route('temuan.index') }}" class="text-sm opacity-70 hover:opacity-100"><i class='bx bx-radio-circle'></i> Rekap Barang Temuan</a></li>
                            <li><a href="{{ route('razia.index') }}" class="text-sm opacity-70 hover:opacity-100"><i class='bx bx-radio-circle'></i> Rekap Barang Razia</a></li>
                        </ul>
                    </li>
                @endif
                
                {{-- <li class="nnav-link pl-6 pr-4 py-2  relative hover:bg-black hover:pl-4 hover:border-l-blue-400 hover:border-l-4  m-2" >
                    <button type="button" href="#" id="btnBarang" aria-controls="kinerjaDropdown" data-collapse-toggle="kinerjaDropdown">
                        <i class='items-center bx bx-bell text-blue-500 icon w-5'></i>
                        <span class="text font-normal text-base opacity-70 hover:opacity-100">Kinerja Siswa</span>
                        <i class='bx bx-chevron-down ml-8'></i>
                    </button>
                    <ul id="kinerjaDropdown" class="dropdown hidden ml-2 pl-5">
                        <li><a href="{{ route('temuan.index') }}" class="text-sm opacity-70 hover:opacity-100"><i class='bx bx-radio-circle'></i> Rekap BKP</a></li>
                        <li><a href="{{ route('razia.index') }}" class="text-sm opacity-70 hover:opacity-100"><i class='bx bx-radio-circle'></i> Rekap Surat Peringatan</a></li>
                        <li><a href="{{ route('razia.index') }}" class="text-sm opacity-70 hover:opacity-100"><i class='bx bx-radio-circle'></i> Rekap Kehadiran</a></li>
                    </ul>
                </li> --}}
                @if (auth()->user()->role == 'admin') 
                    <li class="nav-link pl-6 pr-4 py-2  relative hover:bg-black hover:pl-4 hover:border-l-blue-400 hover:border-l-4  m-2">
                        <a href="/sim/input-sim">
                            <i class='bx bx-id-card w-5 text-green-500'></i>
                            <span class="text text-sm opacity-70 hover:opacity-100">Input SIM</span>
                        </a>
                    </li>                                       
                @endif
                
                @if (auth()->user()->role == 'admin') 
                    <li class="nav-link pl-6 pr-4 py-2  relative hover:bg-black hover:pl-4 hover:border-l-blue-400 hover:border-l-4  m-2">
                        <button type="button" href="#" id="btnBarang" aria-controls="dataMasterDropdown" data-collapse-toggle="dataMasterDropdown">
                            <i class='items-center bx bxs-school icon w-5 text-yellow-300'></i>
                            <span class="text text-sm opacity-70 hover:opacity-100">Data Sekolah</span>
                            <i class='bx bx-chevron-down ml-12'></i>
                        </button>
                        <ul id="dataMasterDropdown" class="dropdown hidden ml-6">
                            <li><a href="/murid" class="text-sm py-2 opacity-70 hover:opacity-100"><i class='bx bx-radio-circle'></i> Murid</a></li>
                            <li><a href="/guru" class="text-sm py-2 mt-2 opacity-70 hover:opacity-100"><i class='bx bx-radio-circle'></i> Guru</a></li>
                            <li><a href="/data-sekolah" class="text-sm py-2 mt-2 opacity-70 hover:opacity-100"><i class='bx bx-radio-circle'></i> Data</a></li>
                        </ul>
                    </li>
                @endif

                @if (auth()->user()->role == 'admin' || auth()->user()->sub_role == 'pemray')
                    <li class="nav-link pl-6 pr-4 py-2 relative hover:bg-black hover:pl-4 hover:border-l-blue-400 hover:border-l-4  m-2">
                        <button type="button" href="#" id="btnSurat" aria-controls="suratDropdown" data-collapse-toggle="suratDropdown">
                            <i class='items-center bx bx-envelope text-red-500 icon w-5'></i>
                            <span class="text text-base opacity-70 hover:opacity-100">Surat</span>
                            <i class='bx bx-chevron-down ml-24'></i>
                        </button>
                        <ul id="suratDropdown" class="dropdown hidden ml-2 pl-5">
                            {{-- <li><a href="{{ route('peringatan.index') }}" class="text-sm opacity-70 hover:opacity-100"><i class='bx bx-radio-circle'></i>Surat Peringatan</a></li> --}}
                            <li><a href="{{ route('perjanjian.index') }}" class="text-sm opacity-70 hover:opacity-100"><i class='bx bx-radio-circle'></i>Surat Perjanjian</a></li>
                        </ul>
                    </li>
                @endif
 

                {{-- <li class="nav-link pl-6 pr-4 py-2 relative hover:bg-black hover:pl-4 hover:border-l-blue-400 hover:border-l-4  m-2">
                    <a href="#">
                        <i class='bx bx-book icon w-5 text-green-500'></i>
                        <span class="text text-base opacity-70 hover:opacity-100">Rekap BKP</span>
                    </a>
                </li> --}}
                @if (auth()->user()->role == 'admin')
                    <li class="nav-link pl-6 pr-4 py-2 relative hover:bg-black hover:pl-4 hover:border-l-blue-400 hover:border-l-4  m-2">
                        <a href="/akun">
                            <i class='bx bxs-user-account text-yellow-300'></i>
                            <span class="text text-base opacity-70 hover:opacity-100">Buat Akun</span>
                        </a>
                    </li>
                @endif
                
            </ul>
        </header>
    </nav>
</body>

<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".btn-menu");

    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
    // window.onclick = function(event) {
    //     console.log(event.target.matches('.btn-menu'));
    //     if((!event.target.matches(".btn-menu") || !event.target.matches(".bx-menu")) ){
    //         if (!sidebar.classList.contains('close')) {
    //             // sidebar.classList.add('close');
    //             console.log('tes');
    //         }
    //     }
    // }


</script>
