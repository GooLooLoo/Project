@extends("admin.app")
@section("content")
<script>
    function doSave() {
        var img = document.querySelector("#getImg");
        html2canvas(img).then(function(canvas) {
            data = canvas.toDataURL("images/png");
            $.ajax({
                url: "/admin/home/bannerPhoto/saveImg",
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
</script>
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <a href="list" class="btn btn-info">回上頁</a>
                </div>
                <div class="card-body" id="getImg">
                    <form method="post" id="form1" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row mt-3">
                            <div class="col-2 text-end">圖檔</div>
                            <div class="col-10">
                                <input type="file" name="photo" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-8 text-center">
                                <button type="button" class="btn btn-primary btn-lg" onclick="doSave()">儲 存</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection