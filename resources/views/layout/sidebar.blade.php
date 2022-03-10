<body>
    <nav class="fixed close h-full sidebar z-50 w-60 bg-[#223787]">
        <header>
            <div class="flex items-center px-6 py-2 h-16 w-auto">
                <img class="w-8 mr-2" src="{{ asset('image/logo.png') }}" alt="Logo">
                <span class="text-white font-medium text-2xl">Kesiswaan</span>
            </div>
            <ul class="pt-4 menu-links text-white text-lg">
                <li class="nav-link px-4 py-2 m-2 hover:bg-[#192e7d]">
                    <a class="toggle" href="#">
                        <i class='bx bx-menu w-5'></i>
                        <span class="text nav-text">Menu</span>
                    </a>
                </li>
                <li class="nav-link px-4 py-2  relative hover:bg-[#192e7d] m-2">
                    <a href="/dashboard">
                        <i class='bx bx-home-alt w-5'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>

                <li class="nav-link px-4 py-2  relative hover:bg-[#192e7d] m-2">
                    <a href="#">
                        <i class='bx bx-bar-chart-alt-2 w-5'></i>
                        <span class="text nav-text">Absensi Siswa</span>
                    </a>
                </li>

                <li class="nav-link py-2  relative justify-center hover:bg-[#192e7d] m-2">
                    <a href="#" class="pl-4">
                        <i class='items-center bx bx-bell icon w-5'></i>
                        <span class="ml-2 text nav-text">Rekap Barang</span>
                    </a>
                    {{-- <i class='bx bx-chevron-down drop-icon px-4 pt-1 justify-center float-right'></i> --}}
                    <ul class="dropdown pl-12 hidden pt-2 bg-[#192e7d]">
                        <li><a href="" class="pt-4 text-base">Rekap Barang Temuan</a></li>
                        <li><a href="" class="pt-4 text-base">Rekap Barang Razia</a></li>
                    </ul>
                </li>

                <li class="nav-link px-4 py-2  relative hover:bg-[#192e7d] m-2">
                    <a href="#">
                        <i class='bx bx-pie-chart-alt w-5'></i>
                        <span class="text nav-text">Kinerja Siswa</span>
                    </a>
                </li>

                <li class="nav-link px-4 py-2  relative hover:bg-[#192e7d] m-2">
                    <a href="#">
                        <i class='bx bx-id-card w-5'></i>
                        <span class="text nav-text">Input SIM</span>
                    </a>
                </li>

                <li class="nav-link px-4 py-2  relative hover:bg-[#192e7d] m-2">
                    <a href="/sim/input-sim">
                        <i class='bx bx-card icon w-5'></i>
                        <span class="text nav-text">Input SIM</span>
                    </a>
                </li>

                <li class="nav-link px-4 py-2  relative hover:bg-[#192e7d] m-2">
                    <a href="/raport-karakter/input-raport">
                        <i class='bx bx-wallet icon w-5'></i>
                        <span class="text nav-text">Raport Karakter</span>
                    </a>
                </li>

                <li class="nav-link px-4 py-2  relative hover:bg-[#192e7d] m-2">
                    <a href="#">
                        <i class='bx bx-book icon w-5'></i>
                        <span class="text nav-text">Rekap BKP</span>
                    </a>
                </li>
            </ul>
        </header>
    </nav>
</body>

<script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle")

    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    })

    searchBtn.addEventListener("click", () => {
        sidebar.classList.remove("close");
    })
</script>
