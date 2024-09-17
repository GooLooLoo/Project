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
            <a class="navbar-brand menu-btn h1" href="#"><img src="images\LOGO.jpg" style="height:60px"></a>
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
                @if(Session::has("username"))
                <p class=" mt-3 mx-3 text01">您好 {{session()->get("username")}}</p>
                <button type="button" class="btn btn-warning" onclick="doLogout()">登出</button>
                @else
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#login">登入</button>
                <button class="btn btn-secondary ms-3" data-bs-toggle="modal" data-bs-target="#register">註冊</button>
                @endif
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
                <div class="text-center"><a href=""><img src="images\LOGO.jpg" style="height:120px;"></a></div>
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
                <form method="post" id="formReserve" action="/member/reserve">
                    {{csrf_field()}}
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
                                    <label for="r_modal_designer" class="form-label">設計師</label>
                                    <select type="text" class="form-control" id="r_modal_designer" name="r_modal_designer">
                                        <option value="" selected>---不指定設計師---</option>
                                        <option value="James Lin">James Lin</option>
                                        <option value="Michael Wang">Michael Wang</option>
                                        <option value="Sophie Lee">Sophie Lee</option>
                                        <option value="Emily Chen">Emily Chen</option>
                                        <option value="Linda Zhang">Linda Zhang</option>
                                    </select>
                                </div>
                                <div class="mt-3">
                                    <label for="r_modal_phone" class="form-label">電話</label>
                                    <div class="input-group">
                                        <input type="phone" class="form-control" id="r_modal_phone" name="r_modal_phone">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label for="r_modal_remark" class="form-label">備註</label>
                                    <textarea type="text" class="form-control" id="r_modal_remark" name="r_modal_remark"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-modal" style="background-color: #d2b48c;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                        <button type="submit" class="btn btn-primary" style="background-color: #c3c3a7;">預約
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- 登入Modal -->
    <div class="modal fade" id="login" tabindex="-1" aria-labelledby="loginLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- modal標題 -->
                <div class="modal-header" style="background-color: #5A3E2B; color:#FFF5E1;">
                    <h1 class="modal-title fs-5" id="loginLabel">會員登入</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" id="form1" action="/member/login">
                    {{csrf_field()}}
                    <div class="modal-body" style="background-color: #FFF5E1;">
                        <!-- 帳號 -->
                        <div class="mt-3">
                            <label for="userName" class="form-label">帳號</label>
                            <input type="text" class="form-control" id="userName" name="userName">
                            <div class="invalid-feedback">帳號或密碼錯誤</div>
                        </div>
                        <!-- 密碼 -->
                        <div class="mt-3">
                            <label for="password" class="form-label">密碼</label>
                            <input type="password" class="form-control " id="password" name="password">
                            <div class="valid-feedback">輸入符合規定</div>
                            <div class="invalid-feedback">輸入不符合規定</div>
                        </div>
                    </div>
                    <!-- 按鈕 -->
                    <div class="modal-footer" style="background-color: #FFF5E1;">
                        <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #F5E0C3;">取
                            消</button>
                        <button id="modal_login_btn" type="button" class="btn btn-success" onclick="doLogin()"
                            style="background-color: #5A3E2B;">登 入</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- registerModal -->
    <div class="modal fade" id="register" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- modal標題 -->
                <div class="modal-header" style="background-color: #5A3E2B; color:#FFF5E1;">
                    <h1 class="modal-title fs-5" id="registerLabel">會員註冊</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="background-color: #FFF5E1;">
                    <div class="row">
                        <div class="col-6 overflow-auto">
                            <div class="h4">會員守則</div>
                            <p><span
                                    class="fw-600">1.誠實提供資料：</span>會員在註冊時必須提供真實、完整的個人資料，如姓名、聯絡方式和居住縣市等，以便髮廊提供更好的服務和優惠。
                            </p>
                            <p><span
                                    class="fw-600">2.合理使用會員福利:</span>會員應按照規定合理使用會員福利，包括折扣、積分、優惠券等。不得濫用、轉讓或以任何方式不正當使用會員福利，違者可能會被取消會員資格。
                            </p>
                        </div>
                        <div class="col-6">
                            <form method="post" id="formR" action="">
                                {{csrf_field()}}
                                <!-- 帳號,rModal_username-->
                                <div class="mt-3">
                                    <label for="rModal_username" class="form-label">帳號</label>
                                    <input type="text" class="form-control is-invalid" id="rModal_username"
                                        name="rModal_username" placeholder="字數3-8" required>
                                    <div></div>
                                    <div class="valid-feedback">輸入符合規定</div>
                                    <div class="invalid-feedback">輸入不符合規定</div>
                                </div>
                                <!-- 密碼,rModal_password -->
                                <div class="mt-3">
                                    <label for="rModal_password" class="form-label">密碼</label>
                                    <input type="password" class="form-control" id="rModal_password"
                                        name="rModal_password" placeholder="字數3-8" minlength="3" maxlength="8" required>
                                </div>
                                <!-- 確認密碼,rModal_re_password -->
                                <div class="mt-3">
                                    <label for="rModal_re_password" class="form-label ">確認密碼</label>
                                    <input type="password" class="form-control  is-invalid" id="rModal_re_password"
                                        name="rModal_password" placeholder="再次輸入密碼">
                                    <div class="valid-feedback">輸入密碼相同</div>
                                    <div class="invalid-feedback">輸入密碼不相同</div>
                                </div>
                                <!-- e-mail,rModal_email-->
                                <div class="mt-3">
                                    <label for="rModal_email" class="form-label">e-mail</label>
                                    <input type="email" class="form-control is-invalid" id="rModal_email" name="rModal_email" placeholder="字數3-15" required>
                                    <div class="valid-feedback">輸入符合規定</div>
                                    <div class="invalid-feedback">輸入不符合規定</div>
                                </div>
                                <div class="mt-3">
                                    <label for="rModal_location" class="form-label">居住縣市</label>
                                    <select class="form-select" name="rModal_location" id="rModal_location">
                                        <option class="text-center" value="" disabled selected>---請選擇縣市名稱---</option>
                                        <option value="台北市">台北市</option>
                                        <option value="基隆市">基隆市</option>
                                        <option value="新北市">新北市</option>
                                        <option value="連江縣">連江縣</option>
                                        <option value="宜蘭縣">宜蘭縣</option>
                                        <option value="新竹市">新竹市</option>
                                        <option value="新竹縣">新竹縣</option>
                                        <option value="桃園市">桃園市</option>
                                        <option value="苗栗縣">苗栗縣</option>
                                        <option value="台中市">台中市</option>
                                        <option value="彰化縣">彰化縣</option>
                                        <option value="南投縣">南投縣</option>
                                        <option value="嘉義市">嘉義市</option>
                                        <option value="嘉義縣">嘉義縣</option>
                                        <option value="雲林縣">雲林縣</option>
                                        <option value="台南市">台南市</option>
                                        <option value="高雄市">高雄市</option>
                                        <option value="澎湖縣">澎湖縣</option>
                                        <option value="金門縣">金門縣</option>
                                        <option value="屏東縣">屏東縣</option>
                                        <option value="台東縣">台東縣</option>
                                        <option value="花蓮縣">花蓮縣</option>
                                    </select>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer mt-3" style="background-color: #FFF5E1;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取 消</button>
                        <button id="rModal_ok_btn" type="button" class="btn btn-success">確 認</button>
                    </div>
                    </form>
                </div>
                <!-- 按鈕 -->

            </div>
        </div>
    </div>

    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/sweetalert2@11.js"></script>
    <script>
        // 旗子
        var flag_rModal_username = false;
        var flag_rModal_re_password = false;
        var flag_rModal_email = false;
        $(function() {

            /*註冊功能*/
            /* 監聽註冊按鈕內容*/
            // 插旗
            // 監聽rModal_username 3~8個字
            $("#rModal_username").bind("input propertychange", function() {
                if ($(this).val().length > 2 && $(this).val().length < 9) {
                    // 符合帳號規定候傳至後端確認帳號使否可以使用
                    // 取得畫面上的帳號
                    username = $("#rModal_username").val();
                    $.ajax({
                        type: "post",
                        // member確認帳號是否存在
                        url: "/member/chkUserName",
                        data: {
                            userName: username,
                            _token: "{{csrf_token()}}"
                        },
                        success: function(data) {
                            if (data == "Y") {
                                $("#rModal_username").removeClass("is-invalid");
                                $("#rModal_username").addClass("is-valid");
                                $("#rModal_username").next().html('<span class="text-success">帳號可以使用</span>');
                                flag_rModal_username = true;
                            } else {
                                $("#rModal_username").removeClass("is-valid");
                                $("#rModal_username").addClass("is-invalid");
                                $("#rModal_username").next().html('<span class="text-danger">帳號已有人使用</span>');
                                // 帳號重複，拔旗
                                flag_rModal_username = false;
                            }

                        }
                    });
                } else {
                    $(this).removeClass("is-valid");
                    $(this).addClass("is-invalid");
                    $(this).next().html(' ');
                    flag_rModal_username = false;
                }
            });
            // 監聽rModal_re_password 3~8個字
            $("#rModal_re_password").bind("input propertychange", function() {
                if ($(this).val() == $("#rModal_password").val()) {
                    $(this).removeClass("is-invalid");
                    $(this).addClass("is-valid");
                    flag_rModal_re_password = true;
                } else {
                    $(this).removeClass("is-valid");
                    $(this).addClass("is-invalid");
                    flag_rModal_re_password = false;
                }
            });
            // 監聽rModal_email 3~15個字
            $("#rModal_email").bind("input propertychange", function() {
                if ($(this).val().length > 2 && $(this).val().length < 16) {
                    $(this).removeClass("is-invalid");
                    $(this).addClass("is-valid");
                    flag_rModal_email = true;
                } else {
                    $(this).removeClass("is-valid");
                    $(this).addClass("is-invalid");
                    flag_rModal_email = false;
                }
            });

            // 註冊按鈕監聽，待解決
            $("#rModal_ok_btn").click(function() {
                console.log(flag_rModal_username);
                console.log(flag_rModal_re_password);
                if (flag_rModal_username && flag_rModal_re_password && flag_rModal_email) {
                    doNext();
                } else {
                    Swal.fire({
                        position: "top-center",
                        icon: "error",
                        title: "欄位錯誤,請重新輸入",
                        showConfirmButton: false,
                        timer: 2000
                    });
                }
            });

        }); //end function

        // 登入按鈕
        function doLogin() {
            $.ajax({
                url: "/member/login",
                type: "post",
                data: {
                    userName: $("#userName").val(),
                    password: $("#password").val(),
                    _token: "{{csrf_token()}}"
                },
                success: function(data) {
                    if (data == "N") {
                        $("#userName").addClass("is-invalid");
                    } else {
                        Swal.fire({
                            position: "top-center",
                            icon: "success",
                            title: "登入成功",
                            showConfirmButton: false,
                            timer: 1500
                        }).then(() => {
                            location.href = "/";
                        });
                    }

                }
            });
        }
        // 登出按鈕
        function doLogout() {
            $.ajax({
                url: "/member/logout",
                type: "post",
                data: {
                    _token: "{{csrf_token()}}"
                },
                success: function(data) {
                    console.log(data);
                    Swal.fire({
                        position: "top-center",
                        icon: "success",
                        title: "登出成功",
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        location.href = "/";
                    });
                }
            });
        }

        function doNext() {
            // 設定目標from的action動作
            document.forms["formR"].action = "/member/register";
            // 對目標form做submit
            document.forms["formR"].submit();
        }
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