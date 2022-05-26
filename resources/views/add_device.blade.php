@extends('layouts.app')

@section('content')
<div class="sidebar">
    <div class="logo-details d-flex justify-content-center align-items-center">
      <span class="logo_name"><img src="images/Logoalta.png" alt=""></span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#" class="active">
          <i class='bx bxs-dashboard'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#" class="">
          <i class='bx bx-laptop'></i>
          <span class="links_name">Thiết bị</span>
        </a>
      </li>
      <li>
        <a href="#" class="">
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
          class='bx bx-chevron-right text-secondary'></i><span class="dashboard">Thêm thiết bị</span>
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
      <h3 class="text-primary" style="margin: 30px;" >Quản lý thiết bị</h3>
      <div class="form-box">
        <div class="col-md-12">
          <h5 class="text-primary" >Thông tin thiết bị</h5>

          <div class="row" style="padding: 30px;">
            <div class="col-md-12">
              <form>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Mã thiết bị: <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control" 
                      placeholder="Nhập mã thiết bị">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Loại thiết bị: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control"  placeholder="Nhập loại thiết bị">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Tên thiết bị: <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control" 
                      placeholder="Nhập tên thiết bị">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Tên đăng nhập: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Nhập tên đăng nhập">
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Địa chỉ IP: <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control" 
                      placeholder="Nhập địa chỉ IP" autocomplete = "off">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Mật khẩu: <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" placeholder="Nhập mật khẩu" autocomplete = "off">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="exampleInputPassword1">Dịch vụ sử dụng: <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="Nhập mật khẩu" >
                  </div>
                  <div><span class="text-danger">*</span> Là thông tin trường băt buộc</div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script>

@endsection