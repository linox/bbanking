@extends('layouts.back-end.app')

@section('css')
    <link rel="stylesheet" href="{{url('assets/css/vendor/smart_wizard.min.css')}}" />
@endsection

@section('content')

    <main>
        <div class="container-fluid">
            <div class="row  ">
                <div class="col-12">
                    <h1>Investimentos</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">

                            <li class="breadcrumb-item active" aria-current="page">Novo investimento</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>



                    <div class="row">




                        <div class="col-12 mb-12">
                            <div class="card mb-12">
                                <div id="smartWizardValidation">
                                    <ul class="card-header">
                                        <li><a href="#step-0">1º Passo<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prazo de investimento&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                        <li><a href="#step-1">2º Passo<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tipo de investimento&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                        <li><a href="#step-2">3º Passo<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valor investido&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                        <li><a href="#step-3">4º Passo<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Finalizar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                                    </ul>

                                    <div class="card-body">
                                        <div id="step-0">
                                            <form id="form-step-0" class="tooltip-label-right" novalidate>
                                                <div class="mb-4" style="font-size: 18px !important;">
                                                    <div class="custom-control custom-radio" style="padding-bottom: 8px !important;">
                                                        <input type="radio" value="3" id="3_m" name="rdPrazo" class="custom-control-input">
                                                        <label class="custom-control-label" for="3_m">3 meses</label>
                                                    </div>
                                                    <div class="custom-control custom-radio" style="padding-bottom: 8px !important;">
                                                        <input type="radio" value="6" id="6_m" name="rdPrazo" class="custom-control-input">
                                                        <label class="custom-control-label" for="6_m">6 meses</label>
                                                    </div>
                                                    <div class="custom-control custom-radio" style="padding-bottom: 8px !important;">
                                                        <input type="radio" value="12" id="12_m" name="rdPrazo" checked class="custom-control-input">
                                                        <label class="custom-control-label" for="12_m">12 meses</label>
                                                    </div>
                                                    <div class="custom-control custom-radio" style="padding-bottom: 8px !important;">
                                                        <input type="radio" value="24" id="24_m" name="rdPrazo" class="custom-control-input">
                                                        <label class="custom-control-label" for="24_m">24 meses</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="step-1">
                                            <form id="form-step-1" class="tooltip-label-right" novalidate>
                                                <div class="mb-4" style="font-size: 18px !important;">
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" value="js" id="js" checked name="rdTipo" class="custom-control-input">
                                                        <label class="custom-control-label" for="js">Juros Simples</label>
                                                        <br/>
                                                        <small>Você receberá os juros do valor investido diariamente</small>
                                                    </div>
                                                    <br/>
                                                    <div class="custom-control custom-radio">
                                                        <input type="radio" value="jc" id="jc" name="rdTipo" class="custom-control-input">
                                                        <label class="custom-control-label" for="jc">Juros composto</label>
                                                        <br/>
                                                        <small>Após cada período, os juros são incorporados ao principal e passam, por sua vez, a render juros e o valor so será retirado no final do plano.</small>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="step-2">
                                            <form id="form-step-2" class="tooltip-label-right" novalidate>
                                                <div class="mb-4" style="font-size: 18px !important;">
                                                    <label class="form-group has-top-label">
                                                        <span>VALOR</span>
                                                        <input class="form-control" name="valor" id="valor" placeholder="R$" style="font-size: 22px !important;" />
                                                        <small>Valor minimo para investimento: R$ 500,00</small>
                                                    </label>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="step-3">
                                            <h4 class="text-center">Quase pronto, revise seu investimento e clique em finalizar!</h4>
                                            <table style="margin: 0 auto !important;">
                                                <tr style="font-size: 20px !important;">
                                                    <td width="250"><label>Prazo:</label></td>
                                                    <td width="150"><b style="color:#922c88 !important;"><label id="lb_prazo">6 meses</label></b></td>
                                                </tr>
                                                <tr style="font-size: 20px !important;">
                                                    <td><label>Tipo de investimento:</label></td>
                                                    <td><b style="color:#922c88 !important;"><label id="lb_tipo">Juros Simples</label></b></td>
                                                </tr>
                                                <tr style="font-size: 20px !important;">
                                                    <td><label>Valor do investimento:</label></td>
                                                    <td><b style="color:#922c88 !important;"><label id="lb_valor">R$ 0.00</label></b></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <form action="{{route('ib.investiment.store-investiment')}}" method="POST" name="frm-finalizar" id="frm-finalizar">
                                                            @csrf
                                                            <input type="hidden" name="t_prazo" id="t_prazo" value="12">
                                                            <input type="hidden" name="t_tipo" id="t_tipo" value="js">
                                                            <input type="hidden" name="t_valor" id="t_valor">
                                                        </form>
                                                    </td>
                                                </tr>
                                            </table>


                                        </div>
                                    </div>

                                    <div class="btn-toolbar custom-toolbar text-center card-body pt-0">
                                        <button class="btn btn-secondary prev-btn" type="button">Anterior</button>
                                        <button class="btn btn-secondary next-btn" type="button">Próximo</button>
                                        <button class="btn btn-secondary finish-btn" id="btn-finalizar" type="submit">Finalizar</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>





                </div>
            </div>
        </div>
    </main>

@endsection

@section('scripts')
    <script src="{{url('assets/js/vendor/perfect-scrollbar.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/select2.full.js')}}"></script>
    <script src="{{url('assets/js/vendor/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/jquery.smartWizard.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/jquery.validate/jquery.validate.min.js')}}"></script>
    <script src="{{url('assets/js/vendor/jquery.validate/additional-methods.min.js')}}"></script>

    <script>
        $("input[name='rdPrazo']").change(
            function(e)
            {
                $('#t_prazo').val($("input[name='rdPrazo']:checked").val());
                if($("input[name='rdPrazo']:checked").val() == '3'){ $('#lb_prazo').html('3 meses');}
                if($("input[name='rdPrazo']:checked").val() == '6'){ $('#lb_prazo').html('6 meses');}
                if($("input[name='rdPrazo']:checked").val() == '12'){ $('#lb_prazo').html('12 meses');}
                if($("input[name='rdPrazo']:checked").val() == '24'){ $('#lb_prazo').html('24 meses');}
            }
        );

        $("input[name='rdTipo']").change(
            function(e)
            {
                $('#t_tipo').val($("input[name='rdTipo']:checked").val());
                if($("input[name='rdTipo']:checked").val() == 'js'){ $('#lb_tipo').html('Juros Compost');}
                if($("input[name='rdTipo']:checked").val() == 'jc'){ $('#lb_tipo').html('Juros Simples');}
            }
        );

        $("input[name='valor']").blur(
            function(e)
            {
                $('#t_valor').val($("input[name='valor']").val());
                $('#lb_valor').html('R$ '+$("input[name='valor']").val());
            }
        );

        $("#btn-finalizar").click(
            function(e)
            {
                if($("input[name='valor']").val() == ''){
                    alert('Você precisa informar o valor de investimento!');
                    return false;
                }

                document.getElementById('frm-finalizar').submit();

            }
        );


    </script>
@endsection
