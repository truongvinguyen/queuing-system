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
        <li class="active">
            <a href="/thiet-bi">
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
                class="dashboard">Danh sách thiết bị</span>
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
        <div class="device">
            <div class="col-md-12 ">
                <h3 class="text-primary" style="margin-bottom: 30px;">Danh sách thiết bị</h3>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="inputEmail4" class="form-label">Trạng thái hoạt động</label>
                            <div class="dropdown">
                                <button style="text-align: left;padding: 3px;" class="form-control  dropdown-toggle"
                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Tất cả
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="/thiet-bi">tất cả</a></li>
                                    <li><a class="dropdown-item" href="/device-active">đang hoạt động</a></li>
                                    <li><a class="dropdown-item" href="/device-shut-dow">ngưng hoạt động</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="inputEmail4" class="form-label">Trạng thái kết nối</label>
                            <button style="text-align: left;padding: 3px;" class="form-control  dropdown-toggle"
                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Tất cả
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="/thiet-bi">tất cả</a></li>
                                <li><a class="dropdown-item" href="/device-connecting">đang kết nối</a></li>
                                <li><a class="dropdown-item" href="/device-disconnect">ngưng kết nối</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-3 search">
                        <div class="form-group">
                            <form action="" method="get">
                                @csrf
                                <label for="inputEmail4" class="form-label">Từ khóa</label>
                                <input type="text" name="key" class="form-control" placeholder="Nhập từ khóa">
                                <button type="submit" name="submit"><i class='bx bx-search'></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="add-device">
                        <a href="/them-thiet-bi">
                            <img src="/images/Component 1.png" alt="">
                        </a>
                    </div>

                    <div class="col-md-12">
                        <div class="table100 ver1 m-b-110">
                            <div class="table100-body js-pscroll ps ">
                                <table>
                                    <thead>
                                        <tr class="">
                                            <th class="text-center">Mã thiết bị</th>
                                            <th class="text-center">Tên thiết bị</th>
                                            <th class="text-center">Địa chỉ IP</th>
                                            <th class="text-center"> Trạng thái hoạt động</th>
                                            <th class="text-center">Trạng thái kết nối</th>
                                            <th class="text-center">Dịch vụ sử dụng</th>
                                            <th class="text-center"><a href=""></a></th>
                                            <th class="text-center"><a href=""></a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $item)
                                        <tr class="">
                                            <td class="text-center">KIO_0{{$item->id}}</td>
                                            <td class="text-center">{{$item->device_name}}</td>
                                            <td class="text-center">{{$item->device_id}}</td>
                                            @if($item->device_status ==1)
                                            <td class="text-center"><i class='bx bxs-circle text-success'></i> Đang
                                                hoạt động</td>
                                            @else
                                            <td class="text-center"><i class='bx bxs-circle text-danger'></i> Ngưng
                                                hoạt động</td>
                                            @endif
                                            @if($item->device_conection ==1)
                                            <td class="text-center"><i class='bx bxs-circle text-success'></i> Đang
                                                kết nối</td>
                                            @else
                                            <td class="text-center"><i class='bx bxs-circle text-danger'></i> Mất kết
                                                nối</td>
                                            @endif
                                            <td class="text-center">{{$item->device_title}}</td>
                                            <td class="text-center"><a class="text-info"
                                                    href="/chi-tiet/{{$item->id}}">Chi tiết</a></td>
                                            <td class="text-center"><a class="text-info"
                                                    href="/chinh-sua-thiet-bi/{{$item->id}}">Cập nhật</a></td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-end" style="margin-top:10px ;">


                        {{ $data->links() }}
                        <!-- <li class="nav-item">
                                    <a class="nav-link" href="#"><i class='bx bxs-left-arrow text-secondary'></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-primary" href="#">1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="#">2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="#">3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="#">4</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="#">5</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="#">...</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-secondary" href="#">10</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class='bx bxs-right-arrow text-secondary'></i></a>
                                </li> -->


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