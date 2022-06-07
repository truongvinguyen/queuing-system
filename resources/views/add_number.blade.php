@extends('layouts.app')

@section('content')
<div class="sidebar">
    <div class="logo-details d-flex justify-content-center align-items-center">
        <span class="logo_name"><img src="images/Logoalta.png" alt=""></span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="/">
                <i class='bx bxs-dashboard'></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="/thiet-bi" class="">
                <i class='bx bx-laptop'></i>
                <span class="links_name">Thiết bị</span>
            </a>
        </li>
        <li>
            <a href="/dich-vu" class="">
                <i class='bx bx-conversation'></i>
                <span class="links_name">Dịch vụ</span>
            </a>
        </li>
        <li class="active">
            <a href="/number" class="">
                <i class='bx bx-layer'></i>
                <span class="links_name">Cấp số</span>
            </a>
        </li>
        <li>
            <a href="#" class="">
                <i class='bx bx-trending-up'></i>
                <span class="links_name">Báo cáo</span>
            </a>
        </li>



        <li>
            <a href="#">
                <i class='bx bx-cog'></i>
                <span class="links_name">Cài đặt hệ thống</span>
            </a>
        </li>
        @guest
        @if (Route::has('login'))

        @endif

        @if (Route::has('register'))

        @endif
        @else
        <li class="log_out">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class='bx bx-log-in'></i>
                <span class="links_name">Đăng xuất</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </li>
        @endguest
    </ul>
</div>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <span class="text-secondary">Thiết bị</span> <i class='bx bx-chevron-right text-secondary'></i><span
                class="dashboard text-secondary">Danh sách cấp số</span><i
                class='bx bx-chevron-right text-secondary'></i><span class="dashboard">Cấp số</span>
        </div>
        <div class="profile-details d-flex justify-content-end align-items-center">
            <div class="container d-flex justify-content-end align-items-center">
                <div class="row">
                    <div class="col-md-2">
                        <img src="images/avt.jpg" alt="">
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="admin_hello col-md-12">
                                <span>Xin chào</span>
                            </div>
                            <div class="admin_name col-md-12">
                                <span>Nguyễn Trường Vi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="home-content" id="device">
        <h3 class="text-primary" style="margin-left: 30px;font-size: 24px;margin-top: 25px;">Quản lý dịch vụ</h3>
        <form action="" method="post">
            <div class="form-box number" style="min-height: 604px;margin-top: 28px;">
                <div class="col-md-12">
                    <div class="form">
                        <div class="row d-flex justify-content-center">
                            <h1 class="title col-md-12 text-center">CẤP SỐ MỚI</h1>
                            <span class="col-md-12 text-center">Dịch vụ khách hàng lựa chọn</span>
                            <form class="content col-md-12 text-center">                             
                                <select class="form-control" name="" id="">                             
                                </select>                           
                                <div class="col-md-12 d-flex justify-content-center align-items-center" style="position: absolute;
                                top: 225px;">
                                    <button class="btn-huy btn-add-device  ">Hủy bỏ</button>
                                    <button class="btn-add btn-add-device  btn btn-primary">In số</button>
                                </div>
                            </form>
                          
                        </div>
                    </div>
                </div>

            </div>

        </form>
    </div>
</section>

<!-- <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script> -->

@endsection