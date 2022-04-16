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

                <li>
                    <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                          <i class="text-white bx bx-bell w-5"></i>
                          <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>E-commerce</span>
                          <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                          <li>
                             <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                          </li>
                          <li>
                             <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                          </li>
                          <li>
                             <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                          </li>
                    </ul>
                 </li>
                <li>
                    <button type="button" class="flex items-center py-2  relative justify-center hover:bg-[#192e7d] m-2" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example1">
                          <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                          <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>E-commerce</span>
                          <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <ul id="dropdown-example1" class="hidden py-2 space-y-2">
                          <li>
                             <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Products</a>
                          </li>
                          <li>
                             <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Billing</a>
                          </li>
                          <li>
                             <a href="#" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Invoice</a>
                          </li>
                    </ul>
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

                <li class="nav-link px-4 py-2  relative hover:bg-[#192e7d] m-2" >
                    <a href="#">
                        <i class='bx bx-pie-chart-alt w-5'></i>
                        <span class="text nav-text">Kinerja Siswa</span>
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
