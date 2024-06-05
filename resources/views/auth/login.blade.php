<x-layouts.auth title="login">
    <x-slot:head>
        <!-- Custom fonts for this template-->
        <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    </x-slot:head>

    <x-slot:content>
        <div class="container my-5">
            <div class="row flex justify-content-center align-items-center">
                <div class="col-xl-10 col-lg-12 col-md-9 my-5">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block">
                                    <img class="img-fluid my-5" src="{{ asset('svg/User-Account-Sign-up.svg') }}" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5 mt-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Login!</h1>
                                        </div>
                                        <form
                                            method="POST"
                                            role="form" action="{{ route('login') }}"
                                            class="user"
                                            >
                                            @csrf
                                            <div class="form-group">
                                                <input
                                                    type="email"
                                                    class="form-control form-control-user @error('email') is-invalid @enderror"
                                                    id="email"
                                                    aria-describedby="emailHelp"
                                                    name="email"
                                                    value="{{ old('email') }}"
                                                    placeholder="Enter Email Address...">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input
                                                    type="password"
                                                    class="form-control form-control-user @error('password') is-invalid @enderror"
                                                    id="password"
                                                    name="password"
                                                    placeholder="Password">
                                                @error('password')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="my-4 btn btn-primary btn-user btn-block">
                                                Login
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </x-slot:content>

    <x-slot:script>
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
    </x-slot:script>
</x-layouts.app>
