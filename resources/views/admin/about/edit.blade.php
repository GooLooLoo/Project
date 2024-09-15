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
                        <form method="post" id="form1" enctype="multipart/form-data" action="../update">
                            <input type="hidden" name="id" value="{{$about->id}}">
                            {{csrf_field()}}
                            <div class="row mt-3">
                                <div class="col-2 text-center col-form-label">標題</div>
                                <div class="col-10">
                                    <input type="text" name="title" class="form-control border border-dark" value="{{$about->title}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-2 text-center">內容</div>
                                <div class="col-10">
                                    <textarea type="text" name="content" class="form-control border border-dark" rows="5">{{str_replace("<br>","\n",$about->content)}}</textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-2 text-center">圖片</div>
                                <div class="col-10">
                                    <input type="file" name="photo" class="form-control">
                                    @if(!empty($about->photo))
                                    <div><img src="/images/about/S/{{$about->photo}}" alt=""></div>
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