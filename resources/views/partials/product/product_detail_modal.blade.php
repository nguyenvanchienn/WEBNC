<div class="program-modal modal fade" id="ProductDetailModal" tabindex="-1" role="dialog" aria-hidden="true"
  data-bs-keyboard="false" data-bs-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="{{ '/'.'storage/icons/close-icon.svg' }}"
                  alt="Đóng Modal" />
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <h2 class="text-uppercase">
                            </h2>
                            <br>
                            <p class="orientasi text-center">
                            </p>
                            <img id="modal-image" width="70%" class="img-fluid d-block mx-auto" alt="" />
                            <div>
                                <h3>
                                    Mô tả sản phẩm
                                </h3>
                                <div class="content">
                                    <div>
                                        <p class="description">
                                        </p>
                                    </div>
                                    <div class="pembagi"></div>
                                    <div class="price">
                                    </div>
                                    <div class="stock">
                                    </div>
                                    <div class="discount">

                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-xl j mt-4" data-bs-dismiss="modal" type="button">Trở lại</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideInDown {
        from { transform: translateY(-20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    @keyframes slideInLeft {
        from { transform: translateX(-20px); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }

    @keyframes slideInRight {
        from { transform: translateX(20px); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }

    @keyframes zoomIn {
        from { transform: scale(0.8); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }
</style>
