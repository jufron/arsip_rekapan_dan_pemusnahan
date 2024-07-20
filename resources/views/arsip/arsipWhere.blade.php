<x-layouts.dashboard title="Dashboard">
    <x-slot:head>
        <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    </x-slot:head>
    <x-slot:content>
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Arsip Berdasarkan
            @if (request()->query('tahun'))
                tahun : {{ $where }}
            @endif

            @if (request()->query('disposisi'))
                Disposisi : {{ $where }}
            @endif

            @if ($where === 'rekapan_&_pemusnahan')
                {{ $title }}
            @endif

            @if ($where === 'arsip_pemusnahan')
                {{ $title }}
            @endif

            @if ($where === 'arsip_date_now')
                {{ $title }}
            @endif

            @if ($where === 'arsip')
                {{ $title }}
            @endif
        </h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Daftar Arsip berdasarkan
                    @if (request()->query('tahun'))
                        tahun : {{ $where }}
                    @endif
                    @if (request()->query('disposisi'))
                        Disposisi : {{ $where }}
                    @endif
                    @if ($where === 'rekapan_&_pemusnahan')
                        {{ $title }}
                    @endif
                    @if ($where === 'arsip_pemusnahan')
                        {{ $title }}
                    @endif
                    @if ($where === 'arsip_date_now')
                        {{ $title }}
                    @endif
                    @if ($where === 'arsip')
                        {{ $title }}
                    @endif
                </h6>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Surat</th>
                                <th>Tanggal Surat</th>
                                <th>Perihal</th>
                                <th>Disposisi</th>
                                <th>File</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>No Surat</th>
                                <th>Tanggal Surat</th>
                                <th>Perihal</th>
                                <th>Disposisi</th>
                                <th>File</th>
                                <th>aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($arsip as $a)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $a->no_surat }}</td>
                                <td>{{ $a->tanggal_surat }}</td>
                                <td>{{ $a->perihal }}</td>
                                <td>{{ $a->disposisi->nama_disposisi }}</td>
                                <td>
                                    @if ($a->file)
                                    <a href="{{ route('arsip.donwload', $a) }}" target="_blank" class="btn btn-success btn-circle btn-sm">
                                        <i class="fa-solid fa-download"></i>
                                    </a>
                                    @else
                                    File Tidak ada
                                    @endif
                                    {{-- <a href="{{ route('arsip.show-file', $a) }}" target="_blank" class="btn btn-info btn-circle btn-sm">
                                        <i class="fa-solid fa-file-lines"></i>
                                    </a> --}}
                                </td>
                                <td>
                                    <form id="arsip-destroy-form" action="{{ route('arsip.destroy', $a) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{ route('arsip.show', $a) }}" class="btn btn-info btn-circle btn-sm">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                        <a href="{{ route('arsip.edit', $a) }}" class="btn btn-warning btn-circle btn-sm">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </a>
                                        <button type="button" id="arsip-destroy" class="btn btn-danger btn-circle btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </x-slot:content>
    <x-slot:script>
        <!-- Page level plugins -->
        <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Page level custom scripts -->
        <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

        <script>
            const allButtonDelete = document.querySelectorAll('#arsip-destroy');
            allButtonDelete.forEach(buttonDelete => {
                buttonDelete.addEventListener('click', function(event) {
                    event.preventDefault();
                    Swal.fire({
                        title: 'Hapus Data',
                        text: 'anda yakin ingin menghapus data tersebut, data tersebut akan masuk di tempat pemusnahan',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#891313',
                        cancelButtonColor: '#635DD3',
                        confirmButtonText: 'Hapus',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('arsip-destroy-form').submit();
                        }
                    })
                });
            });
        </script>

    </x-slot:script>
</x-layouts.dashboard>


