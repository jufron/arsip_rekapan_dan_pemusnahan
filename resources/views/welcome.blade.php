<x-layouts.auth title="beranda">
    <x-slot:head>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        {{--? fontawesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </x-slot:head>

    <x-slot:content>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Arsip</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="#keunggulan">Keunggulan</a></li>
                        @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                        @endauth
                        @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead" id="beranda">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Pengarsipan Berkas Perkara dan Rekapitulasi Dokumen
                        </h1>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <h5 class="text-white-75 my-5">Pengadilan Negeri Kupang Kelas IA!</h5>
                        @auth
                        <a class="btn btn-info btn-xl" href="{{ route('dashboard') }}">Dashboard</a>
                        @endauth
                        @guest
                        <a class="btn btn-info btn-xl" href="{{ route('login') }}">Login</a>
                        @endguest
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Tentang</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4 lh-2">
                            Kami di Pengadilan Negeri Kupang Kelas IA berkomitmen untuk menyediakan solusi lengkap dalam pengelolaan arsip perkara, perekapan dokumen, dan pemusnahan arsip yang efisien dan efektif. Dengan mengikuti standar hukum yang berlaku, kami memastikan bahwa setiap proses dijalankan dengan teknologi digital terkini. Hal ini menjadikan semua tahapan pengelolaan lebih cepat, aman, dan terorganisir dengan baik. Kami bangga dapat melayani masyarakat dengan integritas dan profesionalisme tinggi dalam setiap aspek pengelolaan arsip dan dokumen.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="keunggulan">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Keunggulan</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2">
                                <i class="fa-solid fa-book fa-4x"></i>
                            </div>
                            <h3 class="h4 mb-2">Pengelolaan Arsip Digital</h3>
                            <p class="text-muted mb-0">
                                Dengan sistem pengelolaan arsip digital yang canggih, kami memastikan setiap dokumen dan berkas perkara tersimpan dengan aman dan mudah diakses. Teknologi ini memudahkan pencarian dan penelusuran arsip dengan cepat, mengurangi waktu dan usaha yang dibutuhkan untuk menemukan informasi yang diperlukan.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2">
                                <i class="fa-solid fa-globe fa-4x"></i>
                            </div>
                            <h3 class="h4 mb-2">Perekapan Dokumen secara online</h3>
                            <p class="text-muted mb-0">
                                Fitur perekapan dokumen otomatis kami dirancang untuk meningkatkan efisiensi dan akurasi dalam pencatatan data. Setiap dokumen yang diunggah akan secara otomatis direkap dan disimpan dalam sistem kami, sehingga mengurangi kesalahan manusia dan memastikan data selalu up-to-date.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2">
                                <i class="fa-solid fa-shield-halved fa-4x"></i>
                            </div>
                            <h3 class="h4 mb-2">Keamanan Data</h3>
                            <p class="text-muted mb-0">
                                Keamanan data adalah prioritas utama kami. Dengan enkripsi data yang kuat dan protokol keamanan terbaru, kami menjamin bahwa semua informasi yang tersimpan di sistem kami terlindungi dari akses yang tidak sah. Kepercayaan Anda adalah yang terpenting bagi kami.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2">
                                <i class="fa-solid fa-trash fa-4x"></i>
                            </div>
                            <h3 class="h4 mb-2">Pemusnahan Arsip yang Efektif</h3>
                            <p class="text-muted mb-0">
                                Kami menyediakan layanan pemusnahan arsip yang sesuai dengan standar hukum yang berlaku. Proses pemusnahan dilakukan dengan metode yang ramah lingkungan dan aman, memastikan bahwa data sensitif dihapus secara permanen dan tidak dapat dipulihkan kembali.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2024 - Arsip</div></div>
        </footer>
    </x-slot:content>

    <x-slot:script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>

        {{-- ? fontawesome --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </x-slot:script>
</x-layouts.auth>
