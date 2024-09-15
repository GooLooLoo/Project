@extends("admin.app")
@section("content")
<script>
    function doSave() {
        var img = document.querySelector("#getImg");
        html2canvas(img).then(function(canvas) {
            data = canvas.toDataURL("images/png");
            $.ajax({
                url: "/admin/about/saveImg",
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

    function doNext() {
        document.forms["form1"].action = "insert";
        document.forms["form1"].submit();
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
                        <form method="post" id="form1" enctype="multipart/form-data" action="update">
                            <input type="hidden" name="id" value="{{$home->id}}">
                            {{csrf_field()}}
                            <div class="row mt-3">
                                <div class="col-2 text-center col-form-label">標題</div>
                                <div class="col-10">
                                    <input type="text" name="title" class="form-control border border-dark" value="{{$home->title}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-2 text-center col-form-label">英文標題</div>
                                <div class="col-10">
                                    <input type="text" name="titleEng" class="form-control border border-dark" value="{{$home->titleEng}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-2 text-center">圖片</div>
                                <div class="col-10">
                                    <input type="file" name="photo" class="form-control">
                                    @if(!empty($home->photo))
                                    <div><img src="/images/home/title/S/{{$home->photo}}" alt=""></div>
                                    @endif
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