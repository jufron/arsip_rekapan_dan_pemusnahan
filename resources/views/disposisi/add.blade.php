<x-layouts.dashboard title="Dashboard">
    <x-slot:head>
        <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    </x-slot:head>
    <x-slot:content>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Arsip</h1>

        <!-- Dropdown Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Arsip Baru</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                {{-- @dump($errors) --}}
                <form action="{{ route('disposisi.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_disposisi">Nama Disposisi</label>
                                <input type="text" class="form-control @error('nama_disposisi') is-invalid @enderror" id="nama_disposisi" name="nama_disposisi" value="{{ old('nama_disposisi') }}">
                                @error('nama_disposisi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success mt-5 mb-4 btn-lg">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </x-slot:content>
    <x-slot:script>

    </x-slot:script>
</x-layouts.dashboard>
