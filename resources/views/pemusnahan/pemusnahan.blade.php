<x-layouts.dashboard title="Dashboard">
    <x-slot:head>
        <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    </x-slot:head>
    <x-slot:content>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Pemusnahan</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Arsip pemusnahan</h6>
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
                                <td class="d-flex gap-x-2">
                                    <form id="pemusnahan-restore-form" action="{{ route('pemusnahan.restore', $a) }}" method="post" class="mx-1">
                                        @csrf
                                        <a href="{{ route('pemusnahan.show', $a) }}" class="btn btn-info btn-circle btn-sm">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                        <button type="button" id="prmusnahan-restore" class="btn btn-success btn-circle btn-sm mx-2">
                                            <i class="fa-solid fa-arrows-rotate"></i>
                                        </button>
                                    </form>
                                    <form id="arsip-destroy-form" action="{{ route('pemusnahan.destroy', $a) }}" method="post" class="mx-1">
                                        @method('delete')
                                        @csrf
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
            const formDelete = document.querySelectorAll('#arsip-destroy-form');

            const allButtonRestore = document.querySelectorAll('#prmusnahan-restore');
            const formRestore = document.querySelectorAll('#pemusnahan-restore-form');

            allButtonDelete.forEach((buttonDelete, index) => {
                buttonDelete.addEventListener('click', function(event) {
                    event.preventDefault();
                    Swal.fire({
                        title: 'Hapus Data',
                        text: 'anda yakin ingin menghapus data tersebut, data tersebut akan dihapus secara permanen',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#891313',
                        cancelButtonColor: '#635DD3',
                        confirmButtonText: 'Hapus',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            formDelete[index].submit();
                        }
                    });
                });
            });

            allButtonRestore.forEach((buttonRestore, index) => {
                buttonRestore.addEventListener('click', function (even) {
                    even.preventDefault();
                    Swal.fire({
                        title: 'Restore Data',
                        text: 'anda yakin ingin mengembalikan data tersebut?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#099642',
                        cancelButtonColor: '#635DD3',
                        confirmButtonText: 'Ya',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            formRestore[index].submit();
                        }
                    });
                });
            });
        </script>

    </x-slot:script>
</x-layouts.dashboard>


