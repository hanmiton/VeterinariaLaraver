<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
       
         @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                </div>
            </div>
        @endif

       

           
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">

            <li class="header">FUNCIONES</li>
            <!-- Optionally, you can add icons to the links -->
            
            <li class="treeview">
                <a href="#"><i class='fa fa-users'></i> <span>USUARIOS</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('listado_usuarios') }}">Listado Usuarios</a></li>
                    <li><a href="{{ url('listado_doctores') }}">Listado Doctores</a></li>
                    <li><a href="{{ url('funcionalidades') }}">Funcionalidad</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
