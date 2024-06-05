<x-layouts.dashboard title="Dashboard">
    <x-slot:head>

    </x-slot:head>

    <x-slot:content>
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Selamat Datang {{ auth()->user()->name }}</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="img-responsive">
                    <img width="100%" height="300px" src="{{ asset('svg/Working-on-a-project.svg') }}" alt="">
                </div>
            </div>
            <div class="col-xl-6 row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-primary text-uppercase mb-1">
                                         Rekapan & Pemusnahan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_rekapan_pemusnahan }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-file-invoice fa-2xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-danger text-uppercase mb-1">
                                        Arsip Pemusnahan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $arsip_pemusnahan }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-file-excel fa-2xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-info text-uppercase mb-1">Arsip Masuk ({{ $mounth }})
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $one_mount_latest }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-file-invoice fa-2xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pending Requests Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-warning text-uppercase mb-1">
                                        Total Arsip Rekapan
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $arsip_perekapan }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-file-invoice fa-2xl"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Area Chart diagram -->
            {{-- <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- area chart bar --}}
            <div class="col-xl-5 col-lg-6">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Arsip 5 Tahun terakhir</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas width="100%" height="70%" id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-4">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Disposisi</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas width="100%" height="100%" id="myPieChart"></canvas>
                        </div>
                        <div class="mt-4 text-center small" id="pie-chart-information">

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Rekapan & Pemusnahan</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas width="100%" height="100%" id="myAreaChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </x-slot:content>

    <x-slot:script>
        <!-- Page level plugins -->
        {{-- <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Page level custom scripts -->
        {{-- <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script> --}}
        <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
        <script src="{{ asset('js/demo/chart-bar.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/tinycolor2@1.6.0/cjs/tinycolor.min.js"></script>

        <script type="module" src="{{ asset('js/demo/chart-bar.js') }}"></script>

        <script>
            const urlGetChartPie = `{{ route('chart.pie.get') }}`;
            const urlChartBar = `{{ route('chart.bar1.get',) }}`;
            const urlChartBarYears =  `{{ route('chart.bar.get',) }}`;
            const urlGetArsipWhereYear = `{{ route('arsip.get.tahun') }}`;
            const urlRekapan = `{{ route('arsip.index') }}`;
            const urlPemusnahan = `{{ route('pemusnahan.index') }}`;

            const color = tinycolor("red");
            let dynamicColor = [];
            let dynemicColorHover = [];

            // Fungsi untuk menghasilkan warna acak
            function randomColor() {
                return tinycolor.random().toRgbString();
            }

            function fetchData(url, callback) {
                fetch(url)
                .then(response => response.json())
                .then(data => {
                    callback(data);
                })
                .catch(error => console.error( error ));
            }

            //  penggunaan fetchData
            fetchData(urlGetChartPie, function(data) {
                const { disposisi } = data;

                let namaDisposisi = [];
                let cuntDataDisposisi = [];

                disposisi.forEach(d => {
                    namaDisposisi.push(d.nama_disposisi);
                });
                disposisi.forEach(d => {
                    cuntDataDisposisi.push(d.arsip_count);
                });

                for (let i = 0; i < namaDisposisi.length; i++) {
                    dynamicColor.push(randomColor());
                }

                chartPieDemo({
                    labels: namaDisposisi,
                    data:  cuntDataDisposisi,
                    backgroundColor: dynamicColor,
                    options: {
                        onClick: function (ev, elements) {
                            if (elements.length > 0) {
                            const clickedElement = elements[0]; // Get the first clicked element
                            const index = clickedElement.index;
                            const data = this.data.labels[index];

                            // Build and navigate to URL with label (assuming newpage.html):
                            const query = `?disposisi=${data}`;
                            location.href = `${urlGetArsipWhereYear}${query}`;
                            }
                        }
                    }
                });
            });

            // * fetch data rekapan & pemusanahan
            fetchData(urlChartBar, function (data) {
                const {arsipRekapan, arsipPemusnahan} = data;
                chartBar({
                    element : document.getElementById("myAreaChart2"),
                    data: [arsipRekapan, arsipPemusnahan],
                    labels: ['Rekapan', 'Pemusnahan'],
                    backgroundColor: [
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                    ],
                    backgroundColor: [
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                    ],
                    options: {
                        onClick: function (ev, elements) {
                            if (elements.length > 0) {
                                const clickedElement = elements[0]; // Get the first clicked element
                                const index = clickedElement.index;
                                const data = this.data.labels[index];

                                // Build and navigate to URL with label (assuming newpage.html):
                                const query = `?tahun=${data}`;
                                if (data === 'Rekapan') {
                                    // rekapan
                                    location.href = urlRekapan;
                                } else if (data === 'Pemusnahan') {
                                    // pemusnahan
                                    location.href = urlPemusnahan;
                                } else {
                                    console.error('terjadi kesalahan');
                                }
                            }
                        }
                    }
                });
            })

            // * fetch data arsip berdasarkan 5 tahun
            fetchData(urlChartBarYears, function (data) {
                const response = data.tahun;
                const jumlahTahun = {};

                response.forEach(tahun => {
                    // Jika sudah ada, tambahkan 1 ke jumlah yang sudah ada
                    jumlahTahun[tahun] = (jumlahTahun[tahun] || 0) + 1;
                });

                // Mendapatkan tahun saat ini
                const currentYear = new Date().getFullYear();
                // Menghasilkan array label tahun dengan pergeseran 5 tahun ke belakang
                const dataLabels = [];
                for (let i = 0; i < 5; i++) {
                    dataLabels.push((currentYear - i).toString());
                }

                const newData = dataLabels.map(tahun => {
                    return {
                        waktu: tahun,
                        totalData: jumlahTahun[tahun] || 0
                    };
                });

                const countYear = [];
                newData.forEach(data => {
                    countYear.push(data.totalData)
                });

                chartBar({
                    element : document.getElementById("myAreaChart"),
                    labels: dataLabels, // * secara dinamis juga label geser 5 tahun terakhir
                    data: countYear, // * 5 tahun data terkahir secara dinami akan geser
                    options: {
                        onClick: function (ev, elements) {
                            if (elements.length > 0) {
                            const clickedElement = elements[0]; // Get the first clicked element
                            const index = clickedElement.index;
                            const data = this.data.labels[index];

                            // Build and navigate to URL with label (assuming newpage.html):
                            const query = `?tahun=${data}`;
                            location.href = `${urlGetArsipWhereYear}${query}`;
                            }
                        }
                    }
                });
            });

        </script>
    </x-slot:script>
</x-layouts.dashboard>
