<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav ">
                <a class="px-4 " href="/"><img src="{{asset('images/logo.png')}}" width="120" alt=""></a>

                <a class="nav-link pt-5" href="/beranda">
                    <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                    BERANDA
                </a>
                @if(Auth::user()->role_id == '2')
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
                    MENGELOLA AKUN
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/akun-siswa"><i class="fas fa-user-alt"></i>&nbsp;&nbsp;AKUN SISWA</a>
                        <a class="nav-link" href="/akun-admin"><i class="fas fa-user-shield"></i>&nbsp;AKUN ADMIN</a>
                    </nav>
                </div>
                @endif
                <a class="nav-link" href="/kelola-materi">
                    <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                    MENGELOLA MATERI
                </a>
                <a class="nav-link" href="/pencapaian-siswa">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-line"></i></div>
                    PENCAPAIAN SISWA
                </a>
                <a class="nav-link" href="/lencana-siswa">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-line"></i></div>
                    MENGELOLA LENCANA
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="d-flex">


                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-out"></i> &nbsp;&nbsp;
                    {{ __('LOG OUT') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </div>
    </nav>
</div>