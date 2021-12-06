<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header" style="padding: 2rem 0rem 0rem 0rem;">
            <ul class="logo">
                @if (auth()->user()->role_id == 1)
                <a href="{{ route('admin') }}" class='sidebar-link' style="margin: 0">
                    <i class="bi bi-person-circle"></i>
                    {{ auth()->user()->name }}
                </a>
                @elseif (auth()->user()->role_id == 2)
                <a href="{{ route('dosen') }}" class='sidebar-link' style="margin: 0">
                    <i class="bi bi-person-circle"></i>
                    {{ auth()->user()->name }}
                </a>
                @else
                <a href="{{ route('mahasiswa') }}" class='sidebar-link' style="margin: 0">
                    <i class="bi bi-person-circle"></i>
                    {{ auth()->user()->name }}
                </a>
                @endif
                </li>
            </ul>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                {{-- Menu --}}
                {{-- <li class="sidebar-title">Menu</li>
                <li class="sidebar-item {{ request()->is('admin') || request()->is('dosen') || request()->is('mahasiswa') ? 'active' : '' }} ">
                    @if (auth()->user()->role_id == 1)
                    <a href="{{ route('admin') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                    @elseif (auth()->user()->role_id == 2)
                    <a href="{{ route('dosen') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                    @else
                    <a href="{{ route('mahasiswa') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                    @endif
                </li> --}}
                {{-- Konten Surat --}}
                <li class="sidebar-title">Konten Surat</li>
                {{-- Surat Masuk --}}
                <li class="sidebar-item {{ request()->is('admin/regulation*') ? 'active' : '' }} ">
                    <a href="{{ route('suratmasuk') }}" class='sidebar-link'>
                        <i class="bi bi-inbox-fill"></i>
                        <span>Surat Masuk</span>
                    </a>
                </li>
                {{-- Surat Keluar --}}
                <li class="sidebar-item {{ request()->is('admin/regulation*') ? 'active' : '' }} ">
                    <a href="{{ route('suratkeluar') }}" class='sidebar-link'>
                        <i class="bi bi-envelope-open-fill"></i>
                        <span>Surat Keluar</span>
                    </a>
                </li>
                {{-- Master Data --}}
                <li class="sidebar-item {{ request()->is('admin/profile*') ? 'active' : '' }} has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-inboxes-fill"></i>
                        <span>Master Surat</span>
                    </a>
                    @if (auth()->user()->role_id == 3)
                    <ul class="submenu {{ request()->is('admin/profile*') ? 'active' : '' }}  ">
                        <li class="submenu-item">
                            <i class="bi bi-send-fill"></i>
                            <a href="#">Surat Tugas</a>
                        </li>
                        <li class="submenu-item">
                            <a href="#">Surat Kegiatan</a>
                        </li>
                    </ul>
                    @elseif (auth()->user()->role_id == 2)
                    <ul class="submenu {{ request()->is('admin/profile*') ? 'active' : '' }}  ">
                        <li class="submenu-item">
                            <a href="#">Surat Tugas</a>
                        </li>
                    </ul>
                    @else
                    <ul class="submenu {{ request()->is('admin/profile*') ? 'active' : '' }}  ">
                        <li class="submenu-item">
                            <a href="#">Surat Permohonan</a>
                        </li>
                    </ul>
                    @endif
                </li>
                {{-- Arsip Surat --}}
                <li class="sidebar-item {{ request()->is('admin/news*') ? 'active' : '' }}  ">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-newspaper"></i>
                        <span>Arsip Surat</span>
                    </a>
                </li>
                <hr>
                {{--Fungsi Logout--}}
                <li class="sidebar-item  ">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="sidebar-link btn btn-light">
                            <i class="bi bi-box-arrow-right text-danger"></i>
                            <span>Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>