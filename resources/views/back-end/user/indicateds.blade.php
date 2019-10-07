@extends('layouts.back-end.app')

@section('css')
    <link rel="stylesheet" href="{{url('assets/css/vendor/dataTables.bootstrap4.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/vendor/datatables.responsive.bootstrap4.min.css')}}" />
@endsection

@section('content')


    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Indicações</h1>

                    <div class="top-right-button-container">
                        <button type="button" class="btn btn-primary btn-lg top-right-button mr-1" data-toggle="modal" data-target="#rightModal">Cadastrar</button>

                        <!-- begin:modal -->
                        <div class="modal fade modal-right" id="rightModal" tabindex="-1" role="dialog" aria-labelledby="rightModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="rightModalLabel">Cadastro de clientes</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Você pode cadastrar suas indicações, porem o cliente deverá aceitar os termos de uso.</p>
                                        <form class="tooltip-right-top" id="addToDatatableForm" novalidate action="{{route('ib.indicated.indicateds.store')}}" method="POST">
                                            @csrf
                                            <div class="form-group position-relative">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                            <div class="form-group position-relative">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control">
                                            </div>
                                            <div class="form-group position-relative">
                                                <label>Celular</label>
                                                <input type="text" name="cellphone" class="form-control">
                                            </div>
                                            <div class="form-group position-relative">
                                                <label>CPF/CNPJ</label>
                                                <input type="text" name="cpf_cnpj" class="form-control">
                                            </div>
                                            <div class="form-group position-relative">
                                                <label>Estado</label>
                                                <select class="form-control select2-single" name="state">
                                                    <option></option>
                                                    <option value="DF">DF</option>
                                                    <option value="GO">GO</option>
                                                    <option value="RJ">RJ</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-primary btn-multiple-state" id="addToDatatable">
                                            <div class="spinner d-inline-block">
                                                <div class="bounce1"></div>
                                                <div class="bounce2"></div>
                                                <div class="bounce3"></div>
                                            </div>
                                            <span class="icon success" data-toggle="tooltip" data-placement="top"
                                                  title="Everything went right!">
                                                <i class="simple-icon-check"></i>
                                            </span>
                                            <span class="icon fail" data-toggle="tooltip" data-placement="top"
                                                  title="Something went wrong!">
                                                <i class="simple-icon-exclamation"></i>
                                            </span>
                                            <span onclick="event.preventDefault(); document.getElementById('addToDatatableForm').submit();" class="label">Cadastrar</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <div class="btn btn-primary btn-lg pl-4 pr-0 check-button">
                                <label class="custom-control custom-checkbox mb-0 d-inline-block">
                                    <input type="checkbox" class="custom-control-input" id="checkAllDataTables">
                                    <span class="custom-control-label">&nbsp;</span>
                                </label>
                            </div>
                            <button type="button" class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                            </div>
                        </div>
                        <!-- end:modal -->
                    </div>


                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item active" aria-current="page">Minhas indicações</li>
                        </ol>
                    </nav>
                    <div class="mb-2">
                        <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions" role="button" aria-expanded="true" aria-controls="displayOptions">
                            Opções de exibição
                            <i class="simple-icon-arrow-down align-middle"></i>
                        </a>
                        <div class="collapse dont-collapse-sm" id="displayOptions">
                            <div class="d-block d-md-inline-block">
                                <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                                    <input class="form-control" placeholder="Busca" id="searchDatatable">
                                </div>
                            </div>
                            <div class="float-md-right dropdown-as-select" id="pageCountDatatable">
                                <span class="text-muted text-small">Exibindo 1-10 de 40 registros </span>
                                <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">10</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">5</a>
                                    <a class="dropdown-item active" href="#">10</a>
                                    <a class="dropdown-item" href="#">20</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="separator"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
                    <!-- begin:lista de indicações -->
                    <table id="datatableRows" class="data-table responsive nowrap" data-order="[[ 1, &quot;desc&quot; ]]">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>CPF</th>
                            <th>Situação</th>
                            <th class="empty">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Loop -->
                        <tr>
                            <td><p class="list-item-heading">José Lino de Araújo Neto</p></td>
                            <td><p class="text-muted">linox@me.com</p></td>
                            <td><p class="text-muted">844.154.101-97</p></td>
                            <td><p class="text-muted"><span class="badge badge-pill badge-success">Ativo</span></p></td>
                            <td>
                                <label class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-label">&nbsp;</span>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td><p class="list-item-heading">José Lino de Araújo Neto</p></td>
                            <td><p class="text-muted">linox@me.com</p></td>
                            <td><p class="text-muted">844.154.101-97</p></td>
                            <td><p class="text-muted"><span class="badge badge-pill badge-warning">Pendente</span></p></td>
                            <td>
                                <label class="custom-control custom-checkbox mb-1 align-self-center data-table-rows-check">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-label">&nbsp;</span>
                                </label>
                            </td>
                        </tr>
                        <!-- Loop -->
                        </tbody>
                    </table>
                    <!-- end:lista de indicações -->
                </div>
            </div>
        </div>
    </main>


@endsection

@section('scripts')
    <script src="{{url('assets/js/vendor/datatables.min.js')}}"></script>
@endsection
