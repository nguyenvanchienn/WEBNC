
<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            @can("is_admin")
            <div class="sb-sidenav-menu-heading">Quản trị viên</div>
            <a class="nav-link" href="/home">
                <div class="sb-nav-link-icon"><i class="fas fa-fw fa-tachometer-alt"></i></div>
                Bảng điều khiển
            </a>
            <a class="nav-link" href="/home/customers">
                <div class="sb-nav-link-icon"><i class="fas fa-fw fa-solid fa-users"></i></div>
                Khách hàng
            </a>
            <a class="nav-link" href="/transaction">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-fw fa-dollar-sign"></i></div>
                Giao dịch
            </a>
            @else
            <div class="sb-sidenav-menu-heading">Khách hàng</div>
            <a class="nav-link" href="/home">
                <div class="sb-nav-link-icon"><i class="fas fa-fw fa-home-alt"></i></i></div>
                Trang chủ
            </a>
            @endcan

            <div class="sb-sidenav-menu-heading">Giao diện</div>
            <a class="nav-link" href="/product">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-fw fa-dumpster"></i></div>
                Sản phẩm
            </a>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
              aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-fw fa-columns"></i></div>
                Đơn hàng
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-fw fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="/order/order_data">Dữ liệu đơn hàng</a>
                    <a class="nav-link" href="/order/order_history">Lịch sử đơn hàng</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Đang đăng nhập với tư cách:</div>
        {{ auth()->user()->role->role_name }}
    </div>
</nav>
