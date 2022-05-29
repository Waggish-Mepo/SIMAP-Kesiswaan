@extends('layout.app')
@section('title', 'Dashboard')

@Section('content')
<div class="mx-4">
    <div class="grid grid-cols-4 text-center gap-4 mt-4 pb-8">
        <div class="p-6 bg-blue-500 rounded-md border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <p class="mb-3 font-bold text-white dark:text-gray-400">Data Murid</p>
            <p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">{{ $murid }}</h5>
            </p>
        </div>

        <div class="p-6 bg-green-500 rounded-md border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <p class="mb-3 font-bold text-white dark:text-gray-400">Data Guru</p>
            <p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">{{ $guru }}</h5>
            </p>
        </div>

        <div class="p-6 bg-yellow-300 rounded-md border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <p class="mb-3 font-bold text-white dark:text-gray-400">Data Pembimbing Siswa</p>
            <p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">{{ $sim }}</h5>
            </p>
        </div>

        <div class="p-6 bg-orange-400 rounded-md border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <p class="mb-3 font-bold text-white dark:text-gray-400">Data Admin</p>
            <p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-white dark:text-white">{{ $razia }}</h5>
            </p>
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
