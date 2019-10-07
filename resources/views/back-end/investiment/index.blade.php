@extends('layouts.back-end.app')

@section('css')
@endsection

@section('content')

    <main>
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12">
                    <!-- header -->
                    <h1>Investimentos</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item active" aria-current="page">Meus investimentos</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                    <!-- header -->

                    <div class="list disable-text-selection" data-check-all="checkAll">
                        <!-- begin:item -->
{{--                        <div class="card d-flex flex-row mb-3">--}}
{{--                            <div class="d-flex flex-grow-1 min-width-zero">--}}
{{--                                <div class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">--}}

{{--                                    <p class="mb-0 text-muted text-small w-15 w-xs-100"><b>Período</b><br/>10/10/2019 a 10/10/2020</p>--}}
{{--                                    <p class="mb-0 text-muted text-small w-15 w-xs-100"><b>Prazo de investimento</b><br/>6 meses</p>--}}
{{--                                    <p class="mb-0 text-muted text-small w-15 w-xs-100"><b>Tipo de investimento</b><br/>Juros simples</p>--}}
{{--                                    <p class="mb-0 text-muted text-small w-15 w-xs-100"><b>Valor investido</b><br/>R$ 10.000,00</p>--}}
{{--                                    <div class="w-15 w-xs-100">--}}
{{--                                        <span class="badge badge-pill badge-success">Ativo</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <label class="custom-control custom-checkbox mb-0 align-self-center mr-4 mb-1">--}}
{{--                                    <input type="checkbox" class="custom-control-input">--}}
{{--                                    <span class="custom-control-label">&nbsp;</span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!-- end:item -->
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('scripts')

@endsection
