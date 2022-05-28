<body>
    <nav class="fixed close h-full sidebar z-50 w-60 bg-[#223787]">
        <header>
            <div class="flex items-center px-6 py-2 h-16 w-auto">
                <img class="w-8 mr-2" src="{{ asset('image/logo.png') }}" alt="Logo">
                <span class="text-white font-medium text-2xl">Kesiswaan</span>
            </div>
            <ul class="pt-4 menu-links text-white text-lg">
                <li class="nav-link pl-6 pr-4 py-2 m-2 btn-menu hover:bg-[#192e7d]">
                    <a class="toggle" href="#">
                        <i class='bx bx-menu w-5'></i>
                        <span class="text nav-text">Menu</span>
                    </a>
                </li>
                <li class="nav-link pl-6 pr-4 py-2  relative hover:bg-[#192e7d] m-2">
                    <a href="/dashboard">
                        <i class='bx bx-home-alt w-5'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>

                <li class="nav-link pl-6 pr-4 py-2  relative hover:bg-[#192e7d] m-2">
                    <a href="#">
                        <i class='bx bx-bar-chart-alt-2 w-5'></i>
                        <span class="text nav-text">Absensi Siswa</span>
                    </a>
                </li>

                <li class="nav-link pl-6 pr-4 py-2  relative hover:bg-[#192e7d] m-2">
                    <button type="button" href="#" id="btnBarang" aria-controls="barangDropdown" data-collapse-toggle="barangDropdown">
                        <i class='items-center bx bx-bell icon w-5'></i>
                        <span class="text nav-text">Rekap Barang</span>
                        <i class='bx bx-chevron-down ml-3'></i>
                    </button>
                    <ul id="barangDropdown" class="dropdown hidden ml-2 pl-5">
                        <li><a href="{{ route('temuan.index') }}" class="text-base">Rekap Barang Temuan</a></li>
                        <li><a href="{{ route('razia.index') }}" class="text-base">Rekap Barang Razia</a></li>
                    </ul>
                </li>
                <li class="nnav-link pl-6 pr-4 py-2  relative hover:bg-[#192e7d] m-2" >
                    <button type="button" href="#" id="btnBarang" aria-controls="kinerjaDropdown" data-collapse-toggle="kinerjaDropdown">
                        <i class='items-center bx bx-bell icon w-5'></i>
                        <span class="text nav-text">Kinerja Siswa</span>
                        <i class='bx bx-chevron-down ml-3'></i>
                    </button>
                    <ul id="kinerjaDropdown" class="dropdown hidden ml-2 pl-5">
                        <li><a href="{{ route('temuan.index') }}" class="text-base">Rekap BKP</a></li>
                        <li><a href="{{ route('razia.index') }}" class="text-base">Rekap Surat Peringatan</a></li>
                        <li><a href="{{ route('razia.index') }}" class="text-base">Rekap Kehadiran</a></li>
                    </ul>
                </li>
                <li class="nav-link pl-6 pr-4 py-2  relative hover:bg-[#192e7d] m-2">
                    <a href="/sim/input-sim">
                        <i class='bx bx-id-card w-5'></i>
                        <span class="text nav-text">Input SIM</span>
                    </a>
                </li>

                <li class="nav-link pl-6 pr-4 py-2  relative hover:bg-[#192e7d] m-2">
                    <button type="button" href="#" id="btnBarang" aria-controls="dataMasterDropdown" data-collapse-toggle="dataMasterDropdown">
                        <i class='items-center bx bxs-school icon w-5'></i>
                        <span class="text nav-text">Data Sekolah</span>
                        <i class='bx bx-chevron-down ml-4'></i>
                    </button>
                    <ul id="dataMasterDropdown" class="dropdown hidden ml-6">
                        <li><a href="/murid" class="text-base py-2 ">Murid</a></li>
                        <li><a href="/guru" class="text-base py-2 mt-2">Guru</a></li>
                        <li><a href="" class="text-base">Rayon</a></li>
                        <li><a href="" class="text-base">Rombel</a></li>
                        <li><a href="" class="text-base">Angkatan</a></li>
                    </ul>
                </li>

                <li class="nav-link pl-6 pr-4 py-2  relative hover:bg-[#192e7d] m-2">
                    <a href="/sim/input-sim">
                        <i class='bx bx-envelope w-5'></i>
                        <span class="text nav-text">Surat Perjanjian</span>
                    </a>
                </li>

                <li class="nav-link pl-6 pr-4 py-2  relative hover:bg-[#192e7d] m-2">
                    <a href="/raport-karakter/input-raport">
                        <i class='bx bx-wallet icon w-5'></i>
                        <span class="text nav-text">Raport Karakter</span>
                    </a>
                </li>

                {{-- <li class="nav-link pl-6 pr-4 py-2  relative hover:bg-[#192e7d] m-2">
                    <a href="#">
                        <i class='bx bx-book icon w-5'></i>
                        <span class="text nav-text">Rekap BKP</span>
                    </a>
                </li> --}}
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
