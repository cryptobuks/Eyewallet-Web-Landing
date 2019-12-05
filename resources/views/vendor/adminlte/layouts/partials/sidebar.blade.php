<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p style="overflow: hidden;text-overflow: ellipsis;max-width: 160px;" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu Principal</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active">
                <a href="{{ url('solicitudes') }}">
                    <i class='fa fa-cc-mastercard'></i> 
                    <span>Solicitudes</span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/log-viewer') }}">
                    <i class='fa fa-book'></i> 
                    <span>Bitacora</span>
                </a>
            </li>
            
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
