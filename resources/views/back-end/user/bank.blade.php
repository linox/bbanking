@extends('layouts.back-end.app')

@section('css')


    <link rel="stylesheet" href="{{url('assets/css/vendor/bootstrap-float-label.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/vendor/select2.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/vendor/select2-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/vendor/bootstrap-datepicker3.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/vendor/bootstrap-tagsinput.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/vendor/select2.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/vendor/select2-bootstrap.min.css')}}" />


@endsection

@section('content')

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <h1>Dados bancários</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Meus dados</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="row">

                <div class="col-12">


                    <div class="card mb-4">
                        <div class="card-body">

                            <form>
                                <h5 class="mb-4">Dados pessoais</h5>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="form-group has-float-label">
                                            <input class="form-control" />
                                            <span>Nome</span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="form-group has-float-label">
                                            <input class="form-control" />
                                            <span>E-mail</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label class="form-group has-float-label">
                                            <input class="form-control" />
                                            <span>CPF</span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="form-group has-float-label">
                                            <div class="input-group date">
                                                <input type="text" class="form-control">
                                                <span class="input-group-text input-group-append input-group-addon">
                                                    <i class="simple-icon-calendar"></i>
                                                </span>
                                            </div>
                                            <span>Data de nascimento</span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="form-group has-float-label">
                                            <select class="form-control select2-single">
                                                <option label="&nbsp;">&nbsp;</option>
                                                <option value="M">Masculino</option>
                                                <option value="F">Feminino</option>
                                            </select>
                                            <span>Sexo</span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="form-group has-float-label">
                                            <input class="form-control" />
                                            <span>RG</span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="form-group has-float-label">
                                            <input class="form-control" />
                                            <span>Orgão</span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="form-group has-float-label">
                                            <div class="input-group date">
                                                <input type="text" class="form-control">
                                                <span class="input-group-text input-group-append input-group-addon">
                                                    <i class="simple-icon-calendar"></i>
                                                </span>
                                            </div>
                                            <span>Data emissão</span>
                                        </label>
                                    </div>

                                </div>

                                <h5 class="mb-4">Endereço</h5>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label class="form-group has-float-label">
                                            <input class="form-control" />
                                            <span>CEP</span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label class="form-group has-float-label">
                                            <input class="form-control" />
                                            <span>Endereço</span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="form-group has-float-label">
                                            <input class="form-control" />
                                            <span>Número</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label class="form-group has-float-label">
                                            <input class="form-control" />
                                            <span>Complemento</span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label class="form-group has-float-label">
                                            <input class="form-control" />
                                            <span>Bairro</span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label class="form-group has-float-label">
                                            <input class="form-control" />
                                            <span>Cidade</span>
                                        </label>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label class="form-group has-float-label">
                                            <select class="form-control select2-single">
                                                <option label="&nbsp;">&nbsp;</option>

                                                <optgroup label="Centro Oeste">
                                                    <option value="DF">Distrito Federal</option>
                                                    <option value="GO">Goias</option>
                                                </optgroup>
                                                <optgroup label="Sul">
                                                    <option value="RS">Rio Grande do Sul</option>
                                                </optgroup>
                                            </select>
                                            <span>Estado</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="form-check form-check-inline">
                                    <div class="custom-control custom-checkbox mb-4">
                                        <input type="checkbox" class="custom-control-input" id="customCheckThis">
                                        <label class="custom-control-label" for="customCheckThis">Aceito os termos de uso</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary d-block mt-3">Salvar</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

@endsection

@section('scripts')
    <script src="{{url('assets/js/vendor/select2.full.js')}}"></script>
    <script src="{{url('assets/js/vendor/bootstrap-datepicker.js')}}"></script>
    <script src="{{url('assets/js/vendor/bootstrap-tagsinput.min.js')}}"></script>
@endsection
