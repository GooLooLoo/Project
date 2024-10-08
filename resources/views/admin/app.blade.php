<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>微笑髮廊後臺管理系統</title>
    <link rel="stylesheet" href="/css/Ming.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/lightbox.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-secondary sticky-top mb-3">
        <div class="container-fluid">
            <a class="navbar-brand fw-600 text-bg-secondary" href="/admin/home">後台管理系統</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- active 待處理 -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/admin/member/list">會員管理</a>
                    </li>
                    <!-- afterwork -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">首頁</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/admin/home/bannerPhoto/list">banner圖片</a></li>
                            <li><a class="dropdown-item" href="/admin/home/title/list">首頁標題</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/about/list">關於我們</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/news/list">最新消息</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-600" href="/admin/designer/list">設計師</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-600" href="/admin/product/list">產品管理</a>
                    </li>
            </div>
        </div>
    </nav>
    @yield("content")

    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery-3.7.1.min.js"></script>
    <script src="/js/sweetalert2@11.js"></script>
    <script src="/js/lightbox.min.js"></script>
    <script src="/js/html2canvas.min.js"></script>
    <script>
        var Today = new Date();
        var year = Today.getFullYear();
        var month = Today.getMonth() + 1;
        // 今天日
        var day = Today.getDate();
        $(function() {
            $("#switch_photo #active").change(function() {
                $.ajax({
                    type: "post",
                    url: "/admin/home/bannerPhoto/status",
                    data: {
                        id: ($(this).data("id")),
                        _token: "{{csrf_token()}}"
                    }
                });
            });
            // 僅在home顯示，待處理
            $.ajax({
                type: "get",
                url: "/admin/reserve/getDateNum",
                success: function(data) {
                    console.log(day);
                    var i = 0;
                    var today = day - 8;
                    var j = 0;
                    data.forEach(function(num) {
                        if (num.year == year) {
                            if (num.month == month) {
                                if (num.day == day) {
                                    j++;
                                    i++;
                                } else if (num.day != day && j == 0 && num.day > today) {
                                    mychart.data.labels.push(year + "-" + month + "-" + day);
                                    mychart.data.datasets[0].data.push(j);
                                    day--;
                                    i++;
                                    j++;
                                } else if (num.day != day && num.day > today) {
                                    mychart.data.labels.push(year + "-" + month + "-" + day);
                                    mychart.data.datasets[0].data.push(j);
                                    i++;
                                    day--;
                                    j = 1;
                                }
                            }
                        }

                    })
                    mychart.update();
                }
            });


        }) //end function


        function doNext() {
            document.forms["form1"].action = "insert";
            document.forms["form1"].submit();
        }

        $(document).ready(function() {
            $("#all").click(function() {
                if ($(this).is(":checked")) {
                    $(".chk").attr("checked", true);
                } else {
                    $(".chk").attr("checked", false);
                }
            });
            // 監聽啟用按鈕
        });

        // 刪除用函式
        function doDelete(FormName) {
            if (confirm("確定刪除")) {
                document.forms[FormName].submit();
            }
        }

        function getCity() {
            $.ajax({
                type: "get",
                url: "/admin/home/title/getXY",
                success: function(locat) {

                    console.log(locat);
                    return locat;
                }
            });
        }
    </script>
</body>

</html>