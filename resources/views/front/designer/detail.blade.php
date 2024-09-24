@extends("app")
@section("content")
<div id="foc" class="container mt-3">
    <div class="row justify-content-center bg">
        <div class="card border-0 w-75" style="background-color: #F5F5DC;">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-6 text-center">
                        <img class="mt-3 rounded-4 border border-3 " src="/images/designer/{{$designer->photo}}" alt="" style="width: 80%;">
                    </div>
                    <div class="col-6 mt-3">
                        <div class="h2 text-start mt-3" style="color:#556B2F;">{{$designer->name}}</div></br></br>
                        <div class="h5 mt-3" style="color:#3A3A3A;">專長:{!!$designer->expertise!!}</div></br>
                        <div class="row">
                            <div class="col-8">
                                <div class="mt-3 text01" style="color:#3A3A3A;">{!!$designer->introduce!!}</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection