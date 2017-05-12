
@extends('admin.layouts.plane')

@section('body')

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{ route('home') }}"><img title="bella da semana" src="/assets/img/logo.png" width="200"/></a>
            
        </div>


        <!-- /.navbar-header -->
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <strong>John Smith</strong>
                                <span class="pull-right text-muted">
                                    <em>Yesterday</em>
                                </span>
                            </div>
                            <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>Read All Messages</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-tasks"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-tasks">
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 1</strong>
                                    <span class="pull-right text-muted">40% Complete</span>
                                </p>

                                <div>
                                    @include('admin.widgets.progress', array('animated'=> true, 'class'=>'success', 'value'=>'40'))
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>

                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 2</strong>
                                    <span class="pull-right text-muted">20% Complete</span>
                                </p>

                                <div>
                                    @include('admin.widgets.progress', array('animated'=> true, 'class'=>'info', 'value'=>'20'))
                                    <span class="sr-only">20% Complete</span>
                                </div>

                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 3</strong>
                                    <span class="pull-right text-muted">60% Complete</span>
                                </p>

                                <div>
                                    @include('admin.widgets.progress', array('animated'=> true, 'class'=>'warning', 'value'=>'60'))
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>

                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <p>
                                    <strong>Task 4</strong>
                                    <span class="pull-right text-muted">80% Complete</span>
                                </p>

                                <div>
                                    @include('admin.widgets.progress', array('animated'=> true,'class'=>'danger', 'value'=>'80'))
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>

                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Tasks</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-tasks -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user"></i> {{ Auth::user()->name}} <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user"></i>Perfil</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ url('/logout') }}" 
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" 
                    action="{{ url('/logout') }}" 
                    method="POST" 
                    style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </li>
    </ul>
    <!-- /.dropdown-user -->
</li>
<!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->

<!-- SIDEBAR MENU -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav nav-pills navbar-collapse">
        <ul class="nav" id="side-menu">

            <li>
            <a href="{{ route('admin.index') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>

            <!-- ASSINATURAS -->

            <li>
                <a href="#"><i class="fa fa-usd"></i> Assinaturas <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"> Planos </a>
                    </li>
                    <li>
                        <a href="#"> Promoções </a>
                    </li>
                </ul>
            </li>


            <!-- END ASSINATURAS -->

            <!-- CLIENTE -->

            <li>
                <a href="#"><i class="fa fa-users"></i> Clientes <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.customers.index') }}"> Lista de Clientes </a>
                    </li>
                    <li>
                        <a href="#"> Cadastrar Clientes </a>
                    </li>
                </ul>
            </li>

            <!-- END CLIENTE-->

            <!-- CONTEÚDO DO PORTAL -->

            <li>
                <a href="#"><i class="fa fa-thumb-tack"></i> Conteúdo <span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <!-- GERAL -->
                    <li>

                        <a href="#">Geral <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">

                            <li>
                                <a href="#"></i>Destaques</a>
                            </li>

                            <li>
                                <a href="#"></i>Banners</a>
                            </li>

                            <li>
                                <a href="#"></i>Enquete</a>
                            </li>

                        </ul>

                    </li>
                    <!--END GERAL-->

                    <!--BLOG-->

                    <li>
                        <a href="#">Blog <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#"> Todos os posts </a>
                            </li>
                            <li>
                                <a href="#"> Adicionar novo</a>
                            </li>
                        </ul>
                    </li>

                    <!--END BLOG-->

                    <!--COLUNAS-->

                    <li>
                        <a href="#">Colunas <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#"> Todos os posts </a>
                            </li>
                            <li>
                                <a href="#"> Adicionar novo</a>
                            </li>
                            <li>
                                <a href="#"> Categorias </a>
                            </li>
                        </ul>
                    </li>

                    <!--END COLUNAS-->

                </ul>

            </li>


            <!-- END CONTEÚDO DO PORTAL -->

            <!-- ENSAIOS -->

            <li>
                <a href="#"><i class="fa fa-users"></i> Ensaios <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="{{ route('admin.essay.index') }}"> Lista</a>
                    </li>

                    <li>
                        <a href="{{ route('admin.essay.create') }}"> Novo ensaio</a>
                    </li>

                    <li>
                        <a href="#">Modelos <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">

                            <li>
                                <a href="{{ route('admin.essay.models.index') }}"> Todas as modelos</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.essay.models.create') }}"> Nova modelo</a>
                            </li>

                        </ul>

                    </li>

                    <li>
                        <a href="#">Equipe <span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#"> Diretores </a>
                            </li>

                            <li>
                                <a href="#"> Fotografia </a>
                            </li>

                            <li>
                                <a href="#"> Filmagem </a>
                            </li>

                            <li>
                                <a href="#"> Agencias </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </li>

            <!-- END ENSAIOS-->

            <!-- RELATÓRIOS -->

            <li>

                <a href="#"><i class="fa fa-clipboard"></i> Relatórios <span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">
                    <li>
                        <a href="#"> Desempenho de assinaturas</a>
                    </li>
                    <li>
                        <a href="#"> Desempenho de promoções</a>
                    </li>
                </ul>

            </li>

            <!-- END RELATÓRIOS -->

            <!-- CONFIGURAÇẼOS -->

            <li>

                <a href="#"><i class="fa fa-cog"></i> Configuração <span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.usuarios.index') }}"><i class="fa fa-users"></i> Usuários</a>
                    </li>
                </ul>
            </li>

            <!-- END CONFIGURAÇÕES -->

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<div id="page-wrapper">

    <div class="col-sm-12">

        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif

        @yield('section')

    </div>
    <!-- /#page-wrapper -->
</div>

</div>
@stop