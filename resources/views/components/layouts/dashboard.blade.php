<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'arsip') }} | {{ $title }} </title>

    {{-- ? fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    {{-- ? head --}}
    {{ $head ?? null }}
    {{-- ? end head  --}}
</head>
<body id="page-top">

        {{--? Page Wrapper --}}
        <div id="wrapper">

            {{--? Sidebar --}}
            <x-dashboard.sidebar />
            {{--? End of Sidebar --}}

            {{-- ? Content Wrapper --}}
            <div id="content-wrapper" class="d-flex flex-column">

                {{-- ? Main Content --}}
                <div id="content">

                    {{--? Topbar --}}
                    <x-dashboard.topbar />
                    {{-- ? end topbar --}}

                    {{--? Begin Page Content --}}
                    <div class="container-fluid">

                        {{-- ? content --}}
                        {{ $content }}
                        {{-- ? end content --}}
                    </div>
                    {{-- ?  end container-fluid--}}

                </div>
                {{-- ? End of Main Content --}}

                {{-- ? footer --}}
                <x-dashboard.footer />
                {{-- ? end footer --}}

            </div>
            {{-- ? end End of Content Wrapper --}}

        </div>
        {{-- ? end of Page Wrapper --}}

    {{-- ? scroll to top --}}
    <x-dashboard.scroll-to-top />

    {{-- ? logout modal --}}
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Apakah anda yakin ingin keluar</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                        <button class="btn btn-danger" type="submit">Logout</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- ? modal search --}}
    <div class="modal fade" id="mocalSearch" tabindex="-1" aria-labelledby="modalSearchLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalSearchLabel">Hasil Pencarian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal-body-search">

            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- ? script fontawesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- ? Bootstrap core JavaScript --}}
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    {{--? Core plugin JavaScript --}}
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    {{-- ? Custom scripts for all pages --}}
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <script>
        const urlSearch = `{{ route('arsip.search.data') }}`;
        const buttonSearchDekstop = document.getElementById('button-search-dekstop');
        const buttonSearchMobile = document.getElementById('button-search-mobile');
        const modalBodySearch = document.getElementById('modal-body-search');

        const inputSearchDekstop = document.getElementById('search-input-dekstop');
        const inputSearchMobile = document.getElementById('search-input-mobile');

        function getDataInput (e) {
            let search = '';

            if (inputSearchDekstop.value !== '') {
                search = inputSearchDekstop.value;
            }

            if (inputSearchMobile.value !== '') {
                search = inputSearchMobile.value;
            }

            if (search === '') {
                modalBodySearch.innerHTML = `<p class="text-center"> Data Tidak Ada</p>`;
            } else {
                let url = `${urlSearch}?no_surat=${search}`;
                loading(true);

                fetch(url)
                    .then(response => response.json())
                    .then(data => {
                        setTimeout(() => {
                            renderHTML(data);
                        }, 2000);
                    })
                    .catch(err => console.log(err));
            }

        }

        function renderHTML(response) {
            const { data, status } = response;
            let element = '';
            loading(false);

            if (data.length === 0) {
                element += `<p class="text-center"> Data Tidak Ada</p>`;
            } else {
                element += `
                <div class="table-responsive mt-4">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Surat</th>
                                <th>Tanggal Surat</th>
                                <th>Perihal</th>
                                <th>Disposisi</th>
                                <th>Tahun</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>No Surat</th>
                                <th>Tanggal Surat</th>
                                <th>Perihal</th>
                                <th>Disposisi</th>
                                <th>Tahun</th>
                                <th>status</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            ${loopData(data)}
                        </tbody>
                    </table>
                </div>
                `;
            }

            modalBodySearch.innerHTML = element;
        }

        function loopData (data) {
            let element = ``;
            let nomor = 1;

            data.forEach(d => {
                element += `<tr>
                                <td>${nomor++}</td>
                                <td>${d.no_surat}</td>
                                <td>${d.tanggal_surat}</td>
                                <td>${d.perihal}</td>
                                <td>${d.nama_disposisi}</td>
                                <td>${d.tahun}</td>
                                <td>
                                    ${d.deleted_at === `Belum Dihapus`
                                        ? `<span class="p-2 badge badge-success">${d.deleted_at}</span>`
                                        : `<span class="p-2 badge badge-danger">${d.deleted_at}</span>`
                                    }
                                </td>
                            </tr>
                        `;
            });
            return element;
        }

        function loading(state) {
            let element = `
            <div class="text-center">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            `;
            if (state) {
                modalBodySearch.innerHTML = element;
            }
        }

        buttonSearchDekstop.addEventListener('click', getDataInput);
        buttonSearchMobile.addEventListener('click', getDataInput)
    </script>

    {{-- ?  script --}}
    {{ $script ?? null }}
    {{-- ? end script --}}
</body>
</html>
