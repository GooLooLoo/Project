<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>髮廊</title>
    <link rel="stylesheet" href="/css/Ming.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/slick.css">
    <link rel="stylesheet" href="/css/slick-theme.css">
    <style>
        .menu_btn ul li a {
            font-size: 24px;
            color: var(--color18);
        }

        .menu_btn ul li:hover a {
            font-size: 25px;
            color: var(--color21);
        }

        .hover-underline-animation {
            display: inline-block;
            position: relative;
            color: var(--color21);
        }

        .hover-underline-animation::after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--color21);
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .hover-underline-animation:hover::after {
            transform: scaleX(1);
            transform-origin: bottom center;
        }

        .underline-section {
            position: relative;
        }

        .underline-section::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 1px;
            bottom: 0;
            left: 0;
            background-color: var(--color18);
            transform-origin: bottom right;
        }
    </style>
</head>

<body class="bg-modal">
    <!-- navbar  -->
    <nav class="navbar navbar-expand-lg" style="background-color:var(--color17);">
        <div class="container">
            <!-- logo -->
            <a class="navbar-brand menu-btn h1" href="#"><img src="https://fakeimg.pl/60x60/200"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="menu_btn collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-3 me-auto">
                    <li class="nav-item">
                        <a class="nav-link hover-underline-animation" href="/">首頁</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-underline-animation" href="/about">關於我們</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-underline-animation" href="/news">最新消息</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-underline-animation" href="/designer">設計師</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-underline-animation" href="/product">推薦髮品</a>
                    </li>
                </ul>
                <div class="me-5 d-none d-lg-block">
                    <a href="#">
                        <button class="btn-my01" data-bs-toggle="modal" data-bs-target="#reserve">我要預約</button></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- 僅在about頁面顯示 -->
    @if(Request::is("about/*","about"))
    <div class="container-fluid bg-cover align-content-center" style="background-image: url(/images/wrap.jpg);height:80vh; background-attachment:fixed;">
        <div class="title text-center">
            <div class="h1 txt-title fw-bold" style="letter-spacing: 0.2em; text-shadow:2px 2px 6px #000000;">關於我們</div>
            <div class="h4 txt-title mt-3" style="letter-spacing: 0.2em; text-shadow:2px 2px 6px #000000;">About</div>
        </div>
    </div>
    @endif
    @if(Request::is("news/*","news"))
    <div class="container-fluid bg-cover align-content-center" style="background-image: url(/images/wrap.jpg);height:80vh; background-attachment:fixed;">
        <div class="title text-center">
            <div class="h1 txt-title fw-bold" style="letter-spacing: 0.2em; text-shadow:2px 2px 6px #000000;">最新消息</div>
            <div class="h4 txt-title mt-3" style="letter-spacing: 0.2em; text-shadow:2px 2px 6px #000000;">News</div>
        </div>
    </div>
    @endif
    @if(Request::is("designer/*","designer"))
    <div class="container-fluid bg-cover align-content-center" style="background-image: url(/images/wrap.jpg);height:80vh; background-attachment:fixed;">
        <div class="title text-center">
            <div class="h1 txt-title fw-bold" style="letter-spacing: 0.2em; text-shadow:2px 2px 6px #000000;">設計師</div>
            <div class="h4 txt-title mt-3" style="letter-spacing: 0.2em; text-shadow:2px 2px 6px #000000;">Designer</div>
        </div>
    </div>
    @endif
    @if(Request::is("product/*","product"))
    <div class="container-fluid bg-cover align-content-center" style="background-image: url(/images/wrap.jpg);height:80vh; background-attachment:fixed;">
        <div class="title text-center">
            <div class="h1 txt-title fw-bold" style="letter-spacing: 0.2em; text-shadow:2px 2px 6px #000000;">推薦產品</div>
            <div class="h4 txt-title mt-3" style="letter-spacing: 0.2em; text-shadow:2px 2px 6px #000000;">Product</div>
        </div>
    </div>
    @endif
    <!-- 每一頁內容 -->
    @yield("content")
    <!-- footer -->
    <div class="footer mt-5 bg-card">
        <div class="row text01">
            <div class="mt-3 col-12 col-md-4">
                <div class="text-center"><a href=""><img src="https://fakeimg.pl/120x120/200"></a></div>
                <div class="h4 mt-3 ms-2">407台中市西屯區工業區一路100號</div>
            </div>
            <div class="col-12 col-md-4 mt-2">
                <div class="h4">
                    <p class="">營業時間:</p>
                    <p class="my-0"> 禮拜一 ~ 禮拜五 11:00~20:00</p>
                </div>
                <div class="h4">
                    <p class="">電話:</p>
                    <p class="my-0"> 00-000-0000</p>
                </div>
            </div>
            <div class="col-12 col-md-4 mt-4 text-center d-none d-md-block">
                <a href="#"><button class="btn-my01" data-bs-toggle="modal" data-bs-target="#reserve">我 要<br>預 約</button></a>
            </div>
        </div>
    </div>

    <!-- 預約Modal -->
    <div class="modal fade" id="reserve" tabindex="-1" aria-labelledby="reserveModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="color:#4b3a2a;">
                <div class="modal-header" style="background-color: #d2b48c;">
                    <h1 class="modal-title fs-5 fw-bold" id="exampleModalLabel">我要預約</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-modal">
                    <div class="row timeline-section">
                        <div class="col-6">
                            <div class="h5 fw-bold">立即預約您的美髮服務，讓我們的專業設計師為您打造專屬髮型。</div>
                            <div class="h5">溫馨提醒：</div>
                            <div>
                                <p>請提前10分鐘抵達，享受更完整的服務體驗。</p>
                                <p>如果您需要更改或取消預約，請至少提前24小時通知我們，以便重新安排時間。</p>
                            </div>
                            <div class="h5">注意事項：</div>
                            <div>
                                <p class="text-danger">送出表單後，我們會在三天內與您聯繫，如未聯繫上則視同預約失敗</p>
                                <p>特惠活動期間，預約名額有限，請儘早安排以確保您心儀的時段。</p>
                            </div>
                            <p>我們期待為您提供一流的服務！</p>
                            <p>地址:407台中市西屯區工業區一路100號</p>
                            <p>連絡電話: 00-000-0000</p>
                        </div>
                        <div class="col-6">
                            <!-- r_modal_date 日期 -->
                            <div class="mt-3">
                                <label for="r_modal_date" class="form-label">預約日期</label>
                                <input type="date" class="form-control" id="r_modal_date" name="r_modal_date">
                            </div>
                            <div class="mt-3">
                                <label for="r_modal_date" class="form-label">設計師</label>
                                <select type="text" class="form-control" id="r_modal_date" name="r_modal_date">
                                    <option value="" selected>---不指定設計師---</option>
                                    <option value="James Lin">James Lin</option>
                                    <option value="Michael Wang">Michael Wang</option>
                                    <option value="Sophie Lee">Sophie Lee</option>
                                    <option value="Emily Chen">Emily Chen</option>
                                    <option value="Linda Zhang">Linda Zhang</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="r_modal_date" class="form-label">姓名</label>
                                <input type="text" class="form-control" id="r_modal_date" name="r_modal_date">
                            </div>
                            <div class="mt-3">
                                <label for="r_modal_date" class="form-label">電話</label>
                                <div class="input-group">
                                    <label for="r_modal_date" class="input-group-text">09</label>
                                    <input type="phone" class="form-control" id="r_modal_date" name="r_modal_date">
                                </div>
                            </div>
                            <div class="mt-3">
                                <label for="r_modal_date" class="form-label">備註</label>
                                <textarea type="text" class="form-control" id="r_modal_date" name="r_modal_date"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-modal" style="background-color: #d2b48c;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-primary" style="background-color: #c3c3a7;">預約
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script>
        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
        $('.autoplay').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            responsive: [{
                breakpoint: 720,
                settings: {
                    slidesToShow: 1,
                    autoplaySpeed: 1500,
                }
            }, {
                breakpoint: 960,
                settings: {
                    slidesToShow: 2,
                }
            }]
        });
    </script>
</body>

</html>