@extends('layouts.back-end.app')

@section('css')
@endsection

@section('content')

    <main>
        <div class="container-fluid">
            <div class="row  ">
                <div class="col-12">
                    <h1>Dashboard </h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>



                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card mb-4 progress-banner">
                                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-clock mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">5 Posts</p>
                                            <p class="text-small text-white">Pending for publish</p>
                                        </div>
                                    </div>

                                    <div>
                                        <div role="progressbar"
                                             class="progress-bar-circle progress-bar-banner position-relative" data-color="white"
                                             data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="5" aria-valuemax="12"
                                             data-show-percent="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-4 progress-banner">
                                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-male mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">4 Users</p>
                                            <p class="text-small text-white">On approval process</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div role="progressbar"
                                             class="progress-bar-circle progress-bar-banner position-relative" data-color="white"
                                             data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="4" aria-valuemax="6"
                                             data-show-percent="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card mb-4 progress-banner">
                                <a href="#" class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-bell mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">8 Alerts</p>
                                            <p class="text-small text-white">Waiting for notice</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div role="progressbar"
                                             class="progress-bar-circle progress-bar-banner position-relative" data-color="white"
                                             data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="8" aria-valuemax="10"
                                             data-show-percent="false">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="card mb-4 progress-banner">
                                <a href="#" class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-bell mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">8 Alerts</p>
                                            <p class="text-small text-white">Waiting for notice</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div role="progressbar"
                                             class="progress-bar-circle progress-bar-banner position-relative" data-color="white"
                                             data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="8" aria-valuemax="10"
                                             data-show-percent="false">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>











                </div>
            </div>
        </div>
    </main>

@endsection

@section('scripts')

@endsection
