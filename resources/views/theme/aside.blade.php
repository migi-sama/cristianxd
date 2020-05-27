<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset("assets/theme/img/avatar5.png")}}" class="img-circle" alt="Imagen de usuario" />
            </div>
            <div class="pull-left info">
                <p>Hola, pana Juanes</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li>
                <a href="#">
                    <i class="fa fa-home"></i> <span>Inicio</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-heart"></i>
                    <span>Salud del Estudiante</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('alergia.index') }}">
                            <i class="fa fa-angle-double-right"></i> Alergia
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tipoAlergia.index') }}">
                            <i class="fa fa-angle-double-right"></i> Tipo de Alergia
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('discapacidad.index')}}">
                            <i class="fa fa-angle-double-right"></i> Discapacidad
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tipoDiscapacidad.index')}}">
                            <i class="fa fa-angle-double-right"></i> Tipo de Discapacidad
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('empleado.index')}}">
                    <i class="fa fa-frown-o"></i>
                    <span>Empleado</span>
                </a>
            </li>
            <li>
                <a href="{{ route('cargo.index')}}">
                    <i class="fa fa-heart"></i>
                    <span>Cargo</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-map-marker"></i>
                    <span>Geografía</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-angle-double-right"></i> Parroquia
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('municipio.index')}}">
                            <i class="fa fa-angle-double-right"></i> Municipio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('estado.index')}}">
                            <i class="fa fa-angle-double-right"></i> Estado
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>