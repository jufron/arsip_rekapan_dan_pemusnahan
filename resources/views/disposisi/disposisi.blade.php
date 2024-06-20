<x-layouts.dashboard title="Disposisi">
    <x-slot:head>
        <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    </x-slot:head>
    <x-slot:content>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Disposisi</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Disposisi</h6>
            </div>
            <div class="card-body">

                <a href="{{ route('disposisi.create') }}" class="btn btn-primary mt-2 mb-4 btn-lg">
                    Tambah
                </a>

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Disposisi</th  >
                                <th>Tanggal Buat</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($disposisi as $a)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $a->nama_disposisi }}</td>
                                <td>{{ $a->created_at }}</td>
                                <td>
                                    <form id="disposisi-destroy-form" action="{{ route('disposisi.destroy', $a->id) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="button" id="disposisi-destroy" class="btn btn-danger btn-circle btn-sm">
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
            const allButtonDelete = document.querySelectorAll('#disposisi-destroy');
            const formSubmit = document.querySelectorAll('#disposisi-destroy-form');
            allButtonDelete.forEach((buttonDelete, index) => {
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
                            formSubmit[index].submit();
                        }
                    })
                });
            });
        </script>

    </x-slot:script>
</x-layouts.dashboard>


