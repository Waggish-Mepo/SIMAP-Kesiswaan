<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{ asset('image/logo.png') }}" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Kesiswaan</span>
                </div>
            </div>
            <div class="menu-bar pt-4">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a class="toggle" href="#">
                            <i class='bx bx-menu icon'></i>
                            <span class="text nav-text">Menu</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bar-chart-alt-2 icon'></i>
                            <span class="text nav-text">Absensi Siswa</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Rekap Barang</span>
                        </a>
                        <i class='bx bx-chevron-down drop-icon'></i>
                        <ul class="dropdown">
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                        </ul>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">Kinerja Siswa</span>
                        </a>
                        <i class='bx bx-chevron-down drop-icon'></i>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">Input SIM</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Wallets</span>
                        </a>
                    </li>
                </ul>
            </div>
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
