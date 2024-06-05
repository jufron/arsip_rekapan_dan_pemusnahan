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

    {{-- ?  script --}}
    {{ $script ?? null }}
    {{-- ? end script --}}
</body>
</html>
