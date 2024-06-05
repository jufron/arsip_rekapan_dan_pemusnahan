<x-layouts.dashboard title="Dashboard">
    <x-slot:head>
    </x-slot:head>

    <x-slot:content>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Arsip</h1>
        <!-- Dropdown Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Arsip Detail</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-4 font-weight-bold">
                                No Arsip
                            </div>
                            <div class="col-md-8">
                                {{ $arsip->no_surat }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-4 font-weight-bold">
                                Tanggal Surat
                            </div>
                            <div class="col-md-8">
                                {{ $arsip->tanggal_surat }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-4 font-weight-bold">
                                Perihal
                            </div>
                            <div class="col-md-8">
                                {{ $arsip->perihal }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-4 font-weight-bold">
                                Disposisi
                            </div>
                            <div class="col-md-8">
                                {{ $arsip->disposisi->nama_disposisi }}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-4 font-weight-bold">
                                File
                            </div>
                            <div class="col-md-8">
                                @if ($arsip->file)
                                <a href="#" class="btn btn-success btn-sm btn-icon-split my-1">
                                    <span class="icon">
                                        <i class="fa-solid fa-download"></i>
                                    </span>
                                    <span class="text">Download</span>
                                </a>
                                @else
                                Tidak Ada File
                                @endif
                                {{-- <a href="#" class="btn btn-info btn-sm btn-icon-split my-1">
                                    <span class="icon">
                                        <i class="fa-solid fa-file-lines"></i>
                                    </span>
                                    <span class="text">Preview</span>
                                </a> --}}
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-4 font-weight-bold">
                                Tahun
                            </div>
                            <div class="col-md-8">
                                {{ $arsip->tahun }}
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </x-slot:content>

    <x-slot:script>
    </x-slot:script>
</x-layouts.dashboard>
