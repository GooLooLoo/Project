<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>微笑髮廊後台管理系統</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/Ming.css">
</head>


<body class="h-100 bg-modal">
    <div class="container p-5">
        <div class="row"  >
            <div class="col-md-8 ">
                <div class="card mt-4">
                    <div class="card-body mt-3">
                        <form action="/admin/login" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-4 col-sm-4 col-md-3 col-lg-2 text-end">帳號</div>
                                <div class="col-8 col-sm-5 col-md-4 col-lg-3 text-left">
                                    <input type="text" name="userId" class="from-control" value="{{old('userId')}}" required>
                                    @if($errors->has("error"))
                                    <div class="text-danger">{{$errors->first("error")}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-4 col-sm-4 col-md-3 col-lg-2 text-end">密碼</div>
                                <div class="col-8 col-sm-5 col-md-4 col-lg-3 text-left">
                                    <input type="password" name="pwd" class="from-control" value="{{old('pwd')}}" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-4 col-sm-4 col-md-2  text-end">驗證碼</div>
                                <div class="col-4 col-sm-4 col-md-4  text-left">
                                    <input type="text" name="code" class="from-control" required>
                                    @if($errors->has("code"))
                                    <div class="text-danger">{{ $errors->first("code")}}</div>
                                    @endif
                                </div>
                                <div class="col-4 col-sm-4 col-md-4 text-right">
                                    <img class="captcha" src="/captcha/flat" onclick="this.src='/captcha/flat?' + Math.random()" style="cursor:pointer">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-5 text-center">
                                    <button type="submit" class="btn btn-warning">我 要 登 入</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/jquery-3.7.1.min.js"></script>
</body>

</html>