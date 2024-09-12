<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後台管理系統</title>
</head>
<link rel="stylesheet" href="css\bootstrap.min.css">

<body>
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
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
                        <div class="col-4 col-sm-4 col-md-3 col-lg-2 text-end">驗證碼</div>
                        <div class="col-4 col-sm-4 col-md-4 col-lg-2 text-left">
                            <input type="text" name="code" class="from-control" required>
                            @if($errors->has("code"))
                            <div class="text-danger">{{ $errors->first("code")}}</div>
                            @endif
                        </div>
                        <div class="col-4 col-sm-4 col-md-3 col-lg-2 text-center">
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
    <script src="js\jquery-3.7.1.min.js"></script>
</body>

</html>