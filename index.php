<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CỬA HÀNG MỸ PHẨM</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="test.css" />
</head>
<body>
    <header>
        <nav>
            <div ><b style="font-size: 30px;">CỬA HÀNG MỸ PHẨM</b>
            </div>
            <div class="content-nav">
                <ul>
                    <li><a href="index.php">Trang Chủ</a></li>
                    <li><a href="lienhe.php">Liên Hệ</a></li>
                    <li><a href="gioithieu.php">Giới Thiệu</a></li>
                </ul>
                <form>
                    <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." />
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <button id="cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                Giỏ Hàng
            </button>
            <button id="login" ><a href="dangnhap.php">Đăng nhập</a></button>
            <button id="login" ><a href="dangki.php">Đăng kí</a></button>
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Giỏ Hàng</h5>
                        <span class="close">&times;</span>
                    </div>
                    <div class="modal-body">
                        <div class="cart-row">
                            <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                            <span class="cart-price cart-header cart-column">Giá</span>
                            <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                        </div>
                        <div class="cart-items">
                        </div>
                        <div class="cart-total">
                            <strong class="cart-total-title">Tổng Cộng:</strong>
                            <span class="cart-total-price">0VNĐ</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close-footer">Đóng</button>
                        <button type="button" class="btn btn-primary order">Thanh Toán</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section class="wrapper">
        <div class="products">
            <ul>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="https://cdn.shopify.com/s/files/1/0667/9416/0378/products/FirstCareActivatingSerum-120ml_56a9dd54-b748-4689-a311-c2a75c752653.jpg?v=1673186001"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Tinh chất dưỡng da</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">3.600.000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="https://media.hasaki.vn/catalog/product/f/a/facebook-dynamic-kem-chong-nang-skin1004-cho-da-nhay-cam-spf-50-50ml-1646014098_img_358x358_843626_fit_center.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Kem chống nắng</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">500.000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="https://media.hasaki.vn/catalog/product/p/r/promotions-auto-kem-nen-maybelline-min-nhe-kiem-dau-chong-nang-120-classic-ivory-30ml_1DdhkTpoQKFUXeXs_img_358x358_843626_fit_center.png"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Kem nền</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">200.000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product no-margin">
                    <div class="img-product">
                        <img class="img-prd"
                            src="https://media.hasaki.vn/catalog/product/f/a/facebook-dynamic-sua-duong-the-vaseline-chong-nang-va-sang-da-spf-24-350ml-1676608987_img_358x358_843626_fit_center.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Sữa dưỡng thể</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">1.500.000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="https://static.comem.vn/uploads/November2022/bo-cham-soc-da-rau-ma-cho-da-dau-mun_sp2x.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Bộ sản phẩm chăm sóc da</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">240.000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="https://media.hasaki.vn/catalog/product/t/o/top_fb_ads_422207968_050722-1656991298_img_358x358_843626_fit_center.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Kem dưỡng Obagi</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">1.460.000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product">
                    <div class="img-product">
                        <img class="img-prd"
                            src="https://media.hasaki.vn/catalog/product/f/a/facebook-dynamic-sua-chong-nang-la-roche-posay-bao-ve-da-toi-uu-spf50-50ml-1663926768_img_358x358_843626_fit_center.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Sữa chống nắng</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">854.000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
                <li class="main-product no-margin">
                    <div class="img-product">
                        <img class="img-prd"
                            src="https://cuahanglamdep.com//data/2021/us1000/data/08/kem-duong-da-chong-lao-hoa-sk-ii-rna-radical-new-age-80g.jpg"
                            alt="">
                    </div>
                    <div class="content-product">
                        <h3 class="content-product-h3">Kem chống lão hóa</h3>
                        <div class="content-product-deltals">
                            <div class="price">
                                <span class="money">3.200.000đ</span>
                            </div>
                            <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>