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
                        <form action="{{ route('admin.pegawai.store') }}" method="POST">
                            @csrf
                            <!-- Tabs navs -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="identitas-tab" data-bs-toggle="tab"
                                        data-bs-target="#identitas" type="button" role="tab" aria-controls="identitas"
                                        aria-selected="true">Identitas</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="domisili-tab" data-bs-toggle="tab"
                                        data-bs-target="#domisili" type="button" role="tab" aria-controls="domisili"
                                        aria-selected="false">Domisili</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="kepegawaian-tab" data-bs-toggle="tab"
                                        data-bs-target="#kepegawaian" type="button" role="tab"
                                        aria-controls="kepegawaian" aria-selected="false">Kepegawaian</button>
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
