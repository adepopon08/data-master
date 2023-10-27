@extends('admin.layouts.master')
@section('content')
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0  text-white">Data Pegawai</h3>
                        </div>
                        <div>
                            <a href="{{ route('admin.pegawai.create') }}" class="btn btn-white">Tambah Pegawai</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-6">
                <!-- card -->
                <div class="card ">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- striped rows -->
                        <x-alert />

                        <div class="table-responsive">
                            <table class="table table-striped" id="datatable-server">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">NIP</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Jenis PTK</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            var dt = $('#datatable-server').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.pegawai.lists') }}",
                language: {
                    processing: "Memuat...  ",
                },
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'nip',
                        name: 'a.nip'
                    },
                    {
                        data: 'nama',
                        name: 'a.nama'
                    },
                    {
                        data: 'jenis_kelamin',
                        name: 'a.jenis_kelamin'
                    },
                    {
                        data: 'jenis_ptk',
                        name: 'b.jenis_ptk'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    }
                ]
            });
        });
    </script>
@endpush
