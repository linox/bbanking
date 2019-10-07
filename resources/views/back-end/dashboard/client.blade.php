@extends('layouts.back-end.app')

@section('css')
    <link rel="stylesheet" href="{{url('assets/css/vendor/dataTables.bootstrap4.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/vendor/datatables.responsive.bootstrap4.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/vendor/select2.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/vendor/select2-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/vendor/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/vendor/owl.carousel.min.css')}}" />
@endsection

@section('content')

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Dashboard</h1>
                    <div class="separator mb-5"></div>
                </div>

                <!-- begin:Destaques -->
                <div class="col-lg-12 col-xl-12">
                    <div class="row">
                        <div class="col-lg-4">
                        <div class="card mb-4 progress-banner">
                            <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                <div>
                                    <i class="iconsminds-coins mr-2 text-white align-text-bottom d-inline-block"></i>
                                    <div>
                                        <p class="lead text-white">R$ 0.00</p>
                                        <p class="text-small text-white">Meu Saldo</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-add mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">R$ 0.00</p>
                                            <p class="text-small text-white">Entrada</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <a href="#" class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-remove mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">R$ 0.00</p>
                                            <p class="text-small text-white">Saída</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div role="progressbar" class="progress-bar-circle progress-bar-banner position-relative" data-color="white"
                                             data-trail-color="rgba(255,255,255,0.2)" aria-valuenow="0" aria-valuemax="0" data-show-percent="true">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end:Destaques -->

                <!-- begin:Movimentações -->
                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Últimas movimentações</h5>
                            <table class="data-table data-table-standard responsive nowrap" data-order="[[ 1, &quot;desc&quot; ]]">
                                <thead>
                                <tr>
                                    <th>Data</th>
                                    <th>Valor</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--- begin:loop -->
{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        <p class="list-item-heading">01/10/2019<br/><small>Descrição</small></p>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <p class="text-muted">R$ 100,00</p>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
                                <!--- end:loop -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart" style="min-height: 720px !important;">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline">Movimentações</h5>
                                </div>
                            </div>
                            <div class="btn-group float-right mt-2 float-none-xs">
                                <button class="btn btn-outline-secondary btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Este mês
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Última semana</a>
                                    <a class="dropdown-item" href="#">Último mês</a>
                                </div>
                            </div>
                        </div>
                        <div class="chart card-body pt-0">
                            <canvas id="conversionChart_"></canvas>
                        </div>
                    </div>
                </div>
                <!-- end:Movimentações -->


                <div class="col-lg-12 col-xl-12">

{{--                    <div class="icon-cards-row">--}}
{{--                        <div class="owl-container">--}}
{{--                            <div class="owl-carousel dashboard-numbers">--}}
{{--                                <a href="#" class="card">--}}
{{--                                    <div class="card-body text-center">--}}
{{--                                        <i class="iconsminds-receipt-4"></i>--}}
{{--                                        <p class="card-text mb-0">Contrato 001</p>--}}
{{--                                        <p class="lead text-center">R$ 20.000,00</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="card">--}}
{{--                                    <div class="card-body text-center">--}}
{{--                                        <i class="iconsminds-receipt-4"></i>--}}
{{--                                        <p class="card-text mb-0">Contrato 002</p>--}}
{{--                                        <p class="lead text-center">R$ 10.000,00</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}

{{--                                <a href="#" class="card">--}}
{{--                                    <div class="card-body text-center">--}}
{{--                                        <i class="iconsminds-receipt-4"></i>--}}
{{--                                        <p class="card-text mb-0">Contrato 003</p>--}}
{{--                                        <p class="lead text-center">R$ 5.000,00</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}

{{--                                <a href="#" class="card">--}}
{{--                                    <div class="card-body text-center">--}}
{{--                                        <i class="iconsminds-receipt-4"></i>--}}
{{--                                        <p class="card-text mb-0">Contrato 004</p>--}}
{{--                                        <p class="lead text-center">R$ 10.000,00</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
            </div>









        </div>
    </main>
@endsection

@section('scripts')
    <script src="{{url('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/Chart.bundle.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/chartjs-plugin-datalabels.js')}}"></script>
    <script src="{{url('assets/js/vendor/moment.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/fullcalendar.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/datatables.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/perfect-scrollbar.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/progressbar.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/jquery.barrating.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/select2.full.js')}}"></script>
    <script src="{{url('assets/js/vendor/nouislider.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/bootstrap-datepicker.js')}}"></script>
    <script src="{{url('assets/js/vendor/Sortable.js')}}"></script>
    <script src="{{url('assets/js/vendor/mousetrap.min.js')}}"></script>


@endsection
