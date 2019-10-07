<?

$segment = Request::segment(2);
$sub_segment = Request::segment(3);

switch ($segment) {
    case "":
        $dashboard              = "active";
        $payment                = "";
        $investiment            = "";
        $setting                = "";
        $indicated              = "";
        break;
    case "home":
        $dashboard              = "active";
        $payment                = "";
        $investiment            = "";
        $setting                = "";
        $indicated              = "";
        break;
    case "digital-account":
        $dashboard              = "";
        $digital_account        = "active";
        $investiment            = "";
        $setting                = "";
        $indicated              = "";
        break;
    case "investiment":
        $dashboard              = "";
        $payment                = "";
        $investiment            = "active";
        $setting                = "";
        $indicated              = "";
        break;
    case "setting":
        $dashboard              = "";
        $payment                = "";
        $investiment            = "";
        $setting                = "active";
        $indicated              = "";
        break;
    case "indicated":
        $dashboard              = "";
        $payment                = "";
        $investiment            = "";
        $setting                = "";
        $indicated              = "active";
        break;
}

switch ($sub_segment) {
    case "extract":
        $extract            = "active";
        $transfer           = "";
        $payment            = "";
        $deposit            = "";
        $recharge           = "";
        $new_investiment    = "";
        $investiment        = "";
        $profile            = "";
        $access             = "active";
        $indicateds         = "";
        break;
    case "transfer":
        $extract            = "";
        $transfer           = "active";
        $payment            = "";
        $deposit            = "";
        $recharge           = "";
        $new_investiment    = "";
        $investiment        = "";
        $profile            = "";
        $access             = "active";
        $indicateds         = "";
        break;
    case "payment":
        $extract            = "";
        $transfer           = "";
        $payment            = "active";
        $deposit            = "";
        $recharge           = "";
        $new_investiment    = "";
        $investiment        = "";
        $profile            = "";
        $access             = "";
        $indicateds         = "";
        break;
    case "deposit":
        $extract            = "";
        $transfer           = "";
        $payment            = "";
        $deposit            = "active";
        $recharge           = "";
        $new_investiment    = "";
        $investiment        = "";
        $profile            = "";
        $access             = "";
        $indicateds         = "";
        break;
    case "mobile-recharge":
        $extract        = "";
        $transfer       = "";
        $payment        = "";
        $deposit        = "";
        $recharge       = "active";
        $new_investiment    = "";
        $investiment        = "";
        $profile            = "";
        $access             = "";
        $indicateds         = "";

        break;
    case "new-investiment":
        $extract            = "";
        $transfer           = "";
        $payment            = "";
        $deposit            = "";
        $recharge           = "";
        $new_investiment    = "active";
        $profile            = "";
        $access             = "";
        $indicateds         = "";
        break;
    case "investiment":
        $extract            = "";
        $transfer           = "";
        $payment            = "";
        $deposit            = "";
        $recharge           = "";
        $new_investiment    = "";
        $investiments       = "active";
        $profile            = "";
        $access             = "";
        $indicateds         = "";
        break;
    case "profile":
        $extract            = "";
        $transfer           = "";
        $payment            = "";
        $deposit            = "";
        $recharge           = "";
        $new_investiment    = "";
        $investiments       = "";
        $profile            = "active";
        $access             = "";
        $indicateds         = "";
        break;
    case "access":
        $extract            = "";
        $transfer           = "";
        $payment            = "";
        $deposit            = "";
        $recharge           = "";
        $new_investiment    = "";
        $investiments       = "";
        $profile            = "";
        $access             = "active";
        $indicateds         = "";
        break;
    case "indicateds":
        $extract            = "";
        $transfer           = "";
        $payment            = "";
        $deposit            = "";
        $recharge           = "";
        $new_investiment    = "";
        $investiments       = "";
        $profile            = "";
        $access             = "";
        $indicateds         = "active";

        break;

}

?>

<!-- Menu cliente -->
<div class="menu">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li class="{{@$dashboard}}">
                    <a href="{{route('ib.home')}}">
                        <i class="iconsminds-optimization"></i><span>Dashboards</span>
                    </a>
                </li>
                <li class="{{@$digital_account}}">
                    <a href="#digital_account">
                        <i class="iconsminds-laptop---phone"></i> Conta Digital
                    </a>
                </li>
                <li class="{{@$investiment}}">
                    <a href="#remunerated_account">
                        <i class="iconsminds-monitor-analytics"></i> Investimento
                    </a>
                </li>
                <li class="{{@$setting}}">
                    <a href="#settings">
                        <i class="iconsminds-gears"></i> Configurações
                    </a>
                </li>
                <li class="{{@$indicated}}">
                    <a href="#indicateds">
                        <i class="iconsminds-add-user"></i> Indicações
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll">
            <!-- begin:dashboard -->
            <ul class="list-unstyled" data-link="dashboard">
                <li>
                    <a href="#">
                        <i class="simple-icon-pie-chart"></i> <span class="d-inline-block">Dashboard</span>
                    </a>
                </li>
            </ul>
            <!-- end:dashboard -->

            <!-- begin:dashboard -->
            <ul class="list-unstyled" data-link="digital_account">
                <li class="{{@$extract}}">
                    <a href="{{route('ib.digital-account.extract')}}">
                        <i class="iconsminds-project"></i> <span class="d-inline-block">Extrato</span>
                    </a>
                </li>
                <li class="{{@$transfer}}">
                    <a href="{{route('ib.digital-account.transfer')}}">
                        <i class="iconsminds-shuffle-2"></i> <span class="d-inline-block">Transferência</span>
                    </a>
                </li>
                <li class="{{@$payment}}">
                    <a href="{{route('ib.digital-account.payment')}}">
                        <i class="iconsminds-pricing"></i> <span class="d-inline-block">Pagamento de contas</span>
                    </a>
                </li>
                <li class="{{@$deposit}}">
                    <a href="{{route('ib.digital-account.deposit')}}">
                        <i class="iconsminds-download-1"></i> <span class="d-inline-block">Depósito por boleto</span>
                    </a>
                </li>
                <li class="{{@$recharge}}">
                    <a href="{{route('ib.digital-account.mobile-recharge')}}">
                        <i class="iconsminds-smartphone-4"></i> <span class="d-inline-block">Recarga PRE-Pago</span>
                    </a>
                </li>
            </ul>
            <!-- end:dashboard -->

            <!-- begin:dashboard -->
            <ul class="list-unstyled" data-link="remunerated_account">
                <li class="{{@$new_investiment}}">
                    <a href="{{route('ib.investiment.new-investiment')}}">
                        <i class="iconsminds-coins"></i> <span class="d-inline-block">Novo investimento</span>
                    </a>
                </li>
                <li class="{{@$investiments}}">
                    <a href="{{route('ib.investiment.investiments')}}">
                        <i class="iconsminds-line-chart-1"></i> <span class="d-inline-block">Meus investimentos</span>
                    </a>
                </li>
            </ul>
            <!-- end:dashboard -->


            <!-- begin:dashboard -->
            <ul class="list-unstyled" data-link="settings">
                <li class="{{@$profile}}">
                    <a href="{{route('ib.setting.profile')}}">
                        <i class="iconsminds-user"></i> <span class="d-inline-block">Meus dados</span>
                    </a>
                </li>
                <li class="{{@$access}}">
                    <a href="{{route('ib.setting.access')}}">
                        <i class="iconsminds-key-lock"></i> <span class="d-inline-block">Dados de acesso</span>
                    </a>
                </li>
                <li class="{{@$access}}">
                    <a href="{{route('ib.setting.access')}}">
                        <i class="iconsminds-credit-card-3"></i> <span class="d-inline-block">Dados bancários</span>
                    </a>
                </li>
            </ul>
            <!-- end:dashboard -->

            <!-- begin:indicateds -->
            <ul class="list-unstyled" data-link="indicateds">
                <li class="{{@$indicateds}}">
                    <a href="{{route('ib.indicated.indicateds')}}">
                        <i class="iconsminds-affiliate"></i> <span class="d-inline-block">Minhas indicações</span>
                    </a>
                </li>
                <li class="{{@$access}}">
                    <a href="javascript:void();">
                        <i class="iconsminds-link"></i> <span class="d-inline-block">Link de indicação</span>
                    </a>
                </li>
            </ul>
            <!-- end:dashboard -->




{{--            <!-- begin:digital account -->--}}
{{--            <ul class="list-unstyled" data-link="digital_account" id="digital_account">--}}
{{--                <li>--}}
{{--                    <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"--}}
{{--                       aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50">--}}
{{--                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Authorization</span>--}}
{{--                    </a>--}}
{{--                    <div id="collapseAuthorization" class="collapse show">--}}
{{--                        <ul class="list-unstyled inner-level-menu">--}}
{{--                            <li>--}}
{{--                                <a href="Pages.Auth.Login.html">--}}
{{--                                    <i class="simple-icon-user-following"></i> <span--}}
{{--                                        class="d-inline-block">Login</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="Pages.Auth.Register.html">--}}
{{--                                    <i class="simple-icon-user-follow"></i> <span--}}
{{--                                        class="d-inline-block">Register</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="Pages.Auth.ForgotPassword.html">--}}
{{--                                    <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Forgot--}}
{{--                                            Password</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true"--}}
{{--                       aria-controls="collapseProduct" class="rotate-arrow-icon opacity-50">--}}
{{--                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Product</span>--}}
{{--                    </a>--}}
{{--                    <div id="collapseProduct" class="collapse show">--}}
{{--                        <ul class="list-unstyled inner-level-menu">--}}
{{--                            <li>--}}
{{--                                <a href="Pages.Product.List.html">--}}
{{--                                    <i class="simple-icon-credit-card"></i> <span class="d-inline-block">Data--}}
{{--                                            List</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="Pages.Product.Thumbs.html">--}}
{{--                                    <i class="simple-icon-list"></i> <span class="d-inline-block">Thumb List</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="Pages.Product.Images.html">--}}
{{--                                    <i class="simple-icon-grid"></i> <span class="d-inline-block">Image List</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="Pages.Product.Detail.html">--}}
{{--                                    <i class="simple-icon-book-open"></i> <span class="d-inline-block">Detail</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

{{--            </ul>--}}
{{--            <!-- end:digital account -->--}}

{{--            <ul class="list-unstyled" data-link="applications">--}}
{{--                <li>--}}
{{--                    <a href="Apps.MediaLibrary.html">--}}
{{--                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Library</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="Apps.Todo.List.html">--}}
{{--                        <i class="simple-icon-check"></i> <span class="d-inline-block">Todo</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="Apps.Survey.List.html">--}}
{{--                        <i class="simple-icon-calculator"></i> <span class="d-inline-block">Survey</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="Apps.Chat.html">--}}
{{--                        <i class="simple-icon-bubbles"></i> <span class="d-inline-block">Chat</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--            <ul class="list-unstyled" data-link="menu" id="menuTypes">--}}
{{--                <li>--}}
{{--                    <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true" aria-controls="collapseMenuTypes" class="rotate-arrow-icon">--}}
{{--                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Conta Remunerada</span>--}}
{{--                    </a>--}}
{{--                    <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">--}}
{{--                        <ul class="list-unstyled inner-level-menu">--}}
{{--                            <li>--}}
{{--                                <a href="Menu.Default.html">--}}
{{--                                    <i class="simple-icon-control-pause"></i> <span--}}
{{--                                        class="d-inline-block">Default</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="active">--}}
{{--                                <a href="Menu.Subhidden.html">--}}
{{--                                    <i class="simple-icon-arrow-left mi-subhidden"></i> <span--}}
{{--                                        class="d-inline-block">Subhidden</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="Menu.Hidden.html">--}}
{{--                                    <i class="simple-icon-control-start mi-hidden"></i> <span--}}
{{--                                        class="d-inline-block">Hidden</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="Menu.Mainhidden.html">--}}
{{--                                    <i class="simple-icon-control-rewind mi-hidden"></i> <span--}}
{{--                                        class="d-inline-block">Mainhidden</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel" aria-expanded="true" aria-controls="collapseMenuLevel" class="rotate-arrow-icon collapsed">--}}
{{--                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Levels</span>--}}
{{--                    </a>--}}
{{--                    <div id="collapseMenuLevel" class="collapse" data-parent="#menuTypes">--}}
{{--                        <ul class="list-unstyled inner-level-menu">--}}
{{--                            <li>--}}
{{--                                <a href="#">--}}
{{--                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub Level</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel2" aria-expanded="true" aria-controls="collapseMenuLevel2" class="rotate-arrow-icon collapsed">--}}
{{--                                    <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Another Level</span>--}}
{{--                                </a>--}}
{{--                                <div id="collapseMenuLevel2" class="collapse">--}}
{{--                                    <ul class="list-unstyled inner-level-menu">--}}
{{--                                        <li>--}}
{{--                                            <a href="#">--}}
{{--                                                <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub Level</span>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#" data-toggle="collapse" data-target="#collapseMenuDetached" aria-expanded="true" aria-controls="collapseMenuDetached" class="rotate-arrow-icon collapsed">--}}
{{--                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Detached</span>--}}
{{--                    </a>--}}
{{--                    <div id="collapseMenuDetached" class="collapse">--}}
{{--                        <ul class="list-unstyled inner-level-menu">--}}
{{--                            <li>--}}
{{--                                <a href="#">--}}
{{--                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub Level</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}

        </div>
    </div>
</div>

<!-- Menu administracao

<div class="menu">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li class="active">
                    <a href="#dashboard">
                        <i class="iconsminds-shop-4"></i>
                        <span>Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="#digital_account">
                        <i class="iconsminds-air-balloon-1"></i> Conta Digital
                    </a>
                </li>
                <li>
                    <a href="#menu">
                        <i class="iconsminds-three-arrow-fork"></i> Conta Remunerada
                    </a>
                </li>

                <li>
                    <a href="#applications">
                        <i class="iconsminds-digital-drawing"></i> Configurações
                    </a>

                </li>

            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll">
            <ul class="list-unstyled" data-link="dashboard">
                <li>
                    <a href="Dashboard.Default.html">
                        <i class="simple-icon-rocket"></i> <span class="d-inline-block">Default</span>
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Analytics.html">
                        <i class="simple-icon-pie-chart"></i> <span class="d-inline-block">Analytics</span>
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Ecommerce.html">
                        <i class="simple-icon-basket-loaded"></i> <span class="d-inline-block">Ecommerce</span>
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Content.html">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Content</span>
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled" data-link="digital_account" id="digital_account">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                       aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Authorization</span>
                    </a>
                    <div id="collapseAuthorization" class="collapse show">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="Pages.Auth.Login.html">
                                    <i class="simple-icon-user-following"></i> <span
                                        class="d-inline-block">Login</span>
                                </a>
                            </li>
                            <li>
                                <a href="Pages.Auth.Register.html">
                                    <i class="simple-icon-user-follow"></i> <span
                                        class="d-inline-block">Register</span>
                                </a>
                            </li>
                            <li>
                                <a href="Pages.Auth.ForgotPassword.html">
                                    <i class="simple-icon-user-unfollow"></i> <span class="d-inline-block">Forgot
                                            Password</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true"
                       aria-controls="collapseProduct" class="rotate-arrow-icon opacity-50">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Product</span>
                    </a>
                    <div id="collapseProduct" class="collapse show">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="Pages.Product.List.html">
                                    <i class="simple-icon-credit-card"></i> <span class="d-inline-block">Data
                                            List</span>
                                </a>
                            </li>
                            <li>
                                <a href="Pages.Product.Thumbs.html">
                                    <i class="simple-icon-list"></i> <span class="d-inline-block">Thumb
                                            List</span>
                                </a>
                            </li>
                            <li>
                                <a href="Pages.Product.Images.html">
                                    <i class="simple-icon-grid"></i> <span class="d-inline-block">Image
                                            List</span>
                                </a>
                            </li>
                            <li>
                                <a href="Pages.Product.Detail.html">
                                    <i class="simple-icon-book-open"></i> <span class="d-inline-block">Detail</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseProfile" aria-expanded="true"
                       aria-controls="collapseProfile" class="rotate-arrow-icon opacity-50">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Profile</span>
                    </a>
                    <div id="collapseProfile" class="collapse show">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="Pages.Profile.Social.html">
                                    <i class="simple-icon-share"></i> <span class="d-inline-block">Social</span>
                                </a>
                            </li>
                            <li>
                                <a href="Pages.Profile.Portfolio.html">
                                    <i class="simple-icon-link"></i> <span class="d-inline-block">Portfolio</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

            <ul class="list-unstyled" data-link="applications">
                <li>
                    <a href="Apps.MediaLibrary.html">
                        <i class="simple-icon-picture"></i> <span class="d-inline-block">Library</span>
                    </a>
                </li>
                <li>
                    <a href="Apps.Todo.List.html">
                        <i class="simple-icon-check"></i> <span class="d-inline-block">Todo</span>
                    </a>
                </li>
                <li>
                    <a href="Apps.Survey.List.html">
                        <i class="simple-icon-calculator"></i> <span class="d-inline-block">Survey</span>
                    </a>
                </li>
                <li>
                    <a href="Apps.Chat.html">
                        <i class="simple-icon-bubbles"></i> <span class="d-inline-block">Chat</span>
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled" data-link="menu" id="menuTypes">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true"
                       aria-controls="collapseMenuTypes" class="rotate-arrow-icon">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Types</span>
                    </a>
                    <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="Menu.Default.html">
                                    <i class="simple-icon-control-pause"></i> <span
                                        class="d-inline-block">Default</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="Menu.Subhidden.html">
                                    <i class="simple-icon-arrow-left mi-subhidden"></i> <span
                                        class="d-inline-block">Subhidden</span>
                                </a>
                            </li>
                            <li>
                                <a href="Menu.Hidden.html">
                                    <i class="simple-icon-control-start mi-hidden"></i> <span
                                        class="d-inline-block">Hidden</span>
                                </a>
                            </li>
                            <li>
                                <a href="Menu.Mainhidden.html">
                                    <i class="simple-icon-control-rewind mi-hidden"></i> <span
                                        class="d-inline-block">Mainhidden</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel" aria-expanded="true"
                       aria-controls="collapseMenuLevel" class="rotate-arrow-icon collapsed">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Levels</span>
                    </a>
                    <div id="collapseMenuLevel" class="collapse" data-parent="#menuTypes">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="#">
                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel2"
                                   aria-expanded="true" aria-controls="collapseMenuLevel2"
                                   class="rotate-arrow-icon collapsed">
                                    <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Another
                                            Level</span>
                                </a>
                                <div id="collapseMenuLevel2" class="collapse">
                                    <ul class="list-unstyled inner-level-menu">
                                        <li>
                                            <a href="#">
                                                <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                                        Level</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseMenuDetached" aria-expanded="true"
                       aria-controls="collapseMenuDetached" class="rotate-arrow-icon collapsed">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Detached</span>
                    </a>
                    <div id="collapseMenuDetached" class="collapse">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="#">
                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</div>


-->
