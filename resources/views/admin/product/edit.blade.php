@extends("admin.app")
@section("content")
<script>
    function doSave() {
        var img = document.querySelector("#getImg");
        html2canvas(img).then(function(canvas) {
            data = canvas.toDataURL("images/png");
            $.ajax({
                url: "/admin/product/saveImg",
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
                            <input type="hidden" name="id" value="{{$product->id}}">
                            {{csrf_field()}}
                            <div class="row mt-3">
                                <div class="col-2 text-center col-form-label">產品名稱</div>
                                <div class="col-10">
                                    <input type="text" name="name" class="form-control border border-dark" value="{{$product->name}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-2 text-center">圖片</div>
                                <div class="col-10">
                                    <input type="file" name="photo" class="form-control">
                                    @if(!empty($product->photo))
                                    <div><img src="/images/product/M/{{$product->photo}}" alt=""></div>
                                    @endif
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-2 text-center">產品簡介</div>
                                <div class="col-10">
                                    <textarea type="text" name="introduceShort" class="form-control border border-dark" rows="5">{{str_replace("<br>","\n",$product->introduceShort)}}</textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-2 text-center">產品介紹</div>
                                <div class="col-10">
                                    <textarea type="text" name="introduce" class="form-control border border-dark" rows="5">{{str_replace("<br>","\n",$product->introduce)}}</textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-2 text-end">產品數量</div>
                                <div class="col-3">
                                    <input type="number" name="number" class="form-control border border-dark" min="0" value="{{$product->number}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-2 text-end">產品價格</div>
                                <div class="col-3">
                                    <input type="number" name="price" class="form-control border border-dark" min="0" value="{{$product->price}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label class="col-2 text-end" for="">是否上架:</label>
                                <div class="col-6 mt-1">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="active" value="Y" {{$product->active == "Y" ? "checked" : ""}}>
                                        <label for="" class="ms-2 fw-400 form-check-label" >上架</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="active" value="N" {{$product->active == "N" ? "checked" : ""}}>
                                        <label for="" class="ms-2 fw-400 form-check-label">下架</label>
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