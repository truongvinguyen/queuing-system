
@extends('layouts.app')

@section('content')
<div class="sidebar">
  <div class="logo-details d-flex justify-content-center align-items-center">
    <span class="logo_name"><img src="/images/Logoalta.png" alt=""></span>
  </div>
  <ul class="nav-links">
    <li>
        <a href="/" >
            <i class='bx bxs-dashboard'></i>
            <span class="links_name">Dashboard</span>
        </a>
    </li>
    <li class="active">
        <a href="/thiet-bi" >
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
    <li>
        <a href="#" class="">
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
    <li class="log_out">
        <a href="#">
            <i class='bx bx-log-in'></i>
            <span class="links_name">Log out</span>
        </a>
    </li>
</ul>
</div>
<section class="home-section">
  <nav>
    <div class="sidebar-button">
      <span class="text-secondary">Thiết bị</span> <i class='bx bx-chevron-right text-secondary'></i><span
        class="dashboard text-secondary">Danh sách thiết bị</span><i
        class='bx bx-chevron-right text-secondary'></i><span class="dashboard">Chi tiết thiết bị</span>
    </div>
    <div class="profile-details d-flex justify-content-end align-items-center">
      <div class="container d-flex justify-content-end align-items-center">
        <div class="row">
          <div class="col-md-2">
            <img src="/images/avt.jpg" alt="">
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
    <h3 class="text-primary" style="margin-left: 30px;font-size: 24px;margin-bottom: 20px;">Quản lý thiết bị</h3>
     
    <a href="/chinh-sua-thiet-bi/{{$data->id}}"><div class="edit-device">
        <img src="/images/component 2.png" alt="">
      </div>
    </a>
      <div class="box-detail">
        <div class="col-md-12">
            <h5 class="text-primary" style="padding: 15px;">Thông tin thiết bị</h5>
            <div class="row detail">
                <div class="col-md-6">
                    <table>
                        <tr>
                            <th class="title-detail">Mã thiết bị:</th>
                            <td>{{$data->device_code}}</td>
                        </tr>
                        <tr>
                           <th class="title-detail">Tên thiết bị</th>
                           <td>{{$data->device_name}}</td>
                        </tr>
                        <tr>
                            <th class="title-detail">Địa chỉ IP</th>
                            <td>{{$data->device_id}}</td>
                         </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table>
                        <tr>
                            <th class="title-detail">Loại thiết bị:</th>
                            <td>{{$data->device_category}}</td>
                        </tr>
                        <tr>
                           <th class="title-detail">Tên Đăng nhập:</th>
                           <td>{{$data->device_username}}</td>
                        </tr>
                        <tr>
                            <th class="title-detail">Mật khẩu:</th>
                            <td>{{$data->device_password}}</td>
                         </tr>
                    </table>
                </div>
                <div class="col-md-12" style="margin-top: 10px;">
                  <b class="title-detail">Dịch vụ sử dụng:</b>
                </div>
                <div class="col-md-12" style="margin-top: 10px;">
                  <span>{{$data->device_title}}</span>
                </div>
            </div>
        </div>
      </div>
 
    
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