<div class="content-side content-side-full">
    <ul class="nav-main">
        <li>
            <a href="be_pages_dashboard.html"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
        </li>
        <li class="nav-main-heading"><span class="sidebar-mini-visible">SK</span><span class="sidebar-mini-hidden">SKCK</span></li>
        <li>
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-notebook"></i><span class="sidebar-mini-hide">Data SKCK</span></a>
            <ul>
                <li>
                    <a href="{{ route('daftar-skck') }}">Data SKCK</a>
                </li>
                <li>
                    <a href="{{ route('pendaftaran-skck') }}">Tambah SKCK</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-users"></i><span class="sidebar-mini-hide">Management User</span></a>
            <ul>
                <li>
                    <a href="{{ route('daftar-user') }}">Data User</a>
                </li>
                <li>
                    <a href="{{ route('user.tambah-user') }}">Tambah User</a>
                </li>
            </ul>
        </li>
        <li class="nav-main-heading"><span class="sidebar-mini-visible">P</span><span class="sidebar-mini-hidden">Pengaturan</span></li>
        <li>
            <a href="{{ route('template.setting-template') }}"><i class="si si-screen-desktop"></i><span class="sidebar-mini-hide">Setting Template</span></a>
        </li>
        
    </ul>
</div>