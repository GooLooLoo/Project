<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後臺管理系統</title>
    <link rel="stylesheet" href="/css/Ming.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/lightbox.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-secondary sticky-top mb-3">
        <div class="container-fluid">
            <a class="navbar-brand fw-600 text-bg-secondary" href="#">後台管理系統</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- active 待處理 -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">控制台</a>
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
        $(function() {
            $("#switch_photo #active").change(function() {
                console.log($(this).val());
                $.ajax({
                    type: "post",
                    url: "/admin/home/bannerPhoto/status",
                    data: {
                        id: ($(this).data("id")),
                        _token: "{{csrf_token()}}"
                    }
                });
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
    </script>
</body>

</html>