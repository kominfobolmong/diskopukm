<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard &mdash; Dinas Koperasi Usaha Kecil dan Menengah Kabupaten Bolaang Mongondow</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/bolmongkab.png') }}" type="image/x-icon">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2-bootstrap4.css') }}" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>

</head>

<body style="background: #e2e8f0">
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="#">DISKOPUKM</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="#">DISKOPUKM</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">MAIN MENU</li>
                        <li class="{{ setActive('admin/dashboard') }}"><a class="nav-link"
                                href="{{ route('admin.dashboard.index') }}"><i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span></a></li>

                        @can('news.index')
                                <li class="{{ setActive('admin/news') }}"><a class="nav-link" href="{{ route('news.index') }}"><i class="fas fa-newspaper"></i>
                            <span>Berita</span></a></li>
                        @endcan

                        @can('tags.index')
                            <li class="{{ setActive('admin/tag') }}"><a class="nav-link" href="{{ route('tag.index') }}"><i class="fas fa-tags"></i> <span>Tags</span></a>
                            </li>
                        @endcan

                        @can('categories.index')
                            <li class="{{ setActive('admin/category') }}"><a class="nav-link" href="{{ route('category.index') }}"><i class="fas fa-folder"></i>
                        <span>Kategori</span></a>
                        </li>
                        @endcan

                        @can('services.index')
                            <li class="{{ setActive('admin/service') }}"><a class="nav-link" href="{{ route('service.index') }}"><i class="fas fa-concierge-bell"></i>
                        <span>Layanan</span></a></li>
                        @endcan

                        @can('koperasi.index')
                            <li class="{{ setActive('admin/koperasi') }}"><a class="nav-link" href="{{ route('koperasi.index') }}"><i class="fas fa-file-image"></i>
                        <span>Koperasi</span></a></li>
                        @endcan

                        @can('ukm.index')
                            <li class="{{ setActive('admin/ukm') }}"><a class="nav-link" href="{{ route('ukm.index') }}"><i class="fas fa-file-image"></i>
                        <span>UKM</span></a></li>
                        @endcan

                        @can('desa.index')
                            <li class="{{ setActive('admin/desa') }}"><a class="nav-link" href="{{ route('desa.index') }}"><i class="fas fa-file-image"></i>
                        <span>Desa</span></a></li>
                        @endcan

                        @if(auth()->user()->can('photos.index') || auth()->user()->can('videos.index') || auth()->user()->can('downloads.index'))
                        <li class="menu-header">MEDIA</li>
                        @endif

                        @can('photos.index')
                        <li class="{{ setActive('admin/photo') }}"><a class="nav-link"
                            href="{{ route('photo.index') }}"><i class="fas fa-image"></i>
                            <span>Foto</span></a></li>
                            @endcan

                            @can('videos.index')
                            <li class="{{ setActive('admin/video') }}"><a class="nav-link" href="{{ route('video.index') }}"><i class="fas fa-video"></i>
                                <span>Video</span></a></li>
                            @endcan

                            @can('downloads.index')
                                <li class="{{ setActive('admin/download') }}"><a class="nav-link" href="{{ route('download.index') }}"><i class="fas fa-file-image"></i>
                            <span>Dokumen</span></a></li>
                            @endcan

                        @if(auth()->user()->can('roles.index') || auth()->user()->can('permission.index') || auth()->user()->can('users.index'))
                        <li class="menu-header">PENGATURAN</li>
                        @endif

                        @can('sliders.index')
                            <li class="{{ setActive('admin/slider') }}"><a class="nav-link" href="{{ route('slider.index') }}"><i class="fas fa-laptop"></i>
                        <span>Sliders</span></a></li>
                        @endcan

                        @can('profile.index')
                        <li class="{{ setActive('admin/profile') }}"><a class="nav-link" href="{{ route('profile.index') }}"><i class="fas fa-user"></i>
                        <span>Profil</span></a></li>
                        @endcan

                        @can('profpegs.index')
                        <li class="{{ setActive('admin/profpeg') }}"><a class="nav-link" href="{{ route('profpeg.index') }}"><i class="fas fa-user"></i>
                        <span>Profil Pegawai</span></a></li>
                        @endcan

                        @can('contact.index')
                        <li class="{{ setActive('admin/contact') }}"><a class="nav-link" href="{{ route('contact.index') }}"><i class="fas fa-phone"></i>
                        <span>Kontak</span></a></li>
                        @endcan

                        @can('faq.index')
                        <li class="{{ setActive('admin/faq') }}"><a class="nav-link" href="{{ route('faq.index') }}"><i class="fas fa-question"></i>
                        <span>FAQ</span></a></li>
                        @endcan

                        @can('link.index')
                        <li class="{{ setActive('admin/link') }}"><a class="nav-link" href="{{ route('link.index') }}"><i class="fas fa-link"></i>
                        <span>Link Terkait</span></a></li>
                        @endcan

                        @can('sosmed.index')
                        <li class="{{ setActive('admin/sosmed') }}"><a class="nav-link" href="{{ route('sosmed.index') }}"><i class="fas fa-users"></i>
                        <span>Sosial Media</span></a></li>
                        @endcan

                        <li
                            class="dropdown {{ setActive('admin/role'). setActive('admin/permission'). setActive('admin/user') }}">
                            @if(auth()->user()->can('roles.index') || auth()->user()->can('permission.index') || auth()->user()->can('users.index'))
                                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Users
                                Management</span></a>
                            @endif

                            <ul class="dropdown-menu">
                                @can('roles.index')
                                    <li class="{{ setActive('admin/role') }}"><a class="nav-link" href="{{ route('role.index') }}"><i class="fas fa-unlock"></i> Roles</a></li>
                                @endcan

                                @can('permissions.index')
                                    <li class="{{ setActive('admin/permission') }}"><a class="nav-link" href="{{ route('permission.index') }}"><i class="fas fa-key"></i>Permissions</a></li>
                                @endcan

                                @can('users.index')
                                    <li class="{{ setActive('admin/user') }}"><a class="nav-link"
                                href="{{ route('user.index') }}"><i class="fas fa-users"></i> Users</a>
                                    </li>
                                @endcan
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            @yield('content')

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; {{ date('Y') }} <div class="bullet"></div> Kabupaten Bolaang Mongondow <div class="bullet"></div> All Rights
                    Reserved.
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        //active select2
        $(document).ready(function () {
            $('select').select2({
                theme: 'bootstrap4',
                width: 'style',
            });
        });

        //flash message
        @if(session()->has('success'))
        swal({
            type: "success",
            icon: "success",
            title: "BERHASIL!",
            text: "{{ session('success') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @elseif(session()->has('error'))
        swal({
            type: "error",
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @endif
    </script>
</body>
</html>
