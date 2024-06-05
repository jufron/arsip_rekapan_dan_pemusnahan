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
                <h6 class="m-0 font-weight-bold text-primary">Perbaharui Arsip</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <form action="{{ route('arsip.update', $arsip) }}" method="POST" enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="no_surat">No Surat</label>
                                <input type="text" class="form-control @error('no_surat') is-invalid @enderror" id="no_surat" name="no_surat" value="{{ old('no_surat', $arsip->no_surat) }}">
                                @error('no_surat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal_surat">Tanggal Surat</label>
                                <input type="date" class="form-control @error('tanggal_surat') is-invalid @enderror" id="tanggal_surat" name="tanggal_surat" value="{{ old('tanggal_surat', $arsip->tanggal_surat) }}">
                                @error('tanggal_surat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="periha">Perihal</label>
                                <textarea class="form-control @error('perihal') is-invalid @enderror" id="perihal" name="perihal" rows="5">{{ old('perihal', $arsip->perihal) }}</textarea>
                                @error('perihal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-5">
                            <label for="disposisi_id">Disposisi</label>
                            <select class="form-control @error('disposisi_id') is-invalid @enderror" id="disposisi_id" name="disposisi_id">
                                <option disabled selected>Pilih</option>
                                @foreach ($disposisi as $dis)
                                <option @if ($arsip->disposisi_id == $dis->id) selected @endif value="{{ $dis->id }}">{{ $dis->nama_disposisi }}</option>
                                @endforeach
                            </select>
                            @error('disposisi_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                    </div>
                    <div class="col-md-6 my-4">
                        <input type="file" id="" name="file" @diskExists($arsip->file) data-file="{{ asset("storage/". $arsip->file) }}" @enddiskExists />
                        <input type="hidden" name="file_path" value="">
                    </div>

                    <button class="btn btn-success mt-5 mb-4 btn-lg">
                        Perbaharui
                    </button>
                </form>
            </div>
        </div>
    </x-slot:content>
    <x-slot:script>
        <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
        <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
        <script src="https://unpkg.com/filepond-plugin-pdf-preview/dist/filepond-plugin-pdf-preview.min.js"></script>
        <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>

        <script>
            // Get a reference to the file input element
            const inputElement = document.querySelector('input[type="file"]');
            let filePath = null;
            // register plugin

            FilePond.registerPlugin(
                FilePondPluginFileValidateSize,
                FilePondPluginFileValidateType,
                FilePondPluginPdfPreview,
            );

            // Create a FilePond instance
            const pond = FilePond.create(inputElement, {
                acceptedFileTypes: ['application/pdf'], // Validasi tipe file
                maxFileSize: '1mb', // Validasi ukuran file
                labelFileTypeNotAllowed: 'Tipe file tidak diijinkan',
                labelMaxFileSizeExceeded: 'Tipe file tidak boleh lebih dari 1MB',
                server: {
                    process : {
                        url: "{{ route('filepond.upload.post') }}",
                        method: 'POST',
                        withCredentials: false,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        timeout: 7000,
                        onload: (response) => {
                            JSON.parse(response).path;
                            filePath = JSON.parse(response).path;

                            const parsedResponse = JSON.parse(response);
                            document.querySelector('input[name="file_path"]').value = parsedResponse.path;
                        },
                        onerror: null,
                        ondata: null,
                    },
                    revert: (uniqueFileId, load, error) => {
                        console.log(filePath);

                        fetch(`{{ route('filepond.upload.delete') }}`, {
                            method: 'DELETE',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            },
                            body: JSON.stringify({ file: filePath })
                        }).then(response => {
                            if (response.ok) {
                                load();
                            } else {
                                error('File could not be deleted');
                            }
                        }).catch(() => {
                            error('File could not be deleted');
                        });

                        load();
                    },
                    // onload: (response) => {
                    //     const parsedResponse = JSON.parse(response);
                    //     document.querySelector('input[name="file_path"]').value = parsedResponse.path;
                    //     filePath = parsedResponse.path;
                    // },
                }
            });
            if (inputElement.getAttribute('data-file')) {
                const exsistingFile = inputElement.getAttribute('data-file');
                // const file = new File([exsistingFile], 'existing_file.pdf', { type: 'application/pdf' });
                // pond.addFile(file);
            }
        </script>
    </x-slot:script>
</x-layouts.dashboard>
