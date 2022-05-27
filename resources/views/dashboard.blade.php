@extends('layout.app')
@section('title', 'Dashboard')

@Section('content')
<div class="mx-4">
    <div class="text-center justify-between mt-16">

        <div id="controls-carousel" class="relative" data-carousel="static">

            <div class="overflow-hidden relative h-48 rounded-lg sm:h-64 xl:h-80 2xl:h-96">

                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
                    data-carousel-item="">
                    <img src="{{ asset('image/smk-wikrama.jpg') }}"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>

                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                    data-carousel-item="active">
                    <img src="{{ asset('image/2. Gedung 2.jpg') }}"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>

                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10"
                    data-carousel-item="">
                    <img src="{{ asset('image/maxresdefault.jpg') }}"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                </div>
            </div>

            <button type="button"
                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-prev="">
                <span
                    class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button"
                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-next="">
                <span
                    class="inline-flex justify-center items-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>


    <div class="grid grid-cols-3 text-center gap-2 mt-4 pb-8">
        <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $murid }}</h5>
            </a>
            <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">Data Murid</p>
        </div>

        <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $guru }}</h5>
            </a>
            <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">Data Guru</p>
        </div>

        <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $sim }}</h5>
            </a>
            <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">Data SIM</p>
        </div>

        <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $razia }}</h5>
            </a>
            <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">Data Razia</p>
        </div>
        <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $temuan }}</h5>
            </a>
            <p class="mb-3 font-bold text-gray-700 dark:text-gray-400">Data Temuan</p>
        </div>


    </div>
    {{-- <div id="container" class="relative"></div> --}}
</div>

@endsection

@section('script')
    <script>
        const dayNames = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const dates = ['2022-03-01','2022-03-02','2022-03-03','2022-03-04','2022-03-05','2022-03-06'];
        let days = [];
        dates.forEach((val, index) => {
            let date = new Date(val);
            days.push(date);
            days[index] = dayNames[date.getDay()];
        });
    </script>

    <script>
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Kehadiran Siswa'
            },
            subtitle: {
                text: 'Source: WorldClimate.com'
            },
            xAxis: {
                categories: days,
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Siswa'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Hadir',
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0]

            }, {
                name: 'Sakit',
                data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5]

            }, {
                name: 'Izin',
                data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3]

            }, {
                name: 'Alpa',
                data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5]

            }]
        });
    </script>
@endsection
