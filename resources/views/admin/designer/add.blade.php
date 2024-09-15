@extends("admin.app")
@section("content")
<script>
    function doSave() {
        var img = document.querySelector("#getImg");
        html2canvas(img).then(function(canvas) {
            data = canvas.toDataURL("images/png");
            $.ajax({
                url: "/admin/designer/saveImg",
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
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="./list" class="btn btn-info">回上頁</a>
                </div>
                <div class="card-body" id="getImg">
                    <form method="post" id="form1" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="row mt-3">
                            <div class="col-2 text-end col-form-label">設計師</div>
                            <div class="col-10">
                                <input type="text" name="name" class="form-control border border-dark">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2 text-end">照片</div>
                            <div class="col-10">
                                <input type="file" name="photo" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2 text-end">專長</div>
                            <div class="col-10">
                                <input type="text" name="expertise" class="form-control border border-dark">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-2 text-end">介紹</div>
                            <div class="col-10">
                                <textarea type="text" name="introduce" class="form-control border border-dark" rows="5"></textarea>
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