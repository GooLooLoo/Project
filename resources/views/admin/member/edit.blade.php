@extends("admin.app")
@section("content")
<script>
    function doSave() {
        var img = document.querySelector("#getImg");
        html2canvas(img).then(function(canvas) {
            data = canvas.toDataURL("images/png");
            $.ajax({
                url: "/admin/member/saveImg",
                type: "POST",
                data: {
                    data: data,
                    _token: "{{csrf_token()}}"
                },
                success: function(msg) {
                    doNext();
                }
            });
        });
    }

    function showPwd() {
        $("#pwd").removeAttr("disabled");
        $("#pwd").attr("type", "text");
        $("#show").addClass("d-none");
        $("#hide").removeClass("d-none");
    }

    function hidePwd() {
        $("#pwd").attr("disabled","");
        $("#pwd").attr("type", "password");
        $("#show").removeClass("d-none");
        $("#hide").addClass("d-none");
    }
</script>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <a href="../list" class="btn btn-info">回上頁</a>
                    </div>
                    <div class="card-body" id="getImg">
                        <form method="post" id="form1" action="../update">
                            <input type="hidden" name="id" value="{{$member->id}}">
                            {{csrf_field()}}
                            <div class="row mt-3">
                                <div class="col-2 text-center col-form-label">會員編號</div>
                                <div class="col-3">
                                    <input type="text" name="id" class="form-control border border-dark" value="{{$member->id}}" disabled>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-2 text-center">會員帳號</div>
                                <div class="col-3">
                                    <input type="text" name="userName" class="form-control border border-dark" value="{{$member->userName}}" disabled>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-2 text-center">會員密碼</div>
                                <div class="col-3">
                                    <input id="pwd" type="password" name="password" class="form-control border border-dark" value="{{$member->password}}" disabled>
                                </div>
                                <div class="col-3">
                                    <button id="show" type="button" class="btn btn-warning" onclick="showPwd()">顯示密碼</button>
                                    <button id="hide" type="button" class="btn btn-warning d-none" onclick="hidePwd()">隱藏密碼</button>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-2 text-center">會員信箱</div>
                                <div class="col-3">
                                    <input type="text" name="email" class="form-control border border-dark" value="{{$member->email}}" disabled>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-2 text-center">會員等級</div>
                                <div class="col-3">
                                    <input type="number" name="level" class="form-control border border-dark" value="{{$member->level}}" min="100">

                                </div>
                                <div class="col-6 mt-2">
                                    <span>100:普通會員 >200:黃金會員 >300:白金會員 >400:鑽石會員</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-2 text-center" for="">帳號狀態:</label>
                                <div class="col-6 mt-1">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="active" value="Y" {{$member->active == "Y" ? "checked" : ""}}>
                                        <label for="" class="ms-2 fw-400 form-check-label">啟用</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="active" value="N" {{$member->active == "N" ? "checked" : ""}}>
                                        <label for="" class="ms-2 fw-400 form-check-label">停權</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-8 text-end">
                                    <button type="submit" class="btn btn-primary btn-lg">儲 存</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection