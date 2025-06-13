<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="text-center mt-4">
                <h1 class="display-1">😞</h1>
                <p class="lead">Không có dữ liệu</p>
                @if (!isset($is_filtered))
                <p>Hiện tại không có đơn hàng nào!</p>
                @else
                <p>Không có đơn hàng với trạng thái {{ $is_filtered }}</p>
                @endif

                @if (auth()->user()->role_id == 2)
                <a href="/product" class="btn btn-primary mt-3">
                    <i class="fas fa-shopping-cart me-1"></i>
                    Mua một số sản phẩm ngay bây giờ
                </a>
                @else
                <a href="/order/order_history" class="btn btn-secondary mt-3">
                    <i class="fas fa-history me-1"></i>
                    Kiểm tra lịch sử đơn hàng
                </a>
                @endif
            </div>
        </div>
    </div>
</div>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.btn');
    });
</script>
