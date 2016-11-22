<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header text-center">ADMINISTRAÇÃO</li>
            <li @yield('usersActive')><a href="{{url('/list/users')}}"><i class="fa fa-users"></i> <span> Usuários</span></a></li>
            <li @yield('settingsActive')><a href="{{url('/list/settings')}}"><i class="fa fa-gears"></i> <span> Configurações</span></a></li>
            <li @yield('fieldsActive')><a href="{{url('/list/fields')}}"><i class="fa fa-th-list"></i> <span> Campos</span></a></li>
        </ul>
    </section>
</aside>
