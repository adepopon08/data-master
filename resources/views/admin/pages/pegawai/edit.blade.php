@extends('admin.layouts.master')
@section('content')
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0  text-white">Tambah Data Pegawai</h3>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-6">
                <!-- card -->
                <div class="card ">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- Tabs navs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="identitas-tab" data-bs-toggle="tab"
                                    data-bs-target="#identitas" type="button" role="tab" aria-controls="identitas"
                                    aria-selected="true">Identitas</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="domisili-tab" data-bs-toggle="tab" data-bs-target="#domisili"
                                    type="button" role="tab" aria-controls="domisili"
                                    aria-selected="false">Domisili</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="kepegawaian-tab" data-bs-toggle="tab"
                                    data-bs-target="#kepegawaian" type="button" role="tab" aria-controls="kepegawaian"
                                    aria-selected="false">Kepegawaian</button>
                            </li>

                        </ul>

                        <!-- Tabs navs -->


                        <!-- Tabs content -->
                        <!-- content -->
                        <div class="row">
                            <div class="col-md-12 mt-6">
                                <!-- card -->
                                <div class="card">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <!-- card title -->
                                        <!-- Tabs content -->
                                        <div class="tab-content" id="myTabContent">
                                            @include('admin.pages.pegawai.tab-indentitas')

                                            @include('admin.pages.pegawai.tab-domisili')

                                            @include('admin.pages.pegawai.tab-kepangkatan')

                                            @include('admin.pages.pegawai.tab-kepegawaian')

                                            @include('admin.pages.pegawai.tab-pendidikan')

                                            @include('admin.pages.pegawai.tab-tugastamb')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@push('scripts')
    <script>
        $(".provinsi").select2({
            theme: "bootstrap-5",
            width: "100%",
            placeholder: "Pilih Provinsi",
            ajax: {
                url: '/api/provinsi',
                dataType: 'json',
                delay: 500,
                processResults: function(data) {
                    let result = $.map(data, function(obj) {
                        return {
                            text: obj.provinsi,
                            id: obj.id
                        }
                    });
                    return {
                        results: result
                    };
                },
                cached: true
            }
        }).on('select2:select', function(e) {
            const selectedValue = $(this).val();
            $.ajax({
                type: 'GET',
                url: '/api/kabupaten/' + selectedValue, // Replace this with your server-side endpoint URL
                success: function(data) {
                    const formattedData = data.map(function(item) {
                        return {
                            id: item.id,
                            text: item.kabupaten
                        };
                    });

                    formattedData.unshift({
                        id: '',
                        text: "--- Silakan Pilih ---"
                    });

                    $('.kabupaten').empty();
                    $('.kecamatan').empty();
                    $('.kelurahan').empty();
                    $('#kode_pos').val("");


                    $('.kabupaten').select2({
                        theme: "bootstrap-5",
                        placeholder: "Pilih Kota / Kabupaten",
                        width: "100%",
                        data: formattedData
                    });
                },
                error: function(error) {
                    console.error('Error fetching data:', error);
                }
            });
        });


        $(".kabupaten").on('change', function() {
            const selectedValue = $(this).val();
            $.ajax({
                type: 'GET',
                url: '/api/kecamatan/' + selectedValue, // Replace this with your server-side endpoint URL
                success: function(data) {
                    const formattedData = data.map(function(item) {
                        return {
                            id: item.id,
                            text: item.kecamatan
                        };
                    });

                    formattedData.unshift({
                        id: '',
                        text: "--- Silakan Pilih ---"
                    });

                    $('.kecamatan').empty();
                    $('.kelurahan').empty();
                    $('#kode_pos').val("");


                    $('.kecamatan').select2({
                        theme: "bootstrap-5",
                        placeholder: "Pilih Kecamatan",
                        width: "100%",
                        data: formattedData
                    });
                },
                error: function(error) {
                    console.error('Error fetching data:', error);
                }
            });
        });

        $(".kecamatan").on('change', function() {
            const selectedValue = $(this).val();
            $.ajax({
                type: 'GET',
                url: '/api/kelurahan/' + selectedValue, // Replace this with your server-side endpoint URL
                success: function(data) {
                    const formattedData = data.map(function(item) {
                        return {
                            id: item.id,
                            text: item.kelurahan,
                            kode_pos: item.kode_pos,
                        };
                    });

                    formattedData.unshift({
                        id: '',
                        text: "--- Silakan Pilih ---"
                    });

                    $('.kelurahan').empty();
                    $('#kode_pos').val("");

                    $('.kelurahan').select2({
                        theme: "bootstrap-5",
                        placeholder: "Pilih Kelurahan",
                        width: "100%",
                        data: formattedData,
                        templateSelection: function(data, container) {
                            $(data.element).attr('data-kode_pos', data.kode_pos);
                            return data.text;
                        }
                    });
                },
                error: function(error) {
                    console.error('Error fetching data:', error);
                }
            });
        });

        $(".kelurahan").on('select2:select', function(e) {
            let data = e.params.data;
            // let kode_pos = $('.kelurahan').find(':Selected').attr('data-kode_pos');
            // console.log(data);
            $('#kode_pos').val(data.kode_pos);
        });
    </script>
@endpush
